@extends('master')
@section('content')
  <div class="container">
      <div class="pull-left" style="margin-bottom: 20px;">
        <h2 style="font-weight: bold">Metro Article</h2>
    </div>
      <div class="pull-right" style="padding-top: 12px;">
        <a href="{{action('CRUDController@create')}}" class="btn btn-primary">Create new article</a>
    </div>  
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Author</th>
        <th>Title</th>
        <th>Post</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cruds as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post->author->author}}</td>
        <td>{{$post['title']}}</td>
        <td>{{$post['post']}}</td>
        <td><a href="{{action('CRUDController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('CRUDController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
