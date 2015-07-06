<?php
/**
 * Created by PhpStorm.
 * User: william muli
 * Date: 5/31/2015
 * Time: 4:26 PM
 */

class AdminController extends BaseController {

    public function loginPanel(){
        return View::make('layouts.login');
    }

    public function newAdmin(){
        $admin = new User();
        $admin -> email = Input::get('email');
        $admin -> password = Hash::make(Input::get('password'));

        $admin -> save();

        return Response::json(array('message'=>'A new admin created.'));
    }
    public function getCVs(){
        $cvs = CV::all();
        return $cvs;
    }
    public function login(){
        $email = Input::get('email');
        $password = Input::get('password');

        if(Auth::attempt(array('email'=>$email,'password'=>$password))){
            return View::make('layouts.admin-home') ->with(array('cvs'=>$this -> getCVs()));
        }
        return Response::json(array('message'=>'Access denied'),401);

    }

    public function logout(){
        Auth::logout();

        return Redirect::to('/');
    }

    public function admin(){
        return View::make('layouts.admin-home');
    }
}