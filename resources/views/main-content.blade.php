@extends('layouts.app')

@section('title-page', 'main-content')

@section('main-content')
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="card" style="width: 18rem;">
                    <img src="{{ $product['thumb'] }}" class="card-img-top" alt="...">
                </div>
        </div>
        @endforeach
    </div>
    </div>
@endsection
