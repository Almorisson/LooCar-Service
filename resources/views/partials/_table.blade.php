{{--
/**
 * Created by PhpStorm.
 * User: morisson
 * Date: 18/11/2018
 * Time: 22:23
 */

--}}

<h1 class="panier">{{$main_title}}</h1>
<hr class="ligne">

{{--   LE TABLEAU  --}}
<table class="tableau">
    <tr class="ladescription">
        <th class="block-ladescription"><span>{{$title_1}}</span></th>
        <th class="block-ladescription"><span>{{$title_2}}</span></th>
        <th class="block-ladescription"><span>{{$title_3}}</span></th>
    </tr>
    <tr class="lepanier">
        <td class="block-description">
            <div class="leproduit">
                <h4 class="nameproduit">{{$marque}}</h4> {{-- LE NAME DU PRODUIT--}}
                <img class="lavoiture" src="{{url($img)}}">
            </div>
        </td>
        <td class="leproduit">{{$prix}}</td>    {{--LE PRIX DE LA VOITURE--}}

        <td class="leproduit">                                    {{--NOMBRE DE JOUR DE RESERVATION--}}
            <select class="" name="{{strtolower($name)}}">
                @for($number = 1 ; $number <= $numbers; $number++)
                    <option value="{{$number}}">{{$number}}</option>
                @endfor
            </select>
        </td>
        <td class="leproduit"><a href="{{route('supprimer-panier')}}"><i class="fas fa-trash-alt"></i></a></td> {{--LIEN POUR SUPPRIMER LE PRODUIT DU PANIER--}}
    </tr>
</table>

<div class="paiement">Sous-total (NB D'ARTICLE):
    <div class="paiement2">
        {{$prix}}
    </div>

    <button class="leboutton">@lang('Louer la voiture')</button>
</div>



{{--
<table class="tableStyle">
    <h4>{{$main_title}}</h4>

    <thead>
    <th>{{$title_1}}</th>
    <th>{{$title_2}}</th>
    <th>{{$title_3}}</th>
    </thead>

    <tbody>
    <tr class="ligneImpaire">
        <td>
            <div class="produit6">
                <h4>{{$marque}}</h4>
                <img class="voiture" src="{{$img}}" height="200" width="200">
                </br>
                </br>
            </div>
        </td>
        <td>{{$prix * 1}}</td>
        <td>
            <select class="">
                @for($number = 1, $value = 1 ; $number <= $numbers; $number++, $value++)

                    <option value="{{$number}}">{{$number}}</option>
                @endfor
            </select>
        </td>

    </tr>
    </tbody>
</table>

--}}
