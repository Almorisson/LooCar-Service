{{--
/**
* Created by PhpStorm.
* User: morisson
* Date: 16/11/2018
* Time: 21:17
*/
--}}


<div class="form-group">
    <div>
        <label for="{{$name}}">{{$title}}</label>
    </div>

    <select name="{{$name}}" id="{{$name}}" class="custom-select">
        <option selected>...choisir</option>
        @foreach($options as $option)
        <option >{{$option->intitule}}</option>
        @endforeach
    </select>

</div>
