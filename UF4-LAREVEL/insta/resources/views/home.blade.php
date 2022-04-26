@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(!empty($imgs) && $imgs->count() )
            @foreach($imgs as $img)
            <!-- {{var_dump($img);}} -->
            <div class="card">
                <div class="card-header">
                    <img style="width:40px; height:40px; border-radius: 50%; " src="{{ route('getimage', ['filename'=>$img->user->image]) }}" class="avatar">
                    <span>
                        {{ $img->user->name .' '. $img->user->surname .' | @'. $img->user->nick }}
                    </span>
                </div>

                <div class="card-body">
                    <img style="height:550px;" src="{{ route('getpub', ['filename'=>$img->image_path]) }}" class="avatar">
                    <div class="nickname date">
                        {{'@'. $img->user->name.'| Fa' }} {{  \FormatTime::LongTimeFilter($img->created_at) }}
                    </div>
                    <div class="nickname date">
                        {{$img->description }}
                        <a style="width:100px;" class="list-group-item" href="coment">Comentar</a>
                    </div>
                    
                </div>
                <br>
            @endforeach
            @endif
            {!! $imgs->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
