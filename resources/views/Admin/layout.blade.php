<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>@section('title')鉴金阁@show</title>

        <!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"> -->
        <link href="{{ asset('/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/assets/global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME STYLES -->
        <link href="{{ asset('/assets/global/css/components.css') }}" id="style_components" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/assets/global/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/assets/admin/layout2/css/layout.css') }}" rel="stylesheet" type="text/css"/>
        <link id="style_color" href="{{ asset('/assets/admin/layout2/css/themes/grey.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/assets/admin/layout2/css/custom.css') }}" rel="stylesheet" type="text/css"/>
        <!-- END THEME STYLES -->
        @yield('PAGE-LEVEL')
        <link rel="shortcut icon" href="{{ asset('/assets/img/favicon.ico') }}"/>

    </head>
    @section('body')
    <body  class="page-boxed page-header-fixed page-container-bg-solid page-sidebar-closed-hide-logo page-sidebar-closed page-sidebar-closed-hide-logo">
    @show
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner container">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                    <img src="{{ asset('/assets/admin/layout2/img/logo-default.png') }}" alt="logo" class="logo-default"/>
                    </a>
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE ACTIONS -->
                <!-- DOC: Remove "hide" class to enable the page header actions -->
                <div class="page-actions hide">
                    <div class="btn-group">
                        <button type="button" class="btn btn-circle red-pink dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-bar-chart"></i>&nbsp;<span class="hidden-sm hidden-xs">New&nbsp;</span>&nbsp;<i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="javascript:;">
                                <i class="icon-user"></i> New User </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                <i class="icon-present"></i> New Event <span class="badge badge-success">4</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                <i class="icon-basket"></i> New order </a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="javascript:;">
                                <i class="icon-flag"></i> Pending Orders <span class="badge badge-danger">4</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                <i class="icon-users"></i> Pending Users <span class="badge badge-warning">12</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-circle green-haze dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-bell"></i>&nbsp;<span class="hidden-sm hidden-xs">Post&nbsp;</span>&nbsp;<i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="javascript:;">
                                <i class="icon-docs"></i> New Post </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                <i class="icon-tag"></i> New Comment </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                <i class="icon-share"></i> Share </a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="javascript:;">
                                <i class="icon-flag"></i> Comments <span class="badge badge-success">4</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                <i class="icon-users"></i> Feedbacks <span class="badge badge-danger">2</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END PAGE ACTIONS -->
                <!-- BEGIN PAGE TOP -->
                <div class="page-top">
                    <!-- BEGIN HEADER SEARCH BOX -->
                    <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
                    <form class="search-form search-form-expanded" action="extra_search.html" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." name="query">
                            <span class="input-group-btn">
                            <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
                            </span>
                        </div>
                    </form>
                    <!-- END HEADER SEARCH BOX -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-bell"></i>
                                <span class="badge badge-default">
                                7 </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3><span class="bold">12 pending</span> notifications</h3>
                                        <a href="extra_profile.html">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;">
                                                <span class="time">just now</span>
                                                <span class="details">
                                                <span class="label label-sm label-icon label-success">
                                                <i class="fa fa-plus"></i>
                                                </span>
                                                New user registered. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                <span class="time">3 mins</span>
                                                <span class="details">
                                                <span class="label label-sm label-icon label-danger">
                                                <i class="fa fa-bolt"></i>
                                                </span>
                                                Server #12 overloaded. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                <span class="time">10 mins</span>
                                                <span class="details">
                                                <span class="label label-sm label-icon label-warning">
                                                <i class="fa fa-bell-o"></i>
                                                </span>
                                                Server #2 not responding. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                <span class="time">14 hrs</span>
                                                <span class="details">
                                                <span class="label label-sm label-icon label-info">
                                                <i class="fa fa-bullhorn"></i>
                                                </span>
                                                Application error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                <span class="time">2 days</span>
                                                <span class="details">
                                                <span class="label label-sm label-icon label-danger">
                                                <i class="fa fa-bolt"></i>
                                                </span>
                                                Database overloaded 68%. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                <span class="time">3 days</span>
                                                <span class="details">
                                                <span class="label label-sm label-icon label-danger">
                                                <i class="fa fa-bolt"></i>
                                                </span>
                                                A user IP blocked. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                <span class="time">4 days</span>
                                                <span class="details">
                                                <span class="label label-sm label-icon label-warning">
                                                <i class="fa fa-bell-o"></i>
                                                </span>
                                                Storage Server #4 not responding dfdfdfd. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                <span class="time">5 days</span>
                                                <span class="details">
                                                <span class="label label-sm label-icon label-info">
                                                <i class="fa fa-bullhorn"></i>
                                                </span>
                                                System Error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                <span class="time">9 days</span>
                                                <span class="details">
                                                <span class="label label-sm label-icon label-danger">
                                                <i class="fa fa-bolt"></i>
                                                </span>
                                                Storage server failed. </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN INBOX DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-envelope-open"></i>
                                <span class="badge badge-default">
                                4 </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>You have <span class="bold">7 New</span> Messages</h3>
                                        <a href="page_inbox.html">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                            <li>
                                                <a href="inbox.html?a=view">
                                                <span class="photo">
                                                <img src="{{ asset('/assets/admin/layout3/img/avatar2.jpg') }}" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                <span class="from">
                                                Lisa Wong </span>
                                                <span class="time">Just Now </span>
                                                </span>
                                                <span class="message">
                                                Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="inbox.html?a=view">
                                                <span class="photo">
                                                <img src="{{ asset('/assets/admin/layout3/img/avatar3.jpg') }}" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                <span class="from">
                                                Richard Doe </span>
                                                <span class="time">16 mins </span>
                                                </span>
                                                <span class="message">
                                                Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="inbox.html?a=view">
                                                <span class="photo">
                                                <img src="{{ asset('/assets/admin/layout3/img/avatar1.jpg') }}" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                <span class="from">
                                                Bob Nilson </span>
                                                <span class="time">2 hrs </span>
                                                </span>
                                                <span class="message">
                                                Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="inbox.html?a=view">
                                                <span class="photo">
                                                <img src="{{ asset('/assets/admin/layout3/img/avatar2.jpg') }}" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                <span class="from">
                                                Lisa Wong </span>
                                                <span class="time">40 mins </span>
                                                </span>
                                                <span class="message">
                                                Vivamus sed auctor 40% nibh congue nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="inbox.html?a=view">
                                                <span class="photo">
                                                <img src="{{ asset('/assets/admin/layout3/img/avatar3.jpg') }}" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                <span class="from">
                                                Richard Doe </span>
                                                <span class="time">46 mins </span>
                                                </span>
                                                <span class="message">
                                                Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END INBOX DROPDOWN -->
                            <!-- BEGIN TODO DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-calendar"></i>
                                <span class="badge badge-default">
                                3 </span>
                                </a>
                                <ul class="dropdown-menu extended tasks">
                                    <li class="external">
                                        <h3>You have <span class="bold">12 pending</span> tasks</h3>
                                        <a href="page_todo.html">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;">
                                                <span class="task">
                                                <span class="desc">New release v1.2 </span>
                                                <span class="percent">30%</span>
                                                </span>
                                                <span class="progress">
                                                <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">40% Complete</span></span>
                                                </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                <span class="task">
                                                <span class="desc">Application deployment</span>
                                                <span class="percent">65%</span>
                                                </span>
                                                <span class="progress">
                                                <span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">65% Complete</span></span>
                                                </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                <span class="task">
                                                <span class="desc">Mobile app release</span>
                                                <span class="percent">98%</span>
                                                </span>
                                                <span class="progress">
                                                <span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">98% Complete</span></span>
                                                </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                <span class="task">
                                                <span class="desc">Database migration</span>
                                                <span class="percent">10%</span>
                                                </span>
                                                <span class="progress">
                                                <span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">10% Complete</span></span>
                                                </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                <span class="task">
                                                <span class="desc">Web server upgrade</span>
                                                <span class="percent">58%</span>
                                                </span>
                                                <span class="progress">
                                                <span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">58% Complete</span></span>
                                                </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                <span class="task">
                                                <span class="desc">Mobile development</span>
                                                <span class="percent">85%</span>
                                                </span>
                                                <span class="progress">
                                                <span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">85% Complete</span></span>
                                                </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                <span class="task">
                                                <span class="desc">New UI release</span>
                                                <span class="percent">38%</span>
                                                </span>
                                                <span class="progress progress-striped">
                                                <span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">38% Complete</span></span>
                                                </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="{{ asset('/assets/admin/layout2/img/avatar3_small.jpg') }}"/>
                                <span class="username username-hide-on-mobile">
                                Nick </span>
                                <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="extra_profile.html">
                                        <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href="page_calendar.html">
                                        <i class="icon-calendar"></i> My Calendar </a>
                                    </li>
                                    <li>
                                        <a href="inbox.html">
                                        <i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
                                        3 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page_todo.html">
                                        <i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
                                        7 </span>
                                        </a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                    <li>
                                        <a href="extra_lock.html">
                                        <i class="icon-lock"></i> Lock Screen </a>
                                    </li>
                                    <li>
                                        <a href="/admin/login">
                                        <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <div class="clearfix">
        </div>
        <div class="container">
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                        <ul class="page-sidebar-menu page-sidebar-menu-hover-submenu page-sidebar-menu-closed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                            <li class="start active open">
                                <a href="javascript:;">
                                <i class="icon-home"></i>
                                <span class="title">主页</span>
                                <span class="selected"></span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                <i class="icon-rocket"></i>
                                <span class="title">商品  </span>
                                <span class="selected"></span>
                                <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{ url('/admin/goods/show') }}">
                                        <span class="badge badge-roundless badge-danger">new</span>商品列表</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/goods/add') }}">
                                        <span class="badge badge-roundless badge-danger">new</span>添加商品</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/goods/edit') }}">
                                        <span class="badge badge-roundless badge-danger">new</span>编辑商品</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">
                                <i class="icon-basket"></i>
                                <span class="title">订单</span>
                                <span class="arrow "></span>
                                </a>
                            </li>
                            <li class="last ">
                                <a href="javascript:;">
                                <i class="icon-pointer"></i>
                                <span class="title">会员</span>
                                <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="javascript:;">
                                        Google Maps</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- END SIDEBAR MENU -->
                    </div>
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                        <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                        <h4 class="modal-title">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                         Widget settings form goes here
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn blue">Save changes</button>
                                        <button type="button" class="btn default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                        <!-- BEGIN STYLE CUSTOMIZER -->
                        <div class="theme-panel">
                            <div class="toggler tooltips" data-container="body" data-placement="left" data-html="true" data-original-title="Click to open advance theme customizer panel">
                                <i class="icon-settings"></i>
                            </div>
                            <div class="toggler-close">
                                <i class="icon-close"></i>
                            </div>
                            <div class="theme-options">
                                <div class="theme-option theme-colors clearfix">
                                    <span>
                                    THEME COLOR </span>
                                    <ul>
                                        <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
                                        </li>
                                        <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
                                        </li>
                                        <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
                                        </li>
                                        <li class="color-dark tooltips" data-style="dark" data-container="body" data-original-title="Dark">
                                        </li>
                                        <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
                                        </li>
                                    </ul>
                                </div>
                                <div class="theme-option">
                                    <span>
                                    Theme Style </span>
                                    <select class="layout-style-option form-control input-small">
                                        <option value="square" selected="selected">Square corners</option>
                                        <option value="rounded">Rounded corners</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span>
                                    Layout </span>
                                    <select class="layout-option form-control input-small">
                                        <option value="fluid" selected="selected">Fluid</option>
                                        <option value="boxed">Boxed</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span>
                                    Header </span>
                                    <select class="page-header-option form-control input-small">
                                        <option value="fixed" selected="selected">Fixed</option>
                                        <option value="default">Default</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span>
                                    Top Dropdown</span>
                                    <select class="page-header-top-dropdown-style-option form-control input-small">
                                        <option value="light" selected="selected">Light</option>
                                        <option value="dark">Dark</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span>
                                    Sidebar Mode</span>
                                    <select class="sidebar-option form-control input-small">
                                        <option value="fixed">Fixed</option>
                                        <option value="default" selected="selected">Default</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span>
                                    Sidebar Style</span>
                                    <select class="sidebar-style-option form-control input-small">
                                        <option value="default" selected="selected">Default</option>
                                        <option value="compact">Compact</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span>
                                    Sidebar Menu </span>
                                    <select class="sidebar-menu-option form-control input-small">
                                        <option value="accordion" selected="selected">Accordion</option>
                                        <option value="hover">Hover</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span>
                                    Sidebar Position </span>
                                    <select class="sidebar-pos-option form-control input-small">
                                        <option value="left" selected="selected">Left</option>
                                        <option value="right">Right</option>
                                    </select>
                                </div>
                                <div class="theme-option">
                                    <span>
                                    Footer </span>
                                    <select class="page-footer-option form-control input-small">
                                        <option value="fixed">Fixed</option>
                                        <option value="default" selected="selected">Default</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- END STYLE CUSTOMIZER -->
                        <!-- BEGIN PAGE HEADER-->
                        <h3 class="page-title">
                        鉴金阁 <small>后台管理系统</small>
                        </h3>
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <i class="fa fa-home"></i>
                                    @section('Breadcrumbs_1')
                                    <a href="/admin">Home</a>
                                    @show
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    @section('Breadcrumbs_2')
                                    <a href="#">Page Layouts</a>
                                    @show
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    @section('Breadcrumbs_3')
                                    <a href="#">Sidebar Closed Page</a>
                                    @show
                                </li>
                            </ul>
                            <div class="page-toolbar">
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                                    Actions <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li>
                                            @section('action_1')
                                            <a href="#">Action</a>
                                            @show
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN PAGE CONTENT-->
                        <div class="row">
                            <div class="col-md-12">
                                @yield('pageContent')
                            </div>
                        </div>
                        <!-- END PAGE CONTENT-->
                    </div>
                </div>
                <!-- END CONTENT -->
                <!-- BEGIN QUICK SIDEBAR -->
                <!--Cooming Soon...-->
                <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner">
                     2017 &copy; Metronic by keenthemes.
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>
        <script src="{{ asset('/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/assets/global/plugins/jquery-migrate.min.js') }}" type="text/javascript"></script>
        <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
        <script src="{{ asset('/assets/global/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/assets/global/plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/assets/global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <script src="{{ asset('/assets/global/scripts/metronic.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/assets/admin/layout2/scripts/layout.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/assets/admin/layout2/scripts/demo.js') }}" type="text/javascript"></script>
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script type="text/javascript" src="{{ asset('/assets/global/plugins/select2/select2.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') }}"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <script src="{{ asset('/assets/admin/pages/scripts/table-advanced.js') }}" type="text/javascript"></script>

        <script>
        jQuery(document).ready(function() {    
            Metronic.init(); // init metronic core components
            Layout.init(); // init current layout
            Demo.init(); // init demo features
            TableAdvanced.init();
        });
        </script>
        <!-- <script src="{{ asset('/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script> -->
        @yield('pageJs')
   
    </body>
</html>
