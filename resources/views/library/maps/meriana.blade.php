@extends('theme::app')

@section('title', 'Maps')
@section('body', 'library-maps')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-maps.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <div class="text-center">
                <h3>Meriana</h3>

                <img border="2" src="{{ config('pandaac.theme-tibia.paths.maps') }}/{{ $area }}.jpg" alt="Meriana">
            </div>

            <p>
                The small island Meriana is located in the north of Vandura. Some of the natives have founded a small hideout here to escape from the oppression of the Thaians. The nature of the island offers perfect conditions for this rebel hideout. The southern coast is almost completely coated by huge mountains, creating a rather hostile and uninhabited impression. However, behind the mountains, the spectator is offered a surprising view. Palm trees and exotic plants offer shelter and food for the rebels.
            </p>

        </div>
    </div>
    
    <span class="corners bottom"></span>
</div>
@endsection