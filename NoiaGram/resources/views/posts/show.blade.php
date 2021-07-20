@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 40px;">
                    </div>
                    <div>
                        <div class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                            <a href="#" class="pl-3">Follow</a>
                        </div>
                    </div>
                </div>

                <hr>



                <p><span class="font-weight-bold">
                    <a href="/profile/{{ $post->user->id }}">
                        <span class="text-dark">{{ $post->user->username }}</span>
                    </a></span> {{ $post->caption }}
                </p>
                <form action="/p" enctype="multipart/form-data" method="post">
                @csrf


                <div class="d-flex">
                <div class="form-group row">                            
                            <div class="col-md-6">
                                <input id="coment" type="text" class="form-control @error('coment') is-invalid @enderror" name="coment" value="{{ old('coment') }}" required autocomplete="coment" autofocus>

                                @error('coment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{ { $message } }</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row">
                                <button class="btn btn-primary">Coment</button>
                            </div>
                            <div>
                            
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
