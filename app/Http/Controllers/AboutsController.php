<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutsController extends Controller
{
    public function getCompanyProduct()
    {
        $products = About::all();
        return $products;
    }
}
