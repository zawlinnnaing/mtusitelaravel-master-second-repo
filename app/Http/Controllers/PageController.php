<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
    		return view('allviews.welcome');
    }

    public function depertments()
    {
    		return view('allviews.depertments');
    }

    public function research()
    {
    		return view('allviews.research');
    }

    public function about()
    {
    		return view('allviews.about');
    }

    public function civil()
    {
    		return view('allviews.civil');
    }

    public function mechnical()
    {
    		return view('allviews.mech');
    }
    public function academic(){
        return view('allviews.academic');
    }
    public function mechatronic(){
        return view('allviews.mecha');
    }
    public function ec(){
        return view('allviews.ec');
    }

    public function ep(){
        return view('allviews.ep');
    }

    public function ceit(){
        return view('allviews.ceit');
    }

    public function archi(){
        return view('allviews.archi');
    }

    public function eng(){
        return view('allviews.eng');
    }
    public function math(){
        return view('allviews.math');
    }
    public function chem(){
        return view('allviews.chem');
    }
    public function phy(){
        return view('allviews.phy');
    }
}
