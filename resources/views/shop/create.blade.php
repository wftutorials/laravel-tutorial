@extends('layouts.home')

@section('content')


    <div class="card mt-4">
        <div class="card-header">
            <h3 class="card-title">Create a New Product</h3>
        </div>
        <div class="card-body">
            @if(count($errors) >0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            @if(session("success"))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif

            {!! Form::open(['url' => 'shop/save','method'=>'POST']) !!}

            <div class="form-group">
                {{Form::label('name', 'Name', ['class' => 'awesome'])}}
                {{ Form::text('name', '',['class'=>'form-control','placeholder'=>'Product Name']) }}
            </div>

            <div class="form-group">
                {{Form::label('preview', 'Preview', ['class' => 'awesome'])}}
                {{ Form::text('preview','',['class'=>'form-control','placeholder'=>'Product Preview Link']) }}
            </div>

            <div class="form-group">
                {{Form::label('description', 'Description', ['class' => 'awesome'])}}
                {{ Form::text('description', '',['class'=>'form-control']) }}
            </div>

            <div class="form-group">
                {{Form::label('cost', 'Cost', ['class' => 'awesome'])}}
                {{ Form::number('cost', '',['class'=>'form-control']) }}
            </div>

            <div class="form-group">
                {{Form::label('rating', 'Rating', ['class' => 'awesome'])}}
                {{ Form::number('rating', '',['class'=>'form-control']) }}
            </div>

            {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}

            {!! Form::close() !!}
        </div>
    </div>
    <br>

@endsection
