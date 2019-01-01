{{--
/**
 * Created by PhpStorm.
 * User: morisson
 * Date: 2018-11-28
 * Time: 09:17
 */
--}}

@extends('layouts.app')

@section('content')

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button aria-labelledby="close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

@endif
@component('components.header')
        @slot('title')
            @lang('Récapitularif de votre commande')
        @endslot
@endcomponent
{{--   LE TABLEAU  --}}
<table class="tableau">
    <tr class="ladescription">
        <th class="block-ladescription"><span>{{__('Marque de la voiture')}}</span></th>
        <th class="block-ladescription"><span>{{__('Prix')}}</span></th>
        <th class="block-ladescription"><span>{{__('Nombre de jours réservés')}}</span></th>
        <th class="block-ladescription"><span>{{__('Debut de la location')}}</span></th>
        <th class="block-ladescription"><span>{{__('Fin de la location')}}</span></th>
    </tr>
    <tr class="lepanier">
        <td class="block-description">
            <div class="leproduit">
                <h4 class="nameproduit">@if($commandes->marque_louee){{$commandes->marque_louee}}@endif</h4> {{-- LE NOM DU PRODUIT--}}
            </div>
        </td>
        <td class="leproduit">@if($commandes->prix_location){{$commandes->prix_location}}@endif</td>    {{--LE PRIX DE LA VOITURE--}}

        <td class="leproduit">@if($commandes->nbJoursLoues){{$commandes->nbJoursLoues}}@endif</td>    {{--NB JOURS DE LA VOITURE--}}
        <td class="leproduit">@if($commandes->DateDebutLocation){{$commandes->DateDebutLocation}}@endif</td>    {{--DATE DE DEBUT DE LOCATION--}}
        <td class="leproduit">@if($commandes->DateFinLocation){{$commandes->DateFinLocation}}@endif</td>    {{--DATE DE FIN DE LOCATION--}}

</table>
<div class="position-button">
    <a href="{{route('catalogue')}}">
        @component('components.button')
            @lang(__('Revenir au catalogue'))
        @endcomponent
    </a>
</div>

@endsection



