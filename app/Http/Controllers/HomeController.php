<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;
use App\sk;
use App\PkPosition;
use App\Submission;
use App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd(auth()->user()->id);
        $skUrls = sk::find(auth()->user()->lastSKUrl);
        $unitsName = Unit::find(auth()->user()->unit);
        $positionName = PkPosition::find(auth()->user()->pkPosition);
        return view('pages.home',compact('skUrls','unitsName','positionName'));
    }

    public function about()
    {
        // return View::make('pages.about');
        return view('pages.about');
    }

    public function new_files_bu(){
        $bu_submission = Submission::all()->where('submission_position','1');
        // $users = User::find($bu_submission->nip);
        return view('pages.bu.new_files', compact('bu_submission'));
    }

    
    
    // public function guest_index()
    // {
    //     return view('auth.login');
    // }
}
