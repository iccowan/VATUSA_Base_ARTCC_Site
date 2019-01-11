<!doctype html>
<html lang="ENG">
    <head>
    </head>
    <body>
        @yield('content')
        <br>
        ----------
        @yield('footer')
        <p><i>For entertainment purposes only. Do not use for real world purposes. Part of the VATSIM Network.</i></p>
        <p><i>If you believe that you have received this email in error, please contact the v{{ \Config::get('facility.name_short') }} ARTCC Webmaster at <a href="mailto:wm@{{ \Config::get('facility.email') }}">wm@{{ \Config::get('facility.email') }}</a>.</i></p>
    </body>
</html>
