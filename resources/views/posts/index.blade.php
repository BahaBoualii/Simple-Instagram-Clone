@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row" >
                <div class="col-6 offset-3">
                    <a href="/profile/{{ $post->user->id }}"><img src="/storage/{{ $post -> image }}" class="w-100"></a>
                </div>
            </div>
            <div class="row">
                    <div class="offset-3 col-6 pt-2 pb-4">
                        <p>
                            <span class="fw-bold"><a href="/profile/{{ $post -> user -> id }}"><span class="text-black ">{{ $post -> user -> username }}</span></a>&nbsp;&nbsp;  </span>{{ $post->caption }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
            <div class="row">
                <div class="col-12 d-felx justify-content-center">
                    {{ $posts -> links() }}
                </div>
            </div>
    </div>
@endsection
