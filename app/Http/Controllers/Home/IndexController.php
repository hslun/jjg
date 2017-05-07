<?php

namespace App\Http\Controllers\Home;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;


class IndexController extends BaseController
{
    public function index(){
    	$data['ring'] = DB::table('jjg_goods')->get();
        return view('Home/index', ['data'=>$data]);
    }
}
