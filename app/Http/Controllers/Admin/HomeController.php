<?php

namespace App\Http\Controllers\Admin;

use App\Models\Delegate;
use App\Models\Speaker;
use App\Models\Sponsor;
use App\Models\User;
use Illuminate\Http\Request;

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

    public function createSpeaker($id, $token) {
        $user = User::findOrFail($id);
        return view("admin.speakers.self-create", compact('id'));
    }

    public function speakerAdd(Request $request) {
        $speaker = Speaker::create($request->all());
        return redirect()->back()->with("success","User Details Submitted Successfully");
    }
}
