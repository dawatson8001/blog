@extends('layouts.admin')

@section('content')

    <h1>Posts</h1>

    <table class="table">
        <thead>
          <tr>
              <th>ID</th>
              <th>Owner</th>
              <th>Title</th>
              <th>Body</th>
              <th>Created</th>
              <th>Updated</th>
          </tr>
        </thead>
        <tbody>

        @if($posts)
            @foreach($posts as $post)
          <tr>
              <td>{{$post->id}}</td>
              <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->user->name}}</a></td>
              <td>{{$post->title}}</td>
              <td>{{str_limit($post->body, 20)}}</td>
              <td>{{$post->created_at->diffForHumans()}}</td>
              <td>{{$post->updated_at->diffForHumans()}}</td>
              <td><a href="{{route('admin.posts.index', $post->id)}}">View Post</a></td>
              <td><a href="{{route('admin.comments.show', $post->id)}}">View Comments</a></td>
          </tr>
            @endforeach
            @endif
        </tbody>
    </table>
@stop