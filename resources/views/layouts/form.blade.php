{{--
/**
 * Created by PhpStorm.
 * User: morisson
 * Date: 12/11/2018
 * Time: 11:41
 */

--}}

@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @yield('card')
            </div>
        </div>
    </div>
@endsection
