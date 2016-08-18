@extends('theme::app')

@section('title', trans('theme::account/email/request/confirm.title'))
@section('navigation', '/account')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::account/email/request/confirm.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account/email/request/confirm.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        {!! trans('theme::account/email/request/confirm.content', ['server' => server()->name()]) !!}
                    </div>
                </div>

                <br>

                <table class="full-width">
                    <tr>
                        <td class="text-center">
                            <a href="{{ url('/account/download') }}" class="blue-button">
                                <span>{!! trans('theme::account/email/request/confirm.download') !!}</span>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="{{ url('/account/login') }}" class="blue-button">
                                <span>{!! trans('theme::account/email/request/confirm.login') !!}</span>
                            </a>
                        </td>
                    </tr>
                </table>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
