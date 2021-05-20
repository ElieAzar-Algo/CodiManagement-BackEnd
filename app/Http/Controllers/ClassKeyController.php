<?php

namespace App\Http\Controllers;

use App\ClassKey;
use App\Http\Requests\ClassKeyValidator;
use Illuminate\Http\Request;

class ClassKeyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($cohortId, $stageId)
    {
        $data=ClassKey::where('cohort_id', $cohortId)->where('stage_id', $stageId)
        ->get();
        if ($data){

            return response()->json([
                'success'=> true,
                'message'=>'Operation Successful',
                'data'=>$data
            ], 200);
        }else{

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
    public function store(ClassKeyValidator $request)
    {
        $data=new ClassKey();
        $data->fill($request->all());

        if($data->save()){
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
     * @param  \App\ClassKey  $classKey
     * @return \Illuminate\Http\Response
     */
    public function show(ClassKey $classKey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClassKey  $classKey
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id )
    {
        $data=ClassKey::find($id);
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
     * @param  \App\ClassKey  $classKey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassKey $classKey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClassKey  $classKey
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=ClassKey::find($id);

        if($data->delete())
        {
            return response()->json([
                'success'=> true,
                'message'=>'Deleted Successfully',
                'data'=>$data
            ], 200);
        }else {
            return response()->json([
                'success' => false,
                'message' => "Could not be deleted",
           ], 404);
        }
        
    }
}
