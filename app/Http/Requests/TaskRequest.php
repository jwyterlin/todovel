<?php namespace App\Http\Requests;
/**
 * Created by PhpStorm.
 * User: Jhonathan Wyterlin
 * Date: 12/23/14
 * Time: 3:25 PM
 */

class TaskRequest extends Request {

    public function rules() {
        return [
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed|min:8'
                ];
    }

    public function authorize() {
        return true;
    }

}