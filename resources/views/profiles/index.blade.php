@extends('layouts.app')

@section('content')
<div class="container w-75">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.flos2-2.fna.fbcdn.net/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=instagram.flos2-2.fna.fbcdn.net&_nc_ohc=T50tpB9NWS0AX9xNUjq&oh=48dfe8455afcc7addacab7dc9bde2e02&oe=5F272A67"
                class="rounded-circle" alt="">
        </div>
        <div class="col-9 pt-5 d">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user-> username}}</h1>
                @can('update', $user->profile)
                <a href="/p/create">Add New Post</a>
                @endcan
            </div>
            @can('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url ?? "N/A"}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4 ">
            <a href="/p/{{$post -> id}}">
                <img src="/storage/{{ $post->image}}" alt="" class="w-100 ">
            </a>
        </div>
        @endforeach


    </div>
</div>
@endsection
