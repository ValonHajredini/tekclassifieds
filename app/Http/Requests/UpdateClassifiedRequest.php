<?php
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/4/2016
 * Time: 10:48 PM
 */
namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateClassifiedRequest extends  Request{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'title'         => 'required',
            'category_id'   => 'required',
            'price'         => 'required',
            'email'         => 'required'
        ];
    }
}
