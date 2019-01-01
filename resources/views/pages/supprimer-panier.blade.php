{{--
/**
 * Created by PhpStorm.
 * User: morisson
 * Date: 2018-11-28
 * Time: 15:47
 */
--}}
@extends('layouts.app')
@section('content')
@if(session('success'))
    <div class="alert alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button aria-labelledby="close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@endsection
