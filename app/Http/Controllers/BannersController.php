<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banners;

class BannersController extends Controller
{
    public function index()
    {
        $banners = Banners::all();
        return view('admin.homepage-banner', compact('banners'));
    }
}
