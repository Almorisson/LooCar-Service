{{--
/**
 * Created by PhpStorm.
 * User: morisson
 * Date: 10/11/2018
 * Time: 01:16
 */
--}}

<button type="submit" class="btn @isset($color){{ ' btn-' . $color }}@else btn-primary @endisset float-right">
    {{ $slot }}
</button>
