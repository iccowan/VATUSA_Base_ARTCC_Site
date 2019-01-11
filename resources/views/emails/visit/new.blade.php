@extends('layouts.email')

@section('content')
<p>Dear {{ $visit->name }},</p>

<p>You visitor application has been successfully submitted and is being considered. If you have any questions or concerns, please email the DATM at <a href="{{ 'mailto:datm@'.\Config::get('facility.email') }}">{{ 'datm@'.\Config::get('facility.email') }}</a>.</p>

<p>Best regards,</p>
<p>{{ \Config::get('facility.name_short') }} Visiting Staff</p>
@endsection
