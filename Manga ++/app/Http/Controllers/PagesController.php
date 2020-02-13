<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function recherche()
    {
        $title = "Accueil";
    return view('pages.recherche', ['title' => $title]);
    }
}
