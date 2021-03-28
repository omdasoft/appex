<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SponsorsController extends Controller
{
    public function index(){
        return view('admin.sponsors.index');
    }

    public function inactiveSponsors(){
        return view('admin.sponsors.inactive');
    }

    public function activeSponsors(){
        return view('admin.sponsors.active');
    }
}
