{{--
/**
 * Created by PhpStorm.
 * User: morisson
 * Date: 08/11/2018
 * Time: 22:12
 */
--}}


@extends('layouts.app')

@section('content')

    <div class="container-fluid frames-container-application">
        {{ $produits->links() }}
    </div>
        @if(\Illuminate\Support\Facades\Session::has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        @foreach($produits as $produit)
            <div class="produit">
                <h4>{{$produit->marque}}</h4>
{{--
             @include('partials._image', [

                    'img' => __($request->image),
                    'class' => "img-fluid float-none",
                    'description'=> $request->marque,

                ])


--}}

                <br>

                <img id = "img-produit" src="{{ \Illuminate\Support\Facades\URL::asset($produit->image) }}" alt="Image de voiture">


                <br>
                <a href="{{route('produit_in_panier', ['id' => $produit->id])}}" class="bouton">@lang('LOUEZ  MOI')</a>
                <br>
                <br>

            <a href="{{route('produits', ['id' => $produit->id])}}" class="bouton">@lang('DESCRIPTION')</a>
            </div>

        @endforeach

@endsection

