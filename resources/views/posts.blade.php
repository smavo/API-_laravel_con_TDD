@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($posts as $post )
            <div class="card md-4" style="margin-top:10px">
                <div class="card-body shadow">
                    <h5 class="card-title">
                        {{ $post->title}}
                    </h5>
                    <p class="card-text"> {{ $post->get_excerpt}}
                        <a href="{{ route('post', $post)}}">Leer Mas</a>
                    </p>
                    <p class="text-muted mb-0">
                        <em>
                            &ndash; {{ $post->user->name}} - 
                        </em>
                        {{ $post->created_at->format('d M Y ')}}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <center class="row justify-content-center pt-3">
        {{ $posts->links()}}
    </center>
    
</div>
@endsection
