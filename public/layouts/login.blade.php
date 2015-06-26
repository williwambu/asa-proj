@extends('layouts.master')

@section('content')
    <div class="container login-panel">
        <h5 class="center light">Admin Login</h5>
        <div class="row center valign">
            <div class="col l5 m12 m5 offset-l3 offset-m3 ">
                <form method="post" action="{{route('admin-login')}}">
                    <div class="input-field">
                        <i class="mdi mdi-email prefix"></i>
                        <input id="email" type="text" name="email" class="validate">
                        <label for="email" class="active">Email</label>
                    </div>
                    <div class="input-field">
                        <i class="mdi mdi-lock prefix"></i>
                        <input id="password" type="password" name="password"  class="validate">
                        <label for="password" class="actve">Password</label>
                    </div>
                    <div class="input-field">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                            <i class="mdi-content-send right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop