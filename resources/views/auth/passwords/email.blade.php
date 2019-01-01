@extends('layouts.form')

@section('card')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @component('components.card')
        @slot('title')
            @lang('Réinitialisation de mot de passe')
        @endslot

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            @include('partials._form-group', [
                'title' => __('Adresse E-mail'),
                'type' => 'email',
                'name' => 'email',
                'required' => true
            ])

            @component('components.button')
                @lang('Envoyer le lien de réinitialisation')
            @endcomponent
        </form>
    @endcomponent

@endsection
