<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function setting() {
        return view("pages.settingpage.index");
    }
    
    public function feature() {
        return view("pages.featurepage.index");
    }
    public function dashboard() {
        return view('pages.dashboardpage.index'); 
    }
    public function register() {
        return view('auth.registerpage.index'); 
    }
    public function piece() {
        return view('pages.pieceboardpage.index'); 
    }
}
