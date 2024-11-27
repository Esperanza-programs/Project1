<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function getDatabase(){
        
    }
    public function createAccount(Request $request){
        return view("account-create");
    }

    public function ShowData(Request $request){
        $data = array('2310900094', 'Kim Ngoc Tam');
        return view("show-data", ['data' => $data]);
    }

    //actio: return list data to view
    public function listAccount(Request $request){
        $data = array([
            'id' => 1,
            'username' => 'KimTam',
            'password' => '123456a@',
            'Fullname' => 'Kim Ngoc Tam'
        ],[
            'id' => 2,
            'username' => 'Devmaster',
            'password' => '123456a@',
            'Fullname' => 'Devmaster Academy'
        ]);
        return view('account-list', ['list'=>$data]);
    }

    // get data to view from database
    public function getallAccount(Request $request){
        // Read data from mysql
        $model = DB::table('accounts')->get();

        return view('account-get-all', ['model'=> $model]);
    }
}
