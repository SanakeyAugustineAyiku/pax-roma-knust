<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElectionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:voters');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $available_elections = \App\Election::where("status","pending")->get();
        return view('election.index',compact("available_elections"));
    }

    public function start_voting($election,$period,Request $request){
        dd($request->session());
        return redirect()->action(
            'ElectionController@president', ['election' => $election,'period'=>$period]
        );
    }

    public function president($election,$period)
    {   $period = str_replace("_","/",$period);
        $candidates = \App\ElectionCandidate::where('election_name',$period)
        ->where('election_category',$election)
        ->where('position','President')
        ->get();
      //  dd($candidates);
        if($election === "Pax General Elections"){
            return view("election.general.president",compact("candidates"));
        }

    }

    public function vicep($election,$period)
    {   $period = str_replace("_","/",$period);
        $candidates = \App\ElectionCandidate::where('election_name',$period)
        ->where('election_category',$election)
        //->where('position','Vice President')
        ->get();
      //  dd($candidates);
        if($election === "Pax General Elections"){
            return view("election.general.vice president",compact("candidates"));
        }
    }

    public function secretary($election,$period)
    {
        $period = str_replace("_","/",$period);
        $candidates = \App\ElectionCandidate::where('election_name',$period)
        ->where('election_category',$election)
        //->where('position','Vice President')
        ->get();
      //  dd($candidates);
        if($election === "Pax General Elections"){
            return view("election.general.secretary",compact("candidates"));
        }
    }

    public function finSec($election,$period)
    {
        $period = str_replace("_","/",$period);
        $candidates = \App\ElectionCandidate::where('election_name',$period)
        ->where('election_category',$election)
        //->where('position','Vice President')
        ->get();
      //  dd($candidates);
        if($election === "Pax General Elections"){
            return view("election.general.financial secretary",compact("candidates"));
        }
    }

    public function organa($election,$period)
    {
        $period = str_replace("_","/",$period);
        $candidates = \App\ElectionCandidate::where('election_name',$period)
        ->where('election_category',$election)
        //->where('position','Vice President')
        ->get();
      //  dd($candidates);
        if($election === "Pax General Elections"){
            return view("election.general.organizing secretary",compact("candidates"));
        }
    }

    public function asst_organa($election,$period)
    {
        $period = str_replace("_","/",$period);
        $candidates = \App\ElectionCandidate::where('election_name',$period)
        ->where('election_category',$election)
        //->where('position','Vice President')
        ->get();
      //  dd($candidates);
        if($election === "Pax General Elections"){
            return view("election.general.asst organizing secretary",compact("candidates"));
        }
    }

    public function publicity_officer($election,$period)
    {
        $period = str_replace("_","/",$period);
        $candidates = \App\ElectionCandidate::where('election_name',$period)
        ->where('election_category',$election)
        //->where('position','Vice President')
        ->get();
      //  dd($candidates);
        if($election === "Pax General Elections"){
            return view("election.general.publicity officer",compact("candidates"));
        }
    }

    public function asst_publicity_officer($election,$period)
    {
        $period = str_replace("_","/",$period);
        $candidates = \App\ElectionCandidate::where('election_name',$period)
        ->where('election_category',$election)
        //->where('position','Vice President')
        ->get();
      //  dd($candidates);
        if($election === "Pax General Elections"){
            return view("election.general.asst publicity officer",compact("candidates"));
        }
    }

    public function wocom($election,$period)
    {
        $period = str_replace("_","/",$period);
        $candidates = \App\ElectionCandidate::where('election_name',$period)
        ->where('election_category',$election)
        //->where('position','Vice President')
        ->get();
      //  dd($candidates);
        if($election === "Pax General Elections"){
            return view("election.general.wocom",compact("candidates"));
        }
    }

    public function submit($election,$period)
    {
    //     $period = str_replace("_","/",$period);
    //     $candidates = \App\ElectionCandidate::where('election_name',$period)
    //     ->where('election_category',$election)
    //     //->where('position','Vice President')
    //     ->get();
    //   //  dd($candidates);
    //     if($election === "Pax General Elections"){
    //         return view("election.general.wocom",compact("candidates"));
    //     }
    dd($election,$period,session());
    }
}
