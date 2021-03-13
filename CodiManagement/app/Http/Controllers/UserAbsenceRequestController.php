<?php

namespace App\Http\Controllers;

use App\User_Absence_Request;
use App\Http\Requests\UserAbsenceRequestValidator;
use Illuminate\Http\Request;

class UserAbsenceRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($requestDate)
    {
        $data=User_Absence_Request::where('absence_requested_date',$requestDate)->with('user')->get();
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
    public function store(UserAbsenceRequestValidator $request)
    {
        $data=new User_Absence_Request();
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
     * @param  \App\User_Absence_Request  $user_Absence_Request
     * @return \Illuminate\Http\Response
     */
    public function show($absence_start_date)
    {
        $data=User_Absence_Request::where('absence_start_date',$absence_start_date)->with('user')
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
     * @param  \App\User_Absence_Request  $user_Absence_Request
     * @return \Illuminate\Http\Response
     */
    public function edit(User_Absence_Request $user_Absence_Request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User_Absence_Request  $user_Absence_Request
     * @return \Illuminate\Http\Response
     */
    public function update(UserAbsenceRequestValidator $request,$id)
    {
        $data=User_Absence_Request::find($id);
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
                'message' => 'Operation Failed',
                // 'message' => $request->message(),
           ], 404);
         }
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'Error',
                // 'message' => $request->message(),
           ], 404);
         }  
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User_Absence_Request  $user_Absence_Request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=User_Absence_Request::find($id);
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
