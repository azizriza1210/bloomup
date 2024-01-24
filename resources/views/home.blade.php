<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>BloomUp</title>
    <!---CSS File!--->
    <link rel="stylesheet" href="/css/homestyle.css" />
  </head>

  <body>
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
          </a>
        </ul>

        <div class="buttons">
          <a href="form-login.html" class="loginmen">Log in</a>
        </div>
      </nav>
    </main>

    <div class="content">
      <div class="textdec">
        <h1>Plants Care</h1>
        <p class="deskripsi">
          Take care of your plants and make<br />them bloom beautifully
        </p>
      </div>
      <div class="roundedbiru">
        <div class="rectangle">
          <div class="gambar">
            <img src="/gambar/bungabesar.png" class="bungabesar">
            <img src="/gambar/bungakecil.png" class="bungakecil">

          </div>
        </div>
      </div>
    </div>

    <div class="article">
      <div class="link">
        <a href="#" class="articlestext">Article</a>
      </div>
      <div class="link1">
        <div class="text">
          <a href="{{ url('artikel') }}" class="seeall">See All</a>
        </div>
      </div>
    </div>
    
    <div class="homebawah">
      <div class="linkd">
        <a href="#" class="deseasetext">Desease Detection</a>
      </div>
    </div>
  </body>
</html>
