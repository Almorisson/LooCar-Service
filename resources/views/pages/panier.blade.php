{{--
/**
 * Created by PhpStorm.
 * User: morisson
 * Date: 15/11/2018
 * Time: 16:41
 */
--}}
@extends('layouts.app')
@section('content')

    @include('partials._table',
    [
        'main_title' => __('Votre Panier'),
        'title_1' => __("Voiture(s) Réservée(s)"),
        'title_2' => __("Prix de la réservation"),
        'title_3' => __("Nombre de jours réservés"),
        'marque' => $produit->marque,
        'img' => $produit->image,
        'prix' => $produit->prix,
        'name' => __('selectList'),
        'numbers' => 10,
        'number' => 1
    ])

    <a href="{{route('louer')}}">
        @component('components.button')
            @lang('Passer la réservation')
        @endcomponent
    </a>


@endsection
