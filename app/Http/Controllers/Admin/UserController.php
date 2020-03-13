<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:isAdmin');
    }

    public function index()
    {

        app('debugbar')->disable();
        $users = User::where('role', 'dealer')->orderBy('username', 'ASC')->paginate(50);   
        return view('back.users.index', [
            'users' => $users,
            'page_title' => 'Tous les comptes clients'
        ]);

    }

    public function cycleurope()
    {

        app('debugbar')->disable();
        $page_title = "Tous les comptes Cycleurope";
        $users = User::where('role', '!=', 'dealer')->orderBy('username', 'ASC')->get();   
        return view('back.users.index', [
            'page_title' => $page_title,
            'users' => $users
        ]); 

    }

    public function withRole($role = "norole") 
    {
        switch($role):
            case 'admin':
                $page_title = "Comptes administrateurs";
            break;
            case "sales":
                $page_title = "Comptes Commerciaux";
            break;
            case "support":
                $page_title = "Comptes Support";
            break;
            case "dealer":
                $page_title = "Comptes Clients";
            break;
            default:
                $page_title = "Comptes";
        endswitch;

        app('debugbar')->disable();
        $users = User::where('role', $role)->orderBy('username', 'ASC')->get();   
        return view('back.users.index', [
            'page_title' => $page_title,
            'users' => $users
        ]); 

    }

    public function create()
    {
        return view('back.users.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => bcrypt($request->password),
            'active' => 1
        ]);

        return redirect()->route('admin.users.cycleurope')
            ->with('message', 'Le compte a bien été crée.')
            ->with('class', 'success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function byUsername(Request $request)
    {
        if(User::where('username', $request->username)->exists()) {
            return $this->show($request->username);
        } else {
            return redirect()->route('admin.users.index')
                ->with('class', 'warning')
                ->with('message', 'Aucun utilisateur n\'existe avec le code client <span class="font-weight-bold">'.$request->username.'</span>.');
        }
    }

    public function show($username)
    {
        $user = User::where('username', $username)->first();
        return view('back.users.show', [
            'dealer' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('back.users.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message = "Le compte a été mis à jour.";
        $user = User::find($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        if($request->password != '') {
            $message = "Le compte a été mis à jour et un nouveau mot de passe a été renseigné.";
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect()->route('admin.users.sales')
            ->with('class', 'info')
            ->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $this->authorize('isAdmin');
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.users.index');

    }

    public function activate(Request $request, $id)
    {
        $request->validate([
            'password' => ['required'],
            'confirm_password' => ['same:password'],
        ]);

        User::find($id)->update(['password' => Hash::make($request->password), 'active' => 1, 'm3pin' => 0]);
        
        return redirect()->route('admin.users.index')
            ->with('message', 'Le compte a bien été activé.')
            ->with('class', 'success');
    }

    public function desactivate($id)
    {
        User::find($id)->update(['active' => 0]);
        return redirect()->route('admin.users.index')
            ->with('message', 'Le compte a bien été desactivé.')
            ->with('class', 'danger');
    }

    public function outdatedAssortments()
    {
        $users = User::whereHas('assortments', function($q) {
            $q->where('octdat', '<=', date('Ymd'));
        })->get();

        return view('back.users.outdated', [
            'users' => $users
        ]);  
    }

    public function lastLogins()
    {
        $users = User::where('last_login_at', '!=', null)->orderBy('last_login_at', 'DESC')->limit(30)->get();
        return view('back.users.last-logins', [
            'users' => $users
        ]);
    }

}
