<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\User;
use App\UserAttendance;
use Illuminate\Http\Request;
use App\Http\Requests\Attendancevalidator;
use Illuminate\Validation\Rule;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($from, $to,$id)
    {
         
         $data=Attendance::where('attendance_date','>=',$from)
         ->where('attendance_date','<=',$to)
         ->with(['user_attendance' => function ($query) use ($id) {
             $query->select()->where('user_id', $id);
         }])
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
    public function store(Request $request)
    {
        // Validator::make($data, [
        //     'attendance_date' => [
        //         'required',
        //          Rule::unique('attendances')->where(function ($query) use($date,$cohort) {
        //            return $query->where('attendance_date', $date)->where('cohort_id', $cohort);
        //          })
        //     ],
        // ]);
        $data = null;
        if(Attendance::where([ ['cohort_id', $request->cohort_id], ['attendance_date', $request->attendance_date]])
        ->count() > 0){
            $data=Attendance::where('cohort_id', $request->cohort_id)
            ->where('attendance_date', $request->attendance_date)
            ->first();
            return response()->json([
                'success' => false,
                'message' => "Attendance day already exist",
                'data'=>$data
                
           ], 404);
        } else {
            $data=new Attendance();
        }
       // $data=new Attendance();
        $data->fill($request->all());
        if($data->save())

        {
            $students = User::where('cohort_code',$request->cohort_id)->get();
            foreach ($students as $student){
                $studentAttendance = new UserAttendance;
                $studentAttendance->user_id=$student->id;
                $studentAttendance->attendance_id=$data->id;
                $studentAttendance->present_absent=1;
                $studentAttendance->attendance_key_amount=1;
                $studentAttendance->save();
            }
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
                'message' => "Attendance day may have not been created",
           ], 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show($date,$cohortId)
    {
        $data=Attendance::where('attendance_date',$date)
        ->where('cohort_id',$cohortId)
        ->with('user_attendance')
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Attendance::find($id);
        $data->user_attendance()->detach();

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
