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
            if($file){
                $No = rand(1,100).'/'.time();
                $dir = 'upload/'.$No;
                $filePath = $No.'/'.$file->getClientOriginalName();
                $file->move($dir,$file->getClientOriginalName());
            }else{
                $filePath = '';
            }

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
            // get_image_dir
            $img_path = DB::table('jjg_goods')->where('id', $goodsId)->value('goods_images');
            $url = public_path().'/upload/'.$img_path;
            $old_dir = explode('/', $img_path);
            array_pop($old_dir);
            $old_dir = implode('/', $old_dir);

            $dir = explode('/', $url);
            array_pop($dir);
            $dir = implode('/', $dir);

            $file = $request->file('fileName');
            if($file){
                $filePath = $old_dir.'/'.$file->getClientOriginalName();
                $file->move($dir,$file->getClientOriginalName());
                if($img_path){
                    unlink($url);
                }
            }else{
                $filePath = $img_path;
            }           

            DB::table('jjg_goods')->where('id', $goodsId)->update([
                'goods_name'=>$_POST['goodsName'],
                'goods_price'=>$_POST['goodsPrice'],
                'goods_images'=>$filePath,
            ]);
            return redirect()->action('Admin\GoodsController@show');
        }

        $goodsData = DB::table('jjg_goods')->where('id', $goodsId)->first();
        return view('Admin/Goods/edit', ['goodsData'=>$goodsData]);
    }
    /*
        TODO : rmdir!
        @ url : images_path
        @ result : sql_query_result
    */
    public function delete($goodsId)
    {
        $img_path = DB::table('jjg_goods')->where('id', $goodsId)->value('goods_images');
        $url = public_path().'/upload/'.$img_path;
        $result = DB::table('jjg_goods')->where('id', $goodsId)->delete();
        if($result){
            if($img_path){
                unlink($url);
            }
            return redirect()->action('Admin\GoodsController@show');
        }
        
    }
}
