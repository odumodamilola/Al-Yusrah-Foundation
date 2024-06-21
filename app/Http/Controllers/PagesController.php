<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view('pages.about');
    }
    public function vision(){
        return view('pages.vision');
    }
    public function mission(){
        return view('pages.mission');
    }
    public function donate(){
        return view('pages.donate');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function contact(){
        return view('pages.contact');
    }
   
    // public function event(){
    //     return view('pages.event');
    // }
}