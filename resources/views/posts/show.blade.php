@extends('layouts.app')

@section('content')
<div class="container w-75">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" class="w-100" alt="">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-4">
                        <img src="{{$post->user->profile->profileImage()}}" alt="" class="w-100 rounded-circle" style="max-width:40px">
                    </div>
                    <div>
                        <h6 class="d-flex align-items-center">
                            <a class="text-dark" href="/profile/{{ $post->user->id}}">{{$post->user->username}}</a>
                            <follow-button class="pl-3"></follow-button>
                        </h6>
                    </div>
                </div>

                <hr>

                <p><span class="font-weight-bold"><a class="text-dark" href="/profile/{{ $post->user->id}}">{{$post->user->username}}</a></span> {{$post->caption}}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
