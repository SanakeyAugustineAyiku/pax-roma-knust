<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admins');
    }

    public function show()
    {
        return view('admin.index');
    }
    public function addMember()
    {
        return view('admin.addMember');
    }

    // public function addCandidate()
    // {
    //     return view('admin.addCandidate');
    // }
    // public function new_election()
    // {
    //     return view('admin.newElection');
    // }

    public function addAdmin()
    {
        return view('admin.addAdmin');
    }

    public function viewAdmin()
    {
        $admins = \App\Admin::all();
        // dd($admins->roles->first());
        return view('admin.admins',compact('admins'));
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

    // public function add_candidate(Request $request)
    // {
    //     $request->validate([
    //         "name" => ['required'],
    //         "avatar" => ['required', 'image','mimes:jpeg,png', 'max:2048'],
    //         "position" => ['required'],
    //         "election_category" => ['required'],
    //         "period" => ['required'],
    //     ]);

    //     $fileName = '';
    //     $file_path ='';
    //     if( $request->hasFile('avatar')){
    //         $fileName = $request->name.time().'.'.$request->file('avatar')->getClientOriginalExtension();
    //         $pr = str_replace("/","_",$request->period);
    //         $file_path = "/images/uploads/elections/candidates/$pr/$fileName";
    //         $request->avatar->move(public_path("images/uploads/elections/candidates/$pr"), $fileName);
    //     }

    //     \App\ElectionCandidate::create([
    //         "name" => $request->name,
    //         "avatar" => $file_path,
    //         "position" => $request->position,
    //         "election_name" => $request->period,
    //         "election_category" => $request->election_category,
    //         "votes" => 0,
    //     ]);
    //     $success = 'Member added successfully';
    //     return redirect()->back()->with('success', $success);

    // }

    // public function view_candidates()
    // {
    //     $candidates =  \App\ElectionCandidate::all();
    //     return view('admin.candidates',['candidates'=>$candidates]);
    // }

    // public function view_members()
    // {
    //     $members = \App\User::all();

    //     return view('admin.members', ['members' => $members]);
    // }

    // public function view_elections()
    // {
    //     $elections = \App\Election::all();
    //     return view('admin.elections',['elections' => $elections]);
    // }

    // public function createElection(Request $request)
    // {

    //     $request->validate([
    //     'election_category'=>['required'],
    //     'period' =>['required'],
    //     'start_date'=>['required','date'],
    //     'start_time' => ['required','date_format:h:i A'],
    //     'end_date'=>['required','date'],
    //     'end_time'=>['required','date_format:h:i A']]);
    //     $start = "$request->start_date $request->start_time";
    //     $start = new \DateTime($start);
    //     $end = "$request->end_date $request->end_time";
    //     $end = new \DateTime($end);
    //     \App\Election::create([
    //         'election_category' => $request->election_category,
    //          'period' => $request->period,
    //          'start' => $start,
    //          'end' => $end,
    //          ]);
    //     return redirect()->back()->with('success',"Election instance created successfully");
    // }

    public function add_Admin(Request $request)
    {
        $request->validate([
            "name" => ['required'],
            "period" => ['required'],
            "email" => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            "role_id" => ['required'],
            "password" => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $roles = \App\Role::where('id',$request->role_id)->first();

        if ($roles->id == $request->role_id) {
            \App\Admin::create([
            "name" =>$request->name,
            "period" => $request->period,
            "email" => $request->email,
            // "role_id" => $request->role_id,
            "password" => \Hash::make($request->password)
            ]);

            $admin = \App\Admin::where('email',$request->email)->where('period',$request->period)->first();
            $role = new \App\AdminRole();
            $role->admin_id = $admin->id;
            $role->role_id = $request->role_id;
            $role->save();
            return redirect()->back()->with('success',"Admin added successfully");
        }
        return redirect()->back()->with('error',"failed to add admin");
    }

    public function edit_admin( $id)
    {
        dd($id);
    }

    public function delete_admin($id)
    {
        dd($id);
    }
}
