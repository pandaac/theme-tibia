@extends('theme::app')

@section('title', trans('theme::account/email/request/request.title'))
@section('body', 'account-email-request-request')
@section('navigation', '/account')

@section('content')

    <div class="box">
        <span class="corners top"></span>

        <header class="header">
            <div class="headline">{!! trans('theme::account/email/request/request.title') !!}</div>
        </header>

        <div class="inner-box-border">
            <div class="inner-box">

                <div class="table">
                    <header class="header">
                        <div class="borders">
                            <span class="edges top"></span>
                            {!! trans('theme::account/email/request/request.heading') !!}
                            <span class="edges bottom"></span>
                        </div>
                    </header>

                    <div class="content dark">
                        {!! trans('theme::account/email/request/request.content') !!}
                        <p class="text-center"><strong>{{ $account->email() }}</strong></p>
                        <br>
                    </div>
                </div>

                <br>

                <table class="full-width">
                    <tr>
                        <td class="text-center">
                            <a href="{{ url('/account/manage') }}" class="blue-button">
                                <span>{!! trans('theme::account/email/request/request.back') !!}</span>
                            </a>
                        </td>
                    </tr>
                </table>

            </div>
        </div>

        <span class="corners bottom"></span>
    </div>
    
@stop
