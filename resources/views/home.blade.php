@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header d-flex justify-content-between align-items-center">
                    {{ __('Dashboard') }}
                    <a class="btn btn-sm btn-primary" href="{{url('add')}}">{{ __('Add')}}</a>
                    <!-- Wrap with <div>...buttons...</div> if you have multiple buttons -->
                </h5>
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
                                <a class="btn btn-sm btn-warning" href="{{url('post/'.$post->id)}}">{{ __('Details')
                                    }}</a>
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