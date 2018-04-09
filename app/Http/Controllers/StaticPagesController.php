<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Providers\testprovider;
use Auth;
class StaticPagesController extends Controller
{
	
		public function __construct(testprovider $users)
		{
			$this->a = '?' ;
			$this->a = $users->abc ;
		}

    public function home()
    {
   			//$users = DB::connection('mysql')->select('select * from mysql.user where 1');
				//print_r($users) ;
        return view('static_pages.home',['abc'=>$this->a]);
    }

    public function help()
    {
    		
        return view('static_pages/help');
    }

    public function about()
    {
        return view('static_pages/about');
    }
    public function apitest()
    {
        $users = DB::connection('mysql')->select('select * from users where 1');
        return $users;
        //return view('static_pages/apitest');
    }
    public function cebian()
    {
        return view('static_pages/cebian') ;
    }
}
