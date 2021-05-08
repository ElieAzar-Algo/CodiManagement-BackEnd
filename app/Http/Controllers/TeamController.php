<?php

namespace App\Http\Controllers;

use App\Team;
use App\Http\Requests\TeamValidator;
use Illuminate\Http\Request;

class TeamController extends Controller
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
    public function store(TeamValidator $request)
    {
        $data= new Team();
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
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show($stageId)
    {
        $data=Team::where('stage_id', $stageId)
        ->with('teamUsers:id,user_first_name,user_last_name,user_avatar')
        ->with('admin:id,username')
        ->get();
        if ($data){
            return response()->json([
                'success'=> true,
                'message'=>'Operation Successful',
                'data'=>$data
                // 'data2'=>$attendanceKeys
            ], 200);

        }else{

            return response()->json([
                'success' => false,
                'message' => "No data found",
           ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {

       $data=Team::find($id);
       if ($data)
       {
        $data->update($request->all());
        if($data->save())
        {
            return response()->json([
                'success'=> true,
                'message'=>'Operation Successful',
                'data'=>$data
                // 'data2'=>$attendanceKeys
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
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Team::find($id);
        $data->teamUsers()->detach();

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
