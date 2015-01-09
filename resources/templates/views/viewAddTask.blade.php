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
    Adding Tasks
 @stop

 @section('content')
     <div class="row-fluid marketing">
         <div class="span6">
            @if ( count($errors) > 0)
                Errors found:<br />
                <ul>
                    @foreach ($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            @endif

            @if ( isset($success) )
               <h3>IT WORKED!</h3>
            @endif

            {!! Form::open( array("action" => "TaskController@postAdd") ) !!}
                <label>
                    Task to do:
                    <input type="text" name="titulo" />
                </label>
            {!! Form::submit('OK') !!}
            {!! Form::close() !!}

         </div>
     </div>
 @stop