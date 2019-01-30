@extends('layouts.home')

@section('content')
    <br>
    @if(Auth::guest())
    <div class="alert alert-primary" role="alert">
        You should login for more features. <a href="/login">Click Here</a>
    </div>
    @endif
    @if(!Auth::guest())
        <div class="alert alert-primary" role="alert">
            Welcome {{ Auth::user()->name }}
        </div>
    @endif
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
