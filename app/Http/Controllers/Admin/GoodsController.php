<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class GoodsController extends BaseController
{
    /*
        商品管理
        @add: $request为图片相关信息
    */
    public function show(){
        $goodsData = DB::table('jjg_goods')->get();
        return view('Admin/Goods/show',['goodsData'=>$goodsData]);
    }

    public function add(Request $request){
        if($_POST){
            $file = $request->file('fileName');
            $No = rand(1,100).'/'.time();
            $dir = 'upload/'.$No;
            $filePath = $No.'/'.$file->getClientOriginalName();
            $file->move($dir,$file->getClientOriginalName());

            DB::table('jjg_goods')->insert([
                'goods_name'=>$_POST['goodsName'],
                'goods_price'=>$_POST['goodsPrice'],
                'goods_images'=>$filePath,
            ]);
            return redirect()->action('Admin\GoodsController@show');
        }
        return view('Admin/Goods/add');
    }
    
    public function edit(Request $request, $goodsId){
        if($_POST){
            // $file = $request->file('fileName');
            // $No = rand(1,100).'/'.time();
            // $dir = 'upload/'.$No;
            
            // $filePath = $No.'/'.$file->getClientOriginalName();
            // $file->move($dir,$file->getClientOriginalName());

            DB::table('jjg_goods')->where('id', $goodsId)->update([
                'goods_name'=>$_POST['goodsName'],
                'goods_price'=>$_POST['goodsPrice'],
                // 'goods_images'=>$filePath,
            ]);
            return redirect()->action('Admin\GoodsController@show');
        }

        $goodsData = DB::table('jjg_goods')->where('id', $goodsId)->first();
        return view('Admin/Goods/edit', ['goodsData'=>$goodsData]);
    }
}
