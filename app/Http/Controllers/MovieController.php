<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class MovieController extends Controller
{
   public function getMovie($movieId) {
       $request = Http::get("http://swapi.dev/api/films/{$movieId}");
       $movie = $request->json();
       return $movie['title'];
   }
}
