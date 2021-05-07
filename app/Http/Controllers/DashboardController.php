<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function board(){
        return view('dashboard.dashboards');
    }


    public function profile(){
        return view('dashboard.profile');
    }

    // public function allproduct(){
    //     return view('dashboard.allproduct');
    // }

    // public function newproduct(){
    //     return view('dashboard.newproduct');
    // }

    public function allcategory(){
        return view('dashboard.allcategory');
    }

    public function newcategory(){
        return view('dashboard.newcategory');
    }

    public function allemployee(){
        return view('dashboard.allemployee');
    }

    public function newemployee(){
        return view('dashboard.newemployee');
    }

  
}
