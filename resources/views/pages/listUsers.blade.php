{{--
/**
 * Created by PhpStorm.
 * User: morisson
 * Date: 12/11/2018
 * Time: 18:37
 */
--}}
@extends('layouts.app')

@section('content')
    @foreach($results as $result)
        @component('components.card')

                @slot('title')
                {{$result->name}}
                @endslot

                {{$result->email}}
                {{$result->user_category}}
        @endcomponent
    @endforeach
@endsection
