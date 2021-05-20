<?php

namespace App\Http\Controllers;

use App\Additional_key;
use App\UserAttendance;
use App\Http\Requests\AdditionalKeysValidator;

use Illuminate\Http\Request;

class AdditionalKeyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($cohort, $stage)
    {   

        $additionalKeys=Additional_key::where('stage_id',$stage)->with(['user'=> function ($query) use ($cohort)
        {
            $query->select('id','user_first_name','user_last_name')->where('cohort_code', $cohort);
        }])
        ->get();

        // $attendanceKeys=UserAttendance::with(['user'=> function ($query) use ($cohort)
        // {
        //     $query->select('id','user_first_name','user_last_name')->where('cohort_code', $cohort);
        // }])
        // ->with('attendanceDay:id,attendance_date')
        // ->get();
         $user=1;
        foreach($additionalKeys as $x=>$y){
             $user= $y->user;
        };
    //     foreach($attendanceKeys as $x=>$y){
    //         $user= $y->user;
    //    };
 
        if($user!=null && $additionalKeys!=null )
        {

            return response()->json([
                'success'=> true,
                'message'=>'Operation Successful',
                'data'=>$additionalKeys
                // 'data2'=>$attendanceKeys
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
    public function store(AdditionalKeysValidator $request)
    { 
        $data=new Additional_key();
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
     * @param  \App\Additional_key  $additional_key
     * @return \Illuminate\Http\Response
     */
    public function show(Additional_key $additional_key)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Additional_key  $additional_key
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $data=Additional_key::find($id);
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
     * @param  \App\Additional_key  $additional_key
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Additional_key $additional_key)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Additional_key  $additional_key
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        $data=Additional_key::find($id);
        //$data->admin()->detach();

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
