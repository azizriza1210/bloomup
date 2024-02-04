<main class="header">
    <nav class="topnav" id="myTopnav">
        <div class="logo">
            <img src="/gambar/logo.svg" class="logo">
        </div>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>•
            <li><a href="{{ url('artikel') }}">Article</a></li>•
            <li><a href="#">Desease Detection</a></li>•
            <li><a href="#">Plant Recomendation</a></li>
            <li class="login"><a href="#">Login</a></li>
        </ul>
        
        <div class="buttons">
            <a href="{{ url('login') }}" class="loginmen">Log in</a>
        </div>
    </nav>
</main>