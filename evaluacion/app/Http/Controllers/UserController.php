<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Recruiter;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allUsers = User::all();

        return view('/users/indexUsers', [
            'allUsers' => $allUsers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();

        return view('/users/createUser', [
            'roles' => $roles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newUser = new User();

        $newUser->name = strtoupper($request->name);
        $newUser->email = $request->email;
        $newUser->birthdate = $request->birthdate;
        $newUser->telephone =$request->telephone;
        $newUser->password = $request->password;
        $newUser->phone_number = $request->phone_number;
        $newUser->number_document = $request->number_document;
        $newUser->role_id = $request->role_id;


        $newUser->save();

        if ($request->role_id == 1){
            $newCandidate = new Candidate();

            $newCandidate->user_id = $newUser->id;

            $newCandidate->save();
        } else if ($request->role_id == 2){
            $newRecruiter = new Recruiter();

            $newRecruiter->user_id = $newUser->id;

            $newRecruiter->save();
        }

        return redirect()->route('users.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->route('users.index');
    }
}
