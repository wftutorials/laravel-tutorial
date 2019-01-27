@extends('layouts.home')

@section('content')

    <div class="card mt-4">
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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <a href="#" class="btn btn-success">Leave a Review</a>
        </div>
    </div>
    <br>
@endsection


