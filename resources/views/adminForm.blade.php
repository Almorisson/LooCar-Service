{{--
/**
 * Created by PhpStorm.
 * User: morisson
 * Date: 14/11/2018
 * Time: 12:44
 */

--}}

@extends('layouts.form')

@section('card')
    @component('components.card')
        @slot('title')
            @lang("Ajout d'une nouvelle Voiture")
        @endslot

        <form method="POST" action="{{ route('postAdminForm') }}" enctype="multipart/form-data">
            {{ csrf_field() }}

            @foreach($categories as $category)

            @include('partials._select', [

                'name' => 'category',
                'title' => __('Catégories'),
                'options' => $categories,
                'option' => $category->intitule
            ])
            @endforeach
            @include('partials._form-group', [
                'title' => __('Marque de la voiture'),
                'type' => 'text',
                'name' => 'marque',
                'required' => true,
                ])

            @include('partials._form-group', [
                'title' => __('Description'),
                'type' => 'text',
                'name' => 'description',
                'required' => true,
                ])

            @include('partials._form-group', [
                'title' => __("Url de l'image"),
                'type' => 'url',
                'name' => 'image',
                'required' => true,
                ])

            @include('partials._form-group', [
                'title' => __('Prix'),
                'type' => 'number',
                'name' => 'prix',
                'required' => true,
                ])
            @include('partials._form-group', [
                'title' => __('Vitesse'),
                'type' => 'number',
                'name' => 'vitesse',
                'required' => true,
                ])

            @include('partials._form-group', [
                 'title' => __('Nombre de jours réservable'),
                 'type' => 'number',
                 'name' => 'nbjoursreserves',
                 'required' => true,
                 ])

                <div>
                    <label for="disponibilite1">@lang('Disponibilité')</label>
                </div>

                <div class="form-check form-check-inline d-inline-block">
                    <input type="radio" id="disponibilite1" class="form-check-input" name="disponibilite" required>
                    <label for="disponibilite1"class="form-check-label">@lang('Disponible')</label>
                </div>

                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="disponibilite2" name="disponibilite" >
                    <label for="disponibilite2" class="form-check-label">@lang('Indisponible')</label>
                </div>

                <div class="form-group">

                        @component('components.button')
                            @lang('Ajouter la nouvelle voiture')
                        @endcomponent

                </div>


        </form>

    @endcomponent
@endsection
