@extends('layouts.home')

@section('content')


    <div class="card mt-4">
        <div class="card-header">
            <h3 class="card-title">Edit a New Product</h3>
        </div>
        <div class="card-body">

            {!! Form::open(['url' => ['/shop/update',$product->id],'method'=>'POST']) !!}

            <div class="form-group">
                {{Form::label('name', 'Name', ['class' => 'awesome'])}}
                {{ Form::text('name', $product->title,['class'=>'form-control','placeholder'=>'Product Name']) }}
            </div>

            <div class="form-group">
                {{Form::label('preview', 'Preview', ['class' => 'awesome'])}}
                {{ Form::text('preview',$product->url,['class'=>'form-control','placeholder'=>'Product Preview Link']) }}
            </div>

            <div class="form-group">
                {{Form::label('description', 'Description', ['class' => 'awesome'])}}
                {{ Form::text('description', $product->summary,['class'=>'form-control']) }}
            </div>

            <div class="form-group">
                {{Form::label('cost', 'Cost', ['class' => 'awesome'])}}
                {{ Form::number('cost', $product->cost,['class'=>'form-control']) }}
            </div>

            <div class="form-group">
                {{Form::label('rating', 'Rating', ['class' => 'awesome'])}}
                {{ Form::number('rating', $product->rating,['class'=>'form-control']) }}
            </div>

            {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}

            {!! Form::close() !!}
        </div>
    </div>
    <br>

@endsection
