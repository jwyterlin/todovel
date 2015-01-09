<?php
/**
 * Created by PhpStorm.
 * User: Jhonathan Wyterlin
 * Date: 12/23/14
 * Time: 12:47 PM
 */
 ?>

 @extends('template')

 @section('title')
    Tarefas
 @stop

 @section('content')
     <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->titulo }}</li>
        @endforeach
     </ul>
 @stop