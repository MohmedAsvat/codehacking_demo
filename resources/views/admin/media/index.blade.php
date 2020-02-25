@extends('layouts.admin') @section('content')
@if(Session::has('delete_media'))
<div class="alert alert-success">
{{session('delete_media')}}
</div>
@endif 
<h3>Media</h3>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Create</th>
            <th>Update</th>
        </tr>
    </thead>

    <tbody>
        @if($photos) @foreach($photos as $photo)

        <tr>
            <td>{{$photo->id}}</td>
            <td>
                <img height="50" src="{{$photo->file}}" alt="">
            </td>
            <td>{{$photo->created_at ? $photo->created_at : 'no date'}}</td>
            <td>{{$photo->updated_at ? $photo->updated_at : 'no date'}}</td>
            <td>

                {!! Form::open(['method'=>'DELETE','action'=>['AdminMediaController@destroy',$photo->id]]) !!} 
                {{csrf_field()}}
                <div class="class form-group">
                    {!! Form::submit('Delete Photo',['class'=>'btn btn-danger']) !!}
                </div>
                {!! Form::close() !!}

            </td>
        </tr>
        @endforeach @endif
    </tbody>
</table>

@endsection