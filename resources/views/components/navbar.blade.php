<nav class="topnav" id="myTopnav">
    <div style="padding-left: 66px" class="logo">
        <img src="/gambar/logo.svg" class="logo">
    </div>
    <ul>
        <li><a href="{{ url('/') }}">BERANDA</a></li>•
        <li><a href="{{ url('artikel') }}">ARTIKEL</a></li>•
        <li><a href="#">DETEKSI PENYAKIT</a></li>•
        <li><a href="#">REKOMENDASI TANAMAN</a></li>
        <li class="login"><a href="#">Login</a></li>
    </ul>
    
    <div style="padding-right: 66px" class="buttons">
        <a href="{{ url('login') }}" class="loginmen">Log in</a>
    </div>
</nav>