<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\Models\UserAssortment;
use App\Exports\DealersByAssortmentExport;
use App\Exports\StockExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Events\DealersUpdatedEvent;

class AppController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function dashboard() {

        $dealers = User::where('role', 'dealer')->paginate(20);

        $users_assortments = UserAssortment::select('ocascd', DB::raw('count(*) as total'))->groupBy('ocascd')->orderBy('total', 'desc')->get();
        return view('back.dashboard', [
            'dealers' => $dealers,
            'users_assortments' => $users_assortments,
        ]);
    }

    public function profile()
    {
        return view('profile');
    }

    public function search()
    {
        return view('search');
    }

    public function exportDealers()
    {
        return Excel::download(new DealersByAssortmentExport, 'dealer_'.date('Ymd_His').'.xlsx');
    }

    public function exportProducts()
    {
        return Excel::download(new StockExport, 'stock_'.date('Ymd_His').'.xlsx');
    }

}
