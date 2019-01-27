@extends('layouts.home')

@section('content')

    @foreach ($products as $product)
        <div class="card mt-4">
            <img class="card-img-top img-fluid"
                 src="{{ $product->url }}"
                 style="height:150px;" alt="">
            <div class="card-body">
                <h3 class="card-title"><a href="{{ $product->getViewUrl() }}">{{ $product->title }}</a></h3>
                <h4>${{ $product->cost }}</h4>
                <p class="card-text">
                    {{ $product->summary }}
                </p>
                <span class="text-warning"><?php echo $product->getStars();?></span>
                {{ $product->rating }}.0 stars
            </div>
        </div>
    @endforeach

<br>
<!-- /.card -->
@endsection
