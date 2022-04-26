@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Publicar') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('PublicarFoto') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- imagen -->
                        <div class="row mb-3">
                            <label for="imagen" class="col-md-4 col-form-label text-md-end">{{ __('Imagen') }}</label>
                            <div class="col-md-6">
                                <input id="imagen" type="file" class="form-control" name="imagen">
                            </div>
                        </div>
                        <!-- descripcio -->
                        <div class="row mb-3">
                            <label for="descripcio" class="col-md-4 col-form-label text-md-end">{{ __('Descripcio') }}</label>
                            <div class="col-md-6">
                                <input id="descripcio" type="text" class="form-control @error('descripcio') is-invalid @enderror" name="descripcio" value="{{ Auth::user()->descripcio }}" autocomplete="descripcio" autofocus>
                                @error('descripcio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Pujar Imagen') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection