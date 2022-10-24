@extends('app')
@section('content')
  <div class="card">
    <div class="card-body p-0 table-responsive">
      <table class="table table-bordered table-striped table-hover m-0">
        <thead>
          <th>#</th>
          <th>User id</th>
          <th>Name</th>
          <th>Contents</th>
        </thead>
        @foreach($posts as $post)
        <tr>
          <td>{{$post->id}}</td>
          <td>{{$post->user_id}}</td>
          <td>{{$post->name}}</td>
          <td>{{$post->contents}}</td>
          <td>
            <a class="btn btn-sm btn-warning" href="{{url('detail/'.$post->id)}}">Comment</a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
  @endSection
