@extends('layouts.form')

@section('card')
    @component('components.card')
        @slot('title')
            @lang( __('Vérification de votre adresse mail'))
        @endslot

        @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    @lang(__('Un nouveau lien a été envoyé dans votre boîte mail.'))
                </div>
        @endif

        @lang(__("Avant de continuer, s'il vous plaît vérifier votre email pour valider le lien de vérification."))
        @lang(__("Si vous n'avez pas reçu le courriel")), <a href="{{ route('verification.resend') }}"> @lang(__('cliquez ici pour en recevoir un autre'))</a>.
    @endcomponent
@endsection
