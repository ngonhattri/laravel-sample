@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
            @endif
            <form method="POST" action="{{ url('/postStore') }}">
                @csrf
                <div class="mb-3">
                    <label>Contents<span class="text-danger">*</span></label>
                    <textarea type="text" class="form-control" name="contents" autocomplete="contents" autofocus
                        required>{{old('contents')}}</textarea>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Save</button>
                    <a href="{{ route('home') }}" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endSection