@extends('layouts.email')

@section('content')
    <p>Dear {{ $visitor->name }},</p>

    <p>{!! nl2br(e($visitor->reject_reason)) !!}</p>

    <p>If you have any questions, please contact the DATM at <a href="{{ 'mailto:datm@'.\Config::get('facility.email') }}">{{ 'datm@'.\Config::get('facility.email') }}</a>.</p>
    <br>

    <p>Best regards,</p>
    <p>{{ \Config::get('facility.name_short') }} Visiting Staff</p>
@endsection
