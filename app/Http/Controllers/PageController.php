<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{   
    public function homepage() {
        return view("pages.homepage.index");
    }
    public function setting() {
        return view("pages.settingpage.index", ['activePage' => 'setting']);
    }
    
    public function feature() {
        return view("pages.featurepage.index", ['activePage' => 'feature']);
    }
    public function dashboard() {
        return view('pages.dashboardpage.index', ['activePage' => 'dashboard']); 
    }
    public function register() {
        return view('auth.registerpage.index'); 
    }
    public function login() {
        return view('auth.loginpage.index'); 
    }
    public function piece() {
        return view('pages.pieceboardpage.index', ['activePage' => 'piece']); 
    }
}
