<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
      return view('welcome');
    }

    public function about(){
      $people = ['Al Pal', 'Ty Guy', 'JJ The JetPlane'];
      return view('pages.about')->withPeople($people);
    }
}
