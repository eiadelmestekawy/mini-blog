@extends('layouts.app')

@section('content')

<div class="container">

<a href="{{route('posts.create')}}" class="btn btn-success" >create post</a>
  <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">title</th>
          <th scope="col">discriptions</th>
          <th scope="col">username</th>
          <th scope="col">createdat</th>
          <th scope="col">actions</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($posts as $post)
          <tr>
              <th scope="row">{{$post->id}}</th>
              <td>{{$post->title}}</td>
              <td>{{$post->description}}</td>
              <td>{{$post->user  ? $post->user->name : 'choose the best answer'}}</td>
              <td>{{$post->created_at}}</td>
              <td>
                <a href="{{route('posts.show', $post->id )}}"  class="btn btn-primary">view details</a>
              </td>
            </tr>                    
          @endforeach

      </tbody>
    </table>

</div>    
@endsection

