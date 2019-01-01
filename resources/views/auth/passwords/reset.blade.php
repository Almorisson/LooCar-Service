@extends('layouts.app')
@extends('layouts.form')
@section('card')
    @component('components.card')
        @slot('title')
            @lang('Renouvellement de  mot de passe')
        @endslot

        <form method="POST" action="{{ route('password.reset') }}">
            {{ csrf_field() }}
            <input type="hidden" name="token" value="{{ $token }}">

            @include('partials._form-group', [

                'title' => __('Adresse E-mail'),
                'type' => 'email',
                'name' => 'email',
                'required' => true

            ])

            @include('partials._form-group', [

             'title' => __('Mot de passez'),
             'type' => 'password',
             'name' => 'password',
             'required' => true

            ])

            @include('partials._form-group', [

             'title' => __('Mot de passe de confirmation'),
             'type' => 'password',
             'name' => 'password',
             'required' => true

            ])

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    @component('components.button')
                        @lang('Renouveller mon mot de passe')
                    @endcomponent
                </div>
            </div>
        </form>
    @endcomponent

@endsection
