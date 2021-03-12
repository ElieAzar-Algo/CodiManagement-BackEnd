<?php

namespace App\Http\Controllers;

use App\Cohort;
use Illuminate\Http\Request;

class CohortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $data=Cohort::with('users')
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cohort  $cohort
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Cohort::where('id',$id)
        ->with('users')
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
     * @param  \App\Cohort  $cohort
     * @return \Illuminate\Http\Response
     */
    public function edit(Cohort $cohort)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cohort  $cohort
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cohort $cohort)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cohort  $cohort
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cohort $cohort)
    {
        //
    }
}
