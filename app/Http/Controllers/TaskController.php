<?php namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: Jhonathan Wyterlin
 * Date: 12/23/14
 * Time: 12:43 PM
 */

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskCheckRequest;
use App\Task;
use App\Http\Requests\TaskAddRequest;
use Illuminate\Http\Response;

class TaskController extends Controller {

	public function getAdd() {
		return view('views/viewAddTask');
	}

    public function postAdd( TaskAddRequest $request ) {

        $fieldTitulo = $request->input('titulo');

        // Validation was successful
        $task = new Task();
        $task->titulo = $fieldTitulo;
        $task->save();

        return view( 'views/viewAddTask' )->with('success', TRUE);

	}

    public function listAllTasks() {
       $tasks = Task::all();
       return view('views/viewListTasks')->with('tasks', $tasks);
    }

    public function check( TaskCheckRequest $request ) {

            // Check if request is ajax
            if ( Request::ajax() ) {

                // Try to find and update the task
                try {

                    $task = Task::findOrFail($request->input('task_id'));
                    $task->status = TRUE;
                    $task->save();

                    return Response::json( array("status" => TRUE, "titulo" => $task->titulo) );

                // if this has not been able to find the task
                } catch(Exception $e) {
                    return Response::json( array("status" => FALSE, "mensagem" => $e->getMessage()) );
                }

            }
        }

}