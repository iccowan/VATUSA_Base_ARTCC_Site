<footer id="myFooter">
    <div class="footer-social">
        @if(\Config::get('facility.vatstar') == 1)
            <a href="http://www.vatstar.com/" target="_blank"><img width="200" src="/photos/vatstar.png"></a>
            <br><br>
        @endif
        <p><i>For entertainment purposes only. Do not use for real world purposes. Part of the VATSIM Network.</i></p>
        @if(Carbon\Carbon::now()->month == 12)
            <button class="btn btn-secondary btn-sm" onclick="snowStorm.stop();return false">Stop Snow</button>
        @endif
    </div>
    <div class="container">
        <p class="footer-copyright">
            © {{ Carbon\Carbon::now()->year }} v{{ \Config::get('facility.name_short') }} ARTCC
        </p>
    </div>
</footer>
