<?php

namespace App\Http\Controllers;

use App\UserSkill;
use Illuminate\Http\Request;
use App\Http\Requests\UserSkillValidator;

class UserSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($userId)
    {
        $data=UserSkill::where('user_id',$userId)
        ->with('skill')
        ->with('stage:id,stage_name')
        ->with('user:id,user_first_name,user_last_name')
        ->get();
        if($data)
        {
            return response()->json([
                'success'=> true,
                'message'=>'Operation Successful',
                'data'=>$data
            ], 200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => "No data found",
           ], 404);
        }
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
    public function store(UserSkillValidator $request)
    {
        $data=new UserSkill();
        $data->fill($request->all());
        if ($data->save())
        {
            return response()->json([
                'success'=> true,
                'message'=>'Operation Successful',
                'data'=>$data
            ], 200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => "Operation Failed",
           ], 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserSkill  $userSkill
     * @return \Illuminate\Http\Response
     */
    public function show(UserSkill $userSkill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserSkill  $userSkill
     * @return \Illuminate\Http\Response
     */
    
    public function edit(Request $request,$userId,$skillId,$stageId)
    {
        $data=UserSkill::where('user_id',$userId)->where('skill_id',$skillId)->where('stage_id',$stageId)->first();
        if($data)
        {
         $data->update($request->all());
         if ($data->save())
         {
            return response()->json([
                'success'=> true,
                'message'=>'Operation Successful',
                'data'=>$data
            ], 200);
         }
         else
         {
            return response()->json([
                'success' => false,
                'message' => "Operation Failed",
           ], 404);
         }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserSkill  $userSkill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserSkill $userSkill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserSkill  $userSkill
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserSkill $userSkill)
    {
        //
    }
}
