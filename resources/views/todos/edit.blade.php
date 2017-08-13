@extends('layouts.app')
@section('content')
    <a href="/todolist/public/todo/{{$todo->id}}" class="btn btn-default">Go Back</a>
    <h1>Edit a todo</h1>
    {!! Form::open(['action' => ['TodosListController@update',$todo->id],'method'=>'POST']) !!}

    {{Form::bsText('text'),$todo->text}}
    {{Form::bsTextArea('body',$todo->body)}}
    {{Form::bsText('due',$todo->due)}}
    {{Form::hidden('_method','PUT')}}
    {{Form::bsSubmit('submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection