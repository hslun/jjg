<?php

namespace App\Http\Controllers\Admin;

// use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class GoodsController extends BaseController
{
    public function add($arr){
        if($_POST){
            DB::table('jjg_goods')->insert([
                'goods_name'=>$arr['goodsName'],
                'goods_price'=>$arr['goodsPrice'],
            ]);
            return $this->show();
        }
        return view('Admin/Goods/add');
    }
    public function custom($action = 'show'){
        return $this->$action($_POST);
    }
    public function show(){
        $goodsData = DB::table('jjg_goods')->get();
        return view('Admin/Goods/show',['goodsData'=>$goodsData]);
    }
}
