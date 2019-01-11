@extends('layouts.email')

@section('content')
<p>Dear {{ $controller->full_name }},</p>

<p>You have new feedback that has been approved. You can see the details below or from the <a href="{{ \Config::get('app.url') }}/dashboard/controllers/profile">"My Profile"</a> page on the website.</p>
<br>

<p><b>Submitted at:</b> {{ $feedback->created_at }}</p>
<p><b>Position:</b> {{ $feedback->position }}</p>
<p><b>Callsign:</b> {{ $feedback->callsign }}</p>
<p><b>Comments:</b></p>
<p>{!! nl2br(e($feedback->comments)) !!}</p>
<p><b>Staff Comments:</b></p>
@if($feedback->staff_comments != null)
    <p>{!! nl2br(e($feedback->staff_comments)) !!}</p>
@else
    <p>No staff comments.</p>
@endif
<br>

<p>If you have any thoughts/comments, please email the DATM at <a href="{{ 'mailto:datm@'.\Config::get('facility.email') }}">{{ 'datm@'.\Config::get('facility.email') }}</a>.</p>
<br>

<p>Sincerely,</p>
<p>{{ \Config::get('facility.name_short') }} ARTCC Staff</p>
@endsection
