@extends('theme::app')

@title('F.A.Q.')
@navigation('/support/faq')
@bodyclass('support-faq')

@section('content')
<div class="box">
    <span class="corners top"></span>

    <header class="header">
        <img class="headline" src="{{ asset('/pandaac/theme-tibia/img/headline-faq.gif') }}">
    </header>

    <div class="inner-box-border">
        <div class="inner-box">

            <p>...</p>

        </div>
    </div>

    <span class="corners bottom"></span>
</div>
@endsection