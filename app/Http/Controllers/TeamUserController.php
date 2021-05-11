<?php

namespace App\Http\Controllers;

use App\TeamUser;
use Illuminate\Http\Request;

class TeamUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new TeamUser();
        $data->fill($request->all());
        if ($data->save()){

            return response()->json([
                'success'=> true,
                'message'=>'Operation Successful',
                'data'=>$data
            ], 200);

        }else{

            return response()->json([
                'success' => false,
                'message' => "Operation Failed",
           ], 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeamUser  $teamUser
     * @return \Illuminate\Http\Response
     */
    public function show(TeamUser $teamUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeamUser  $teamUser
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id,$teamId)
    {
        $data=TeamUser::find($id);
       $scrum=TeamUser::where('team_id',$teamId)
       ->where('isScrumMaster',1)
       ->first();
       if($scrum && $data){
           $scrum->isScrumMaster=0;
           $data->update($request->all());
           $scrum->save();
           $data->save();
           return response()->json([
            'success'=> true,
            'message'=>'Operation Successful',
            'data'=>$data
        ], 200);
       }
       elseif ($data)
       {
        $data->update($request->all());
        if($data->save())
        {
            return response()->json([
                'success'=> true,
                'message'=>'Operation Successful',
                'data'=>$data
            ], 200);
        }else {

            return response()->json([
                'success' => false,
                'message' => "No data found",
           ], 404);

        }
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeamUser  $teamUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamUser $teamUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeamUser  $teamUser
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=TeamUser::find($id);
        
        if ($data->delete()){
            return response()->json([
                'success'=> true,
                'message'=>'Deleted Successfully',
                'data'=>$data
            ], 200);
        }else{

            return response()->json([
                'success' => false,
                'message' => "Could not be deleted",
           ], 404);
        }
    }
}
