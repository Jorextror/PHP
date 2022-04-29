@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Afegir comentaris</h1>
                </div>

                <div class="card-body">
                    @if ($img->image_path)
                    <img style="height:550px;" src="{{ route('getpub', ['filename'=>$img->image_path]) }}" class="avatar">

                    <form method="POST" action="{{ route('comentar') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- content -->
                        <div class="row mb-3">
                            <label for="content" class="col-md-4 col-form-label text-md-end">{{ __('Comentar') }}</label>
                            <div class="col-md-5">
                                <input value="{{ $img->id }}" name="imgid" type="hidden">
                                <input id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="content" value="{{ Auth::user()->content }}" autocomplete="content" autofocus>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar') }}
                                </button>
                            </div>

                        </div>

                        <div class="row mb-0">
                            <div class="col-md- offset-md-10">

                            </div>
                        </div>
                    </form>
                    @endif

                    <div class="nickname date"> 
                    @if(!empty($img->comments->content) && $img->count())
                    
                    {{ '@'.$img->user->nick .' : '}} {{ $img->comments->content }}
                        <!-- si user id es igual a user id del comentario puede borrar o si es el propio de la img  -->
                        @if(Auth::user()->id==$img->user_id || Auth::user()->id==$img->comments->id)
                        <a href="{{ route('eliminar.comentario', ['filename'=>$img->comments->id]) }}" >Eliminar</a>
                        @endif
                    </div>
                    @endif

                </div>
            
            </div>
            
        </div>
    </div>
</div>
@endsection
