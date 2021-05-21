@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>{{$post->title}}</h1>
            <p>
                {{ $post->description }}
            </p>
            <p>Author: {{$post->user->name}}</p>
        </div>
    </div>
</div>
    
@endsection