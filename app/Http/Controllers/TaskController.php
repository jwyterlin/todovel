<?php namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: Jhonathan Wyterlin
 * Date: 12/23/14
 * Time: 12:43 PM
 */

use App\Http\Controllers\Controller;
use App\Task;
use App\Http\Requests\TaskRequest;
use Illuminate\Http\Response;

class TaskController extends Controller {

	public function getAdd() {
		return view('views/viewAddTask');
	}

    public function postAdd( TaskRequest $request ) {

        $fieldTitulo = $request->input('titulo');

        // Validation was successful
        $task = new Task();
        $task->titulo = $fieldTitulo;
        $task->save();

        return view( 'views/viewAddTask' )->with('success', TRUE);

	}

}