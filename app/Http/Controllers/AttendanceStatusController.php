<?php

namespace App\Http\Controllers;

use App\AttendanceStatus;
use Illuminate\Http\Request;

class AttendanceStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=AttendanceStatus::all();
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AttendanceStatus  $attendanceStatus
     * @return \Illuminate\Http\Response
     */
    public function show(AttendanceStatus $attendanceStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AttendanceStatus  $attendanceStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(AttendanceStatus $attendanceStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AttendanceStatus  $attendanceStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AttendanceStatus $attendanceStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AttendanceStatus  $attendanceStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttendanceStatus $attendanceStatus)
    {
        //
    }
}
