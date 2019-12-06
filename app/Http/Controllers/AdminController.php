<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show()
    {
        return view('admin.index');
    }
    public function addMember()
    {
        return view('admin.addMember');
    }

    public function addCandidate()
    {
        return view('admin.addCandidate');
    }
    public function new_election()
    {
        return view('admin.newElection');
    }
    public function add_member(Request $request)
    {
        // dump($request);
        $request->validate([
            "fullname" => ['required', 'string'],
            "email" => ['required', 'email', 'unique:users'],
            "phone" => ['required'],
            "dob" => ['required', 'date'],
            "emergency_contact" => ['required'],
            "gender" => ['required', 'string', 'max:10'],
            "subgroup" => ['required'],
            "hostel" => ['required'],
            "room_number" => ['required'],
            "program" => ['required'],
            "year" => ['required'],
            // "password" => null,
            // "avatar" => null,
        ]);

        \App\User::create([
            "fullname" => $request->fullname,
            "email" => $request->email,
            "phone" => $request->phone,
            "dob" => new \DateTime($request->dob),
            "emergency_contact" => $request->emergency_contact,
            "gender" => $request->gender,
            "subgroup" => $request->subgroup,
            "hostel" => $request->hostel,
            "room_number" => $request->room_number,
            "program" => $request->program,
            "year" => $request->year,
            // "password" => null,
            // "avatar" => null,
        ]);
        $success = 'Member added successfully';
        return redirect()->back()->with('success', $success);

    }

    public function add_candidate(Request $request)
    {
        //\dump(Request::all());

        $request->validate([
            "name" => ['required'],
            "avatar" => ['required', 'image','mimes:jpeg,png', 'max:2048'],
            "position" => ['required'],
            "election_category" => ['required'],
        ]);
        dd($request);
        $fileName = time().'.'.$request->file->extension();

        $request->file->move(public_path('uploads'), $fileName);

        return back()
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);
        \App\ElectionCandidate::create([
            "name" => $request->name,
            "avatar" => $request->avatar,
            "position" => $request->position,
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
    public function view_members()
    {
        $members = \App\User::all();

        return view('admin.members', ['members' => $members]);
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
             'end' => $end
             ]);
        return redirect()->back()->with('success',"Election instance created successfully");
    }
}
