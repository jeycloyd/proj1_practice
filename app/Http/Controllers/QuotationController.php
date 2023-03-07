<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuotationController extends Controller
{
    public function index(){
        return view('pages.quotations.index');
    }
    public function create(){
        return view('pages.quotations.create');
    }
}
