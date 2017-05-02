<?php

namespace App\Http\Controllers\Admin;

// use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class GoodsController extends BaseController
{
    public function add(){
        echo '<script>alert("你最帅了")</script>';
    }
    public function custom($action = 'show'){
        var_dump($_POST);exit;
        if($_POST){
            return $this->$action();
        }

        return view('Admin/Goods/'.$action);
        
    }
}
