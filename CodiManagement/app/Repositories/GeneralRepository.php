<?php

namespace App\Repositories;

use App\Repositories\Interfaces\GeneralInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Database\Eloquent\Model;


class GeneralRepository implements GeneralInterface
{

 /**
     * @param Model $model
     * @param FormRequest $request
     * @return mixed
     */
    public function store(Model $model, FormRequest $request)
    {

    }


    /**
     * @param FormRequest $request
     * @param $id
     * @return mixed
     */
     public function update(FormRequest $request, $id)
     {

     }

    /**
     * @param FormRequest $request
     * @param $id
     * @return mixed
     */
      public function edit(Model $model, FormRequest $request)
      {
          
      }

}