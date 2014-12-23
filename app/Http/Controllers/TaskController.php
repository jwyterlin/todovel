<?php
/**
 * Created by PhpStorm.
 * User: Jhonathan Wyterlin
 * Date: 12/23/14
 * Time: 12:43 PM
 */

class TaskController extends BaseController {

	public function getAdd() {
		return View::make('add_task');
	}

    public function postAdd() {

	}
    
}