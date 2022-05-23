<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AkaKmhImport;
use App\Imports\HunianImport;
use App\Imports\KepegawaianImport;
use App\Imports\KwsKmhKrwImport;
use App\Imports\KwsKmhKrwImport2;
use App\Imports\OnHandImport;
use App\Imports\SisfoImport;
use App\Imports\UsersImport;
use App\Imports\MembershipImport;
use App\Imports\NilaiImport;
use App\Imports\SekolahImport;
use App\Models\User;
use App\Imports\SummaryImport;
use App\Imports\LocationImport;
use App\Imports\InfrastrukturAtasImport;

class ImportController extends Controller
{
    public function importData(Request $request) {
        set_time_limit(0);
        ini_set('memory_limit', '-1');
        Excel::import(new KwsKmhKrwImport, $request->file('fileExcel'));
        return response()->json(['status'=>'success'], 200);
    }
    public function importUsers(Request $request) {
        // return User::all();
        set_time_limit(0);
        Excel::import(new UsersImport, $request->file('fileExcel'));
        return 'mantap';
    }

    public function importAkaKmh(Request $request) {
        Excel::import(new AkaKmhImport, $request->file('fileExcel'));
        return redirect('/dashboard');
    }

    public function importKepegawaian(Request $request) {
        Excel::import(new KepegawaianImport, $request->file('fileExcel'));
        return redirect('/dashboard');
    }
}
