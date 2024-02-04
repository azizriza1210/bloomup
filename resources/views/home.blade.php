<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>BloomUp</title>
    <!---CSS File!--->
    <link rel="stylesheet" href="/css/homestyle.css" />
    {{-- <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css"> --}}
  </head>

  <body>
    @include('components.navbar')

    <div class="content">
      <div class="textdec">
        <p style="color: var(--homesecol);font-size: 65px;font-weight: 500">Perawatan Tanaman</p>
        <p class="deskripsi">
          Rawatlah tanaman Anda dan buatlah <br/>tanaman Anda mekar dengan indah
          {{-- Take care of your plants and make<br />them bloom beautifully --}}
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
          <a href="{{ url('artikel') }}" class="seeall">Lihat Semua</a>
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
