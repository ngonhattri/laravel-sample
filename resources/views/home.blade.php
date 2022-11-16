@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

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
                                <a class="btn btn-sm btn-warning" href="{{url('post/'.$post->id)}}">Comment</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection