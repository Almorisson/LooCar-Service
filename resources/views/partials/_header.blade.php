{{--
/**
 * Created by PhpStorm.
 * User: morisson
 * Date: 08/11/2018
 * Time: 22:01
 */

--}}
@extends('layouts.app')

<header>
    <h2><a href="#">Horsing Car</a></h2>
    @section('logo')
        @component('components.logo')
            {{\Illuminate\Support\Facades\URL::asset('images/HorsingCar-logo-1.png')}}
        @endcomponent

    <nav class="navbar-nav ">
        <hr>
        <li>
            <a href="#">
                Nos Marques
            </a>
        </li>
        <hr>
        <li>
            <a href="#">
                About HorsingCar
            </a>
        </li>
        <hr>
        <li>
            <a href="#">
                Contact
            </a>
        </li>
    </nav>

    <div class="">
        <h4>Username</h4>
    </div>
</header>
@endsection
