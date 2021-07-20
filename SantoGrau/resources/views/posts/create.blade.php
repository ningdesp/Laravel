@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-3 p-5">
                <img src="/img/SantoGrauLogo.jpg" class="rounded-circle">
           </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{  }}</h1>
                    <a href="/p/create">Add New Post</a>
                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong></strong>posts</div>
                    <div class="pr-5"><strong></strong>followers</div>
                    <div class="pr-5"><strong></strong>following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{  }}</div>
                <div>{{  }}</div>
                <div><a href="{{ $user->profile->url }}">{{  }}</a></div>
            </div>
        </div>
    </div>
@endsection
