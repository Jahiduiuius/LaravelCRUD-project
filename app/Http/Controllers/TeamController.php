<?php

namespace App\Http\Controllers;


use App\Models\team;
use App\Http\Requests\StoreteamRequest;
use App\Http\Requests\UpdateteamRequest;
use Auth;




use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PHPUnit\Framework\TestStatus\Success;

class TeamController extends Controller
{ 
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams= team::all();

    //    return $teams;

        return view('index',compact ('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreteamRequest $request)
    {
    
         team::create($request->all());
        //  $team = new Team;
        //  $team->first_name = $request->firstname; 
        //  $team->last_name = $request->lastname; 
        //  $team->email = $request->email;
        //  $team->save();
      //  return "success";
      return Redirect::to('/')->with('massage','Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($team_id) 
    {
        // return $team_id;

         $team = team::find($team_id); //select * from teams where id = $team_id

       return view('edit', compact('team'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $team = team::find($request->team_id); 

        $team->delete();
        return Redirect::to('/');
    }

    public function editstore(StoreteamRequest $request)
    {
        $team = team::find($request->team_id); 
       // return $team;
       $team->firstName= $request->firstName;
       $team->lastName = $request->lastName; 
       $team->email = $request->email;
       $team->save();
    //    return "update success";
      return Redirect::to('/');
    }

}
