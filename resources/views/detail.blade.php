@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			@if(Session::has('success'))
			<p class="text-success">{{session('success')}}</p>
			@endif
			<div class="card">
				<h5 class="card-header">
					ユーザー名：{{$detail->name}}
				</h5>
				<div class="card-body">
					{{$detail->contents}}
				</div>
			</div>

			<!-- Fetch Comments -->
			<div class="card my-4">
				<h5 class="card-header"><span>{{count($detail->comments)}}</span> コメント</h5>
				<div class="card-body">
					@if($detail->comments)
					@foreach($detail->comments as $comment)
					<blockquote class="blockquote">
						<p class="mb-0">{{$comment->comment}}</p>
					</blockquote>
					<hr />
					@endforeach
					@endif
				</div>
			</div>
		</div>
		@endsection()