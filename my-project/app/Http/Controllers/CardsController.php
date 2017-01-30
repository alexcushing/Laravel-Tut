<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CardsController extends Controller
{
    public function index(){
      $cards = \DB::table('cards')->get();
      return view ('cards.index')->withCards($cards);
    }
}
