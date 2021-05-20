<?php

namespace App\Http\Controllers;

use App\UsersTasks;
use Illuminate\Http\Request;
use App\Http\Requests\UsersTasksValidator;

class UsersTasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($taskId)
    {
        $data=UsersTasks::where('task_id',$taskId)
        ->with('user:id,user_first_name,user_last_name')
        ->with('admin:id,username')
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
    public function indexUser($userId)
    {
        $data=UsersTasks::where('user_id',$userId)
        ->with('admin:id,username')
        ->with('task')
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

    //getAssignmentKeys
    public function getAssignmentKeys($cohort,$stage) 
    {
    
        $data=UsersTasks::where('reviewed',1)->with(['user'=> function ($query) use ($cohort)
        {
            $query->select('id','user_first_name','user_last_name')->where('cohort_code', $cohort);
        }])
     
        ->with(['task'=> function ($que) use ($stage)
        {
            $que->select('id','task_name')->where('stage_id', $stage);
        }]) 
        ->get();
        // dd($data);
        $task=[];
        $user=[];
        $newData=[];
        foreach($data as $x=>$y){
            
            $user= $y->user;
            $task=$y->task;
            if($task){
                array_push($newData,$data[$x]);
            }    
        };
       //dd($newData);
       
        if($newData)
        {
            return response()->json([
                'success'=> true,
                'message'=>'Operation Successful',
                'data'=>$newData
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
    public function store(UsersTasksValidator $request)
    {
        $data=new UsersTasks();
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
     * @param  \App\UsersTasks  $usersTasks
     * @return \Illuminate\Http\Response
     */
    public function show(UsersTasks $usersTasks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UsersTasks  $usersTasks
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $data=UsersTasks::find($id);
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
     * @param  \App\UsersTasks  $usersTasks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsersTasks $usersTasks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UsersTasks  $usersTasks
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=UsersTasks::find($id);
        if($data->delete())
        {
            return response()->json([
                'success'=> true,
                'message'=>'Deleted Successfully',
                'data'=>$data
            ], 200);
            
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => "Could not be deleted",
           ], 404);
        }
    }
}
