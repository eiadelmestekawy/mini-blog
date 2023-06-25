@extends('layouts.app')

@section('content')

<div class="container">

    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        
        @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
        @endif
        <div class="form-group">
        <label for="exampleInputEmail1">title</label>
        <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">description</label>
        <input name="description" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">users</label>
            <select name="user_id" class="form-control">
                @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>    
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection