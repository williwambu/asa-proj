@extends('layouts.master')

@section('content')
    <nav>
        <div class="nav-wrapper">
            <img src="../images/logo.jpg" class="brand-logo"/>
            <ul id="slide-out" class="side-nav right">
                <li><a href="{{route('logout')}}">Logout</a></li>
            </ul>
            <!-- end sidebar -->
            <!-- nav menu-->
            <ul class="right hide-on-med-and-down">

                <li><a href="{{route('logout')}}">Logout</a></li>

            </ul>
            <!-- nav menu -->
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col s12 l6 m8">
                <ul class="collection with-header">
                    <li class="collection-header"><h4>Uploaded CVs</h4></li>
                    <li class="collection-item"><a href="{{route('create-zip')}}">Download All CVs as Zip File</a></li>
                   @foreach($cvs as $cv)
                        <li class="collection-item"><div><a href="/{{$cv -> path}}">{{$cv -> name}}</a></div></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop