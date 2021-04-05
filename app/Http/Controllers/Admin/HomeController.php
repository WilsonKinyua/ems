<?php

namespace App\Http\Controllers\Admin;

use App\Models\Delegate;
use App\Models\Sponsor;

class HomeController
{
    public function index()
    {
        // delegates count
        $delegates = Delegate::with(['created_by'])->get();
        $totaldelegates = $delegates->count();
        // sponsors count
        $sponsors = Sponsor::with(['created_by'])->get();
        $totalsponsors = $sponsors->count();

        return view('home',compact('totaldelegates','totalsponsors'));
    }
}
