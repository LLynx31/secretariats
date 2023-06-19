<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ConsommableController extends Controller
{
  public function getConsommables() {
    $mesConsommable = Article::all();
    return view('Gconsommable')->with('$mesConsommables', $mesConsommable);
  }
}
