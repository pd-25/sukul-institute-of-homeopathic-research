<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Research;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view("website.index");
    }

    public function profile() {
        return view("website.profile");
    }

    public function aboutUs() {
        return view("website.aboutus");
    }


    public function research() {
        return view("website.research", [
            'researchs' => Research::orderBy("id", "DESC")->get()
        ]);
    }


    public function cancerTherapy() {
        return view("website.cancer-therapy");
    }


    public function journal() {
        return view("website.journal");
    }

    public function contact() {
        return view("website.contact");
    }

}

