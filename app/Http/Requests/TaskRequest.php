<?php namespace App\Http\Requests;
/**
 * Created by PhpStorm.
 * User: Jhonathan Wyterlin
 * Date: 12/23/14
 * Time: 3:25 PM
 */

class TaskRequest extends Request {

    /**
     * The URI to redirect to if validation fails
     *
     * @var string
     */
    protected $redirect = 'task/add';

    public function rules() {

        return [
                'titulo' => 'required|min:8'
                ];

//        return [
//                'email' => 'required|email|unique:users',
//                'password' => 'required|confirmed|min:8'
//                ];

    }

    public function authorize() {
        return true;
    }

}