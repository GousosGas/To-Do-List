@extends('layouts.app')
@section('content')
<h1>Create a todo</h1>
{!! Form::open(['action' => 'TodosListController@store','method'=>'POST']) !!}

{{Form::bsText('text')}}
{{Form::bsTextArea('body')}}
{{Form::bsText('due')}}
{{Form::bsSubmit('submit',['class'=>'btn btn-primary'])}}



{!! Form::close() !!}

    @endsection