@extends('layouts.admin') @section('content')
<h3>Create Post</h3>
@include('includes.form_error') 
{!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>true]) !!}
{{csrf_field()}}
<div class="form-group">
    {!!Form::label('title','Title')!!} 
    {!!Form::text('title',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!!Form::label('category_id','Category')!!} 
    {!!Form::select('category_id',[''=>'Choose Categories']+ $category,null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!!Form::label('photo_id','Select Photo')!!}
    {!!Form::file('photo_id',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!!Form::label('body','Description')!!} 
    {!!Form::text('body',null,['class'=>'form-control'])!!}
</div>

<div class="class form-group">
    {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!} 
@endsection