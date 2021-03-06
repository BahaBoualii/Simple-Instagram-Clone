@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5" >
            <img src="{{ $user-> profile-> profileImage() }}" alt="profile-image" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>
                    {{ $user-> username }}
                </h1>
                <follow-button user-id="{{ $user -> id }}" follows="{{ $follows }}"></follow-button>
                @can('update', $user->profile)
                <a href="/p/create">Add a new Post</a>
                @endcan
            </div>
            @can('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pe-4"><strong>{{ $postCount }}</strong> posts</div>
                <div class="pe-4"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="pe-4"><strong>{{ $followingCount }}</strong> following</div>
            </div>
            <div class="pt-4">
                <strong>{{ $user -> profile -> title }}</strong>
            </div>
            <div>
                {{ $user->profile->description }}
            </div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 p-2 py-3">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" alt="image" class="w-100 h-100" >
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
