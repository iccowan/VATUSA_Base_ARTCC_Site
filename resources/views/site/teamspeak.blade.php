@extends('layouts.master')

@section('title')
Teamspeak
@endsection

@section('content')
<span class="border border-light" style="background-color:#F0F0F0">
    <div class="container">
        &nbsp;
        <h2>[ARTCC NAME] ARTCC Teamspeak Information</h2>
        &nbsp;
    </div>
</span>
<br>

<div class="container">
    <center><h1>[ARTCC NAME] ARTCC Teamspeak Information</h1></center>
    <hr>
    <center><h3>Teamspeak is used for all training and all controller communications, but all members are welcome to join us in the teamspeak. You can connect to the teamspeak server, without a password, using the IP:</h3></center>
    <center><h2><a href="ts3server://[ARTCC TS SERVER]?port=9987">[ARTCC TS SERVER]</a></h2></center>
    <hr>
    <center><h2>Teamspeak Rules:</h2></center>
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8">
            <ul>
                <li>[Rule 1]</li>
                <li>[Rule 2]</li>
                <li>[Rule 3]</li>
            </ul>
        </div>
        <div class="col-sm-2">
        </div>
    </div>
    <hr>
    <center><p>If you have any additional questions, please contact either the ATM or DATM at <a href="[ATM EMAIL]">[ATM EMAIL]</a> or <a href="[DATM EMAIL]">[DATM EMAIL]</a> respectively.</p></center>
</div>

@endsection
