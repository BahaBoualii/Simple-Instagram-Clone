@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post -> image }}" class="w-100">
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <div class="pe-3">
                        <img src="{{ $post -> user -> profile -> profileImage() }}" class="w-100 rounded-circle" style="max-height: 50px; max-width: 50px">
                    </div>
                    <div>
                        <h3>
                            <a href="/profile/{{ $post -> user -> id }}"><span class="text-black">{{ $post -> user -> username }}</span></a>
                        </h3>
                        <a href="#" class="ps-3">Follow</a>
                    </div>
                </div>
                <hr>
                <div>
                    <p>
                        <span class="fw-bold"><a href="/profile/{{ $post -> user -> id }}"><span class="text-black ">{{ $post -> user -> username }}</span></a>  </span>{{ $post->caption }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
