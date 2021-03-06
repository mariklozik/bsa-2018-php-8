@extends('layouts.base')

@section('title')
    {{$title}}
@endsection

@section('h1')
    {{$title}}
@endsection

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Logo</th>
                <th scope="col">Title</th>
                <th scope="col">Short name</th>
                <th scope="col">Price</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($allCurrencies as $currency)
                <tr>
                    <th> {{ $currency->id }} </th>
                    <td> <img src="{{ $currency->logo_url }}" alt="{{$currency->title}}"> </td>
                    <td> <a href="{{ $currency->id }}"> {{ $currency->title }} </a> </td>
                    <td> {{ $currency->short_name }} </td>
                    <td> {{ $currency->price }} </td>
                    <td> <a href="/currencies/{{ $currency->id }}/edit" class="edit-button badge badge-primary"> Edit </a> </td>
                    <td>
                        <form action="" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger delete-button">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection