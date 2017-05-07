@extends('Admin.layout')

@section('Breadcrumbs_2')
<a href="show">商品管理</a>
@stop

@section('Breadcrumbs_3')
<a href="#">列表</a>
@stop

@section('action_1')
<a href="{{ url('admin/goods/add') }}">添加</a>
@stop

@section('pageContent')
    @section('PAGE-LEVEL')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/global/plugins/select2/select2.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') }}"/>
    <!-- END PAGE LEVEL STYLES -->
    @stop
<style>
    .sm_images img{width:20px;}
</style>
<div class="portlet box blue-hoki">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Datatable with TableTools
        </div>
        <div class="tools">
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_1">
            <thead>
                <tr>
                    <th>
                         ID
                    </th>
                    <th>
                         名称
                    </th>
                    <th>
                         价格
                    </th>
                    <th>
                         图片
                    </th>
                    <th class="col-xs-3">
                         操作
                    </th>
                </tr>
            </thead>
            <tbody>
            @if($goodsData)
                @foreach ($goodsData as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->goods_name }}</td>
                    <td>{{ $value->goods_price }}</td>
                    <td class="sm_images">
                        <img src="{{ '/upload/'.$value->goods_images}}">
                    </td>
                    <td>
                        <a href="{{ url('/admin/goods/edit/'.$value->id) }}" class="col-xs-2">
                            <i class="fa fa-pencil fa-fw"></i>
                        </a>
                        <!-- <a href="{{ url('/admin/goods/delete/'.$value->id) }}" class="col-xs-2" data-dismiss="alert" aria-hidden="true"> -->
                        <a href="javascript:;" data-toggle="modal"  onclick="modalConfirm('确定要删除吗','/admin/goods/delete/{{$value->id}}')">
                            <i class="fa fa-trash-o fa-fw"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div> 

@stop

@include('common.confirm')