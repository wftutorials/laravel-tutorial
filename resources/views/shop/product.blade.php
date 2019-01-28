@extends('layouts.home')

@section('content')

    <div class="card mt-4">
        @if(session("success"))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        <img class="card-img-top img-fluid" src="{{ $product->url }}" alt="">
        <div class="card-body">
            <h3 class="card-title"> {{ $product->title }}</h3>
            <h4>${{ $product->cost }}</h4>
            <p class="card-text">{{ $product->summary }}</p>
            <span class="text-warning"><?php echo $product->getStars();?></span>
            4.0 stars
        </div>
        <div class="card-footer">
            <a href="/shop/edit/{{ $product->id }}" class="btn btn-primary">Edit Product</a>
            {!! Form::open(['url' => 'shop/remove','method'=>'POST','style'=>'display:inline']) !!}
                {{ Form::hidden("id",$product->id) }}
            {{ Form::submit('Delete Product',['class'=>'btn btn-danger','style'=>'display:inline']) }}

            {!! Form::close() !!}
        </div>
    </div>
    <br>

    <div class="card card-outline-secondary my-4">
        <div class="card-header">
            Product Reviews
        </div>
        <div class="card-body">
            <div>
                {!! Form::open(['url' => '/reviews','method'=>'POST']) !!}
                <div class="form-group">
                    {{Form::label('review', 'Review', ['class' => 'awesome'])}}
                    {{ Form::text('review', '',['class'=>'form-control','placeholder'=>'Enter Review']) }}
                    {{ Form::hidden('productId', $product->id) }}
                </div>
                {{ Form::submit('Save a Review',['class'=>'btn btn-success']) }}

                {!! Form::close() !!}
            </div>
            <br>
            @foreach( $reviews as $review )
            <p>{{ $review->content }}</p>
            <small class="text-muted">Posted by {{ $review->author }} on {{ $review->created_at }}</small>
            <hr>
            @endforeach
        </div>
    </div>
    <br>
@endsection


