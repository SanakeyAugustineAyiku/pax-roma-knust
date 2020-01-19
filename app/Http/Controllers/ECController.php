<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ECController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:ec');
        $this->middleware('role:EC');
    }

    public function show()
    {
        return view('admin.index');
    }
    public function results()
    {
       // return view('admin.addMember');
    }

    public function addCandidate()
    {
        return view('admin.addCandidate');
    }
    public function new_election()
    {
        return view('admin.newElection');
    }


    public function add_candidate(Request $request)
    {
        $request->validate([
            "name" => ['required'],
            "avatar" => ['required', 'image','mimes:jpeg,png', 'max:2048'],
            "position" => ['required'],
            "election_category" => ['required'],
            "period" => ['required'],
        ]);

        $fileName = '';
        $file_path ='';
        if( $request->hasFile('avatar')){
            $fileName = $request->name.time().'.'.$request->file('avatar')->getClientOriginalExtension();
            $pr = str_replace("/","_",$request->period);
            $file_path = "/images/uploads/elections/candidates/$pr/$fileName";
            $request->avatar->move(public_path("images/uploads/elections/candidates/$pr"), $fileName);
        }

        \App\ElectionCandidate::create([
            "name" => $request->name,
            "avatar" => $file_path,
            "position" => $request->position,
            "election_name" => $request->period,
            "election_category" => $request->election_category,
            "votes" => 0,
        ]);
        $success = 'Member added successfully';
        return redirect()->back()->with('success', $success);

    }

    public function view_candidates()
    {
        $candidates =  \App\ElectionCandidate::all();
        return view('admin.candidates',['candidates'=>$candidates]);
    }


    public function view_elections()
    {
        $elections = \App\Election::all();
        return view('admin.elections',['elections' => $elections]);
    }

    public function createElection(Request $request)
    {

        $request->validate([
        'election_category'=>['required'],
        'period' =>['required'],
        'start_date'=>['required','date'],
        'start_time' => ['required','date_format:h:i A'],
        'end_date'=>['required','date'],
        'end_time'=>['required','date_format:h:i A']]);
        $start = "$request->start_date $request->start_time";
        $start = new \DateTime($start);
        $end = "$request->end_date $request->end_time";
        $end = new \DateTime($end);
        \App\Election::create([
            'election_category' => $request->election_category,
             'period' => $request->period,
             'start' => $start,
             'end' => $end,
             ]);
        return redirect()->back()->with('success',"Election instance created successfully");
    }

}
