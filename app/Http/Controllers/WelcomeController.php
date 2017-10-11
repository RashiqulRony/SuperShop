<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('front.home.home-content');
    }

    public function offer(){
        return view('front.offer.offer-content');
    }

    public function wishlist(){
        return view('front.wishlist.wishlist-content');
    }

    public function single(){
        return view('front.single.single-content');
    }

    public function signin(){
        return view('front.signin.signin-content');
    }

    public function userRegister(){
        return view('front.register.register-content');
    }

    public function about(){
        return view('front.about.about-content');
    }

    public function shipping(){
        return view('front.shipping.shipping-content');
    }

    public function kitchenCategory(){
        return view('front.kitchen.kitchen-content');
    }

    public function careCategory(){
        return view('front.care.care-content');
    }

    public function holdCategory(){
        return view('front.hold.hold-content');
    }

    public function contact(){
        return view('front.contact.contact-content');
    }






}
