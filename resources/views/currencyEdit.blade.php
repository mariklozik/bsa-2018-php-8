@extends('layouts.base')

@section('title')
    {{$title}}
@endsection

@section('h1')
    {{$title}}
@endsection

@section('content')
    <form action="{{ route('currencies.update', $currency->id) }}" method="POST">
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" placeholder="Title"
                       value="{{old('title', $currency->title)}}"
                >
                @if($errors->has('title'))
                    <div class="helper-text red-text">{{$errors->first('title')}}</div>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="short_name" class="col-sm-2 col-form-label">Short Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="short_name" placeholder="Short Name"
                       value="{{old('short_name', $currency->short_name)}}"
                >
            </div>
        </div>
        <div class="form-group row">
            <label for="logo_url" class="col-sm-2 col-form-label">Logo Url</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="logo_url" placeholder="Logo Url"
                       value="{{old('logo_url', $currency->logo_url)}}"
                >
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="price" placeholder="Price"
                       value="{{old('price', $currency->price)}}"
                >
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection