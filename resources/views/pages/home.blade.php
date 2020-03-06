@extends('layouts.base')
@section('content')
    <h3>{{$title}}</h3>
       <p>let me have the dashboard</p>
       <div class="header">
    <div class="logo">
        <i class="fa fa-tachometer"></i>
        <span>Brand</span>
    </div>
    <a href="#" class="nav-trigger"><span></span></a>
</div>
<div class="side-nav">
    <div class="logo">
        <i class="fa fa-tachometer"></i>
        <span>Brand</span>
    </div>
    <nav>
        <ul>
            <li>
                <a href="#">
                    <span><i class="fa fa-user"></i></span>
                    <span>Users</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span><i class="fa fa-envelope"></i></span>
                    <span>Messages</span>
                </a>
            </li>
            <li class="active">
                <a href="#">
                    <span><i class="fa fa-bar-chart"></i></span>
                    <span>Analytics</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span><i class="fa fa-credit-card-alt"></i></span>
                    <span>Payments</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
<div class="main-content">
</div>
@endsection
