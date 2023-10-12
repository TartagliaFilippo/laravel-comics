@extends('layouts.app')

@section('title-page', 'main-content')

@section('main-content')
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="card" style="width: 18rem;">
                    <img src="{{ $product['thumb'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
