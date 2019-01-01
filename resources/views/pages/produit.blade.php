@extends('layouts.app')

@section('content')
    @component('components.header')
        @slot('title')
            <h1>
                {{$produit->marque }}
            </h1>
        @endslot
    @endcomponent


    <div class="description">
        <div class="desc">
            <div class="desc2">
    {{--  DANS MA BDD L'ADMIN EST EGAL A 1 ET L'UTILISATEUR EGAL A 0--}}
    @if(\Auth::user()->user_category  == 1)

                @component('components.card')
                    @slot('title')
                        @lang('Modifier les informations de la Voiture')
                    @endslot

                    <form class="" method="POST" action="{{route('updateCar')}}">

                        @csrf
                        @include('partials._form-group', [
                            'title' => __('Marque'),
                            'name' => 'marque',
                            'type' => 'text',
                            'required' => true
                        ])

                        @include('partials._form-group', [
                             'title' => __('Vitesse'),
                             'name' => 'vitesse',
                             'type' => 'number',
                             'required' => true
                        ])

                        @include('partials._form-group', [
                             'title' => __('Prix'),
                             'name' => 'prix',
                             'type' => 'number',
                             'required' => true
                        ])

                        @foreach($categories as $category)

                        @include('partials._select', [
                             'name' => 'category',
                             'title' => __('Catégories'),
                             'options' => $categories,
                             'option' => $category->intitule

                        ])
                        @endforeach

                        @component('components.button', ['color' => 'skyblue'])
                            @lang('Mettre à jour')
                        @endcomponent
                    </form>
                @endcomponent


    @endif
            <div style="margin: auto auto;" class="container">

                <ul>
                    <div class="container-fluid">
                        <li>DESCRIPTION : {{ $produit->description }} </li>
                    </div>
                    <br>
                    <div class="container-fluid">
                        <li>VITESSE : {{$produit->vitesse}} Km/H</li>
                    </div>
                    </br>
                    <div class="container-fluid">
                        <li>PRIX/semaine : {{round($produit->prix)}} €</li>
                    </div>
                    </br>
                    <div class="container-fluid">

                            <li>CATEGORIE : {{$produit_category->category->intitule}}</li>

                    </div>

                </ul>
            </div>

            </div>
            <div style="margin-top: 700px;">
                <a href="{{route('produit_in_panier', ['id' => $produit->id])}}" class="produit-bouton">ADD</a>
                <a href="{{route('produit_in_panier', ['id' => $produit->id])}}" class="produit-bouton" style="animation-delay:0.07s">TO</a>
                <a href="{{route('produit_in_panier', ['id' => $produit->id])}}" class="produit-bouton" style="animation-delay:0.14s">THE</a>
                <a href="{{route('produit_in_panier', ['id' => $produit->id])}}" class="produit-bouton" style="animation-delay:0.21s"><i class="fas fa-cart-arrow-down"></i></a>
            </div>

        </div>

        <div class="desc">
        <img class="image" src="{{$produit->image}}" height="850px">
            <div class="desc2">
                DIPONIBILITE DU VEHICULE : @if($produit->disponibilite == "on"){{"Disponible"}}@else {{"Non disponible"}} @endif
            </div>
        </div>
    </div>
@endsection


