@extends('Admin.layout')

@section('pageContent')
<div class="tabbable tabbable-custom tabbable-noborder tabbable-reversed">
    
    <div class="tab-content">
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>添加商品
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                {!! Form::open(['class'=>'form-horizontal']) !!}
                    <div class="form-actions top">
                        
                    </div>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">名称</label>
                            <div class="col-md-4">
                                <input type="text" name="goodsName" class="form-control" placeholder="Enter name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">价格</label>
                            <div class="col-md-4">
                                <input type="text" name="goodsPrice" class="form-control" placeholder="Email price">
                            </div>
                        </div>
                        
                        <div class="form-group last">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn green">Submit</button>
                                        <button type="button" class="btn default">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                {!! Form::close() !!}
                <!-- END FORM-->
            </div>
        </div>
    </div>
</div>
@stop