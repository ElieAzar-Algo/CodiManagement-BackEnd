<?php

namespace App\Http\Controllers;

use App\UserAttendance;
use Illuminate\Http\Request;
use App\Http\Requests\UserAttendanceValidator;
use Illuminate\Foundation\Http\FormRequest;

class UserAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data=UserAttendance::where('attendance_id',$id)
        ->with('user:id,user_first_name,user_last_name')
        ->with('attendanceStatus')
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
    public function store(UserAttendanceValidator $request)
    {    
        $data = null;
        if(UserAttendance::where([ ['user_id', $request->user_id], ['attendance_id', $request->attendance_id]])
        ->count() > 0){
            $data = UserAttendance::where('user_id', $request->user_id)
            ->where('attendance_id', $request->attendance_id)->first();
        } else {
            $data=new UserAttendance();
        }
        
        $data->fill($request->all());
        if($data->save())
        {
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserAttendance  $userAttendance
     * @return \Illuminate\Http\Response
     */
    public function show($userId,$attendanceId)
    {
        $data=Attendance::where('user_id',$userId)
        ->where('attendance_id',$attendanceId)
        ->first();
    
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserAttendance  $userAttendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $data=UserAttendance::find($id);
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
     * @param  \App\UserAttendance  $userAttendance
     * @return \Illuminate\Http\Response
     */
    public function update(UserAttendanceValidator $request, $id)
    {
        $data=UserAttendance::find($id);
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
     * Remove the specified resource from storage.
     *
     * @param  \App\UserAttendance  $userAttendance
     * @return \Illuminate\Http\Response
     */
    // public function destroy($userId,$attendanceId)
    // {
    //     $data=Attendance::where('user_id',$userId)
    //     ->where('attendance_id',$attendanceId)
    //     ->first();
    //     $data->user_attendance()->detach();

    //     if($data->delete())
    //     {
    //         return response()->json([
    //             'success'=> true,
    //             'message'=>'Deleted Successfully',
    //             'data'=>$data
    //         ], 200);
            
    //     }
    //     else
    //     {
    //         return response()->json([
    //             'success' => false,
    //             'message' => "Could not be deleted",
    //        ], 404);
    //     }
    // }
}
