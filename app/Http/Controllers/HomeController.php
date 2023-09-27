<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index() {
    $data = [
      "movies" => Movie::all(),
    ];
    /* ^ === SELECT * FROM Movie */
    return view("home", $data);
	}
}
