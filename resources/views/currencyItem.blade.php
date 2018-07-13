@extends('layouts.base')

@if( !empty($currency) )
    @section('title')
        {{$currency->title}} page
    @endsection

    @section('h1')
        {{$currency->title}} page
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
                <tr>
                    <th> {{ $currency->id }} </th>
                    <td> <img src="{{ $currency->logo_url }}" alt="{{$currency->title}}"> </td>
                    <td> {{ $currency->title }} </td>
                    <td> {{ $currency->short_name }} </td>
                    <td> {{ $currency->price }} </td>
                    <td> <a href="/currencies/{{ $currency->id }}/edit" class="edit-button badge badge-primary"> Edit </a> </td>
                    <td> <a href="/currencies/{{ $currency->id }}/delete" class="delete-button badge badge-danger"> Delete </a> </td>
                </tr>
            </tbody>
        </table>
    @endsection
@else
    <h1> Currency not exist </h1>
@endif