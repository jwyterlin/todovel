<?php namespace App\Http\Requests;
/**
 * Created by PhpStorm.
 * User: Jhonathan Wyterlin
 * Date: 01/09/15
 * Time: 1:33 PM
 */

class TaskCheckRequest extends Request {

    public function rules() {

        return [
                'task_id' => 'required|integer'
                ];

    }

    public function authorize() {
        return true;
    }

    // OPTIONAL OVERRIDE
    public function response() {
        // If you want to customize what happens on a failed validation, override this method.
        // See what it does natively here:
        // https://github.com/laravel/framework/blob/master/src/Illuminate/Foundation/Http/FormRequest.php
        return Response::json( array("status" => FALSE) );
    }

}