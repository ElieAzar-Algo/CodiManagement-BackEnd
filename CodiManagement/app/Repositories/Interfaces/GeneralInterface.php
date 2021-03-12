<?php

namespace App\Repositories\Interfaces;

use illuminate\Foundation\Http\FormRequest;
use Illuminate\Database\Eloquent\Model;


interface GeneralInterface {

   
    /**
     * @param Model $model
     * @param FormRequest $request
     * @return mixed
     */
      public function store(Model $model, FormRequest $request);


    /**
     * @param FormRequest $request
     * @param $id
     * @return mixed
     */
     public function update(FormRequest $request, $id);

    /**
     * @param FormRequest $request
     * @param $id
     * @return mixed
     */
      public function edit(Model $model, FormRequest $request);

    
}
