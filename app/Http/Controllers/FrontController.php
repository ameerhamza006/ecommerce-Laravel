<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //Login Page
    function login(){

        return view('Front.login');
    }

    //Register Page
    function register(){
        return view('Front.register');
    }

    //Products page
    function products(){
        return view('Front.products');
    }

    //Cart Page
    function cart(){
        return view('Front.cart');
    }

    //Checkout Page
    function checkout(){
        return view('Front.checkout');
    }

    //Contact Us Page
    function contact(){
        return view('Front.contact-us');
    }

    

}
