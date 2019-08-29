<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function faqs()
  {
    $faqs = Faq::all();
    return view('faqs.faqs')->with('faqs',$faqs);
  }
}
