@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			@if(Session::has('success'))
			<p class="text-success">{{session('success')}}</p>
			@endif
			<div class="card">
				<div class="card-body">
					<p><b>投稿者：{{$detail->name}}</b></p>
					<p>
						{{$detail->contents}}
					</p>
				</div>
			</div>

			<!-- Fetch Comments -->
			<div class="card my-4">
				<h5 class="card-header"><span>{{count($detail->comments)}}</span> コメント</h5>
				<div class="card-body">
					@if($detail->comments)
					@foreach($detail->comments as $comment)
					<div class="display-comment">
						<strong>{{ $comment->user->name }}</strong>
						<p>{{ $comment->comment }}</p>
					</div>
					<hr />
					@endforeach
					@endif
					<h4>コメントを書く</h4>
					<form method="post" action="{{ route('comment.store') }}">
						@csrf
						<div class="mb-3">
							<input type="text" name="comment" class="form-control" />
							<input type="hidden" name="post_id" value="{{$detail->id}}" />
						</div>
						<div class="mb-3">
							<input type="submit" class="btn btn-primary" value="コメント" />
						</div>
					</form>

				</div>
			</div>
		</div>
		@endsection()