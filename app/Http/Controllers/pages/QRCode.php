<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QRCode extends Controller
{
  public function index()
  {
    return view('content.pages.pages-qr-code');
  }
}
