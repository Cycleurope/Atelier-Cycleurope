<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use DB;

class UpdateUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import et mise à jour des comptes utilisateurs';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        ini_set('memory_limit', '256M');
        $ftp = Storage::createFtpDriver([
            'host'      => '51.83.69.192',
            'username'  => 'gsvftp2020',
            'password'  => 'Gsv2020ftp!',
            'port'      => 21,
            'timeout'   => 30
        ]);

        $filename       = "public/users/export_users_".date('Ymd') . ".csv";
        $filecontent    = $ftp->get($filename);
        Storage::disk('local')->put('dealers.csv', $filecontent);
        $path = storage_path('app/dealers.csv');

        Excel::import(new UsersImport, $path);
    }
}
