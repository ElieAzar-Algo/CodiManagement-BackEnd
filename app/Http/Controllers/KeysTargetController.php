<?php

namespace App\Http\Controllers;

use App\KeysTarget;
use App\Http\Requests\KeysTargetValidator;
use Illuminate\Http\Request;

class KeysTargetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
    public function store(KeysTargetValidator $request)
    {
        $data= new KeysTarget();

        $data->fill($request->all());

        if ($data->save()){
            return response()->json([
                'success'=> true,
                'message'=>'Operation Successful',
                'data'=>$data
            ],200);
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
     * @param  \App\KeysTarget  $keysTarget
     * @return \Illuminate\Http\Response
     */
    public function show($stageId)
    {
        $data=KeysTarget::where('stage_id', $stageId)->first();
        if ($data){
            return response()->json([
                'success'=>true,
                'message'=>'Operation Successful',
                'data'=>$data,
            ],200);
        }else{
            return response()->json([
                'success'=>false,
                'message'=>'No data Found',

            ],404);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KeysTarget  $keysTarget
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data=KeysTarget::find($id);
        if ($data) {

            $data->update($request->all());

            if($data->save()){

                return response()->json([
                    'success'=>true,
                    'message'=>'Operation Successful',
                    'data'=>$data
                ],200);

            }else{

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
     * @param  \App\KeysTarget  $keysTarget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KeysTarget $keysTarget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KeysTarget  $keysTarget
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=KeysTarget::find($id);
        if ($data->delete())
        
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
