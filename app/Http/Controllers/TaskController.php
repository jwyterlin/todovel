<?php
/**
 * Created by PhpStorm.
 * User: Jhonathan Wyterlin
 * Date: 12/23/14
 * Time: 12:43 PM
 */

class TaskController extends BaseController {

	public function getAdd() {
		return View::make('views/viewAddTask');
	}

    public function postAdd() {

        //criando regras de validação
        $rules = array('titulo' => 'required');

        //executando validação
        $validation = Validator::make(Input::all(), $rules);

        //se a validação deu errado
        if ($validation->fails()) {
            return Redirect::to('task/add')->withErrors($validation);
        } else {

            // Validation was successful
            $task = new Task;
            $task->titulo = Input::get('titulo');
            $task->save();

            return View::make( 'views/viewAddTask' )->with('success', TRUE);

        }

        //sucesso
        return "success";

	}

}