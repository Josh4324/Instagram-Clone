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
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url ?? "N/A"}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.flos2-1.fna.fbcdn.net/v/t51.2885-15/e35/c66.0.617.617a/s240x240/106812457_605667103662743_4054510873304183924_n.jpg?_nc_ht=instagram.flos2-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=lBbNyTW95j4AX_553kj&oh=f191e08d93679b5d65982a234f48c760&oe=5F25B676"
                alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.flos2-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.107.924.924a/s480x480/101418871_149220720095600_2797518877581952974_n.jpg?_nc_ht=instagram.flos2-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=fwodovYa1JsAX_W2-hX&oh=0b0f2f141a76df5ab6df7137a310e00a&oe=5F28A432"
                alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.flos2-1.fna.fbcdn.net/v/t51.2885-15/e35/c94.0.559.559a/s480x480/99420587_129326572100379_5555056403099701638_n.jpg?_nc_ht=instagram.flos2-1.fna.fbcdn.net&_nc_cat=103&_nc_ohc=JV8ovG8oCPcAX9e910S&oh=344f1e475b33d276c836217e7aff1882&oe=5F28BBFA"
                alt="" class="w-100">
        </div>

    </div>
</div>
@endsection
