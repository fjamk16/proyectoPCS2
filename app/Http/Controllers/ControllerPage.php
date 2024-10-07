<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerPage extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function testDB()
    { 
        $users = DB::select('SELECT * FROM atenciones_2021_2022');
        return view('test-db', ['users' => $users]);
    }
}
