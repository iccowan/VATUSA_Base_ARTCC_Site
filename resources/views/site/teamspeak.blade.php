@extends('layouts.master')

@section('title')
Teamspeak
@endsection

@section('content')
<span class="border border-light" style="background-color:#F0F0F0">
    <div class="container">
        &nbsp;
        <h2>{{ \Config::get('facility.name_short') }} ARTCC Teamspeak Information</h2>
        &nbsp;
    </div>
</span>
<br>

<div class="container">
    <center><h1>{{ \Config::get('facility.name_short') }} ARTCC Teamspeak Information</h1></center>
    <hr>

    {{-- MAKE CHANGES AFTER THIS LINE --}}
    {{-- ALL CHANGES SHOULD CONSIST OF REMOVING BRACKETS [], IF APPLICABLE --}}

    {{-- Teamspeak server description --}}
    <center><h3>Teamspeak is used for all training and all controller communications, but all members are welcome to join us in the teamspeak. You can connect to the teamspeak server, without a password, using the IP:</h3></center>

    {{-- Teamspeak server information --}}
    <center><h2><a href="ts3server://[ARTCC TS SERVER]?port=9987">[ARTCC TS SERVER]</a></h2></center>
    <hr>
    {{-- Teamspeak server rules --}}
    <center><h2>Teamspeak Rules:</h2></center>
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8">
            <ul>
                <li>[Rule 1]</li>
                <li>[Rule 2]</li>
                <li>[Rule 3]</li>
                {{-- Add more by simply adding more lines like so: <li>[Rule 4]</li> --}}
            </ul>
        </div>
        <div class="col-sm-2">
        </div>
    </div>
    <hr>

    {{-- NO MORE CHANGES NECESSARY AFTER THIS LINE --}}

    <center><p>If you have any additional questions, please contact either the ATM or DATM at <a href="atm@{{ \Config::get('facility.email') }}">atm@{{ \Config::get('facility.email') }}</a> or <a href="datm@{{ \Config::get('facility.email') }}">datm@{{ \Config::get('facility.email') }}</a> respectively.</p></center>
</div>

@endsection
