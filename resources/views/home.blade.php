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
      <div style="display: flex;">
        <div style="flex: 1; padding: 10px;">
          <p class="articlestext">Artikel</p>
        </div>
        <div style="display: flex; justify-content: flex-end; flex: 2; padding: 10px;">
          <a href="{{ url('artikel') }}" class="button_bawah" style="text-decoration: None">Lihat Semua</a>
        </div>
      </div>

      <div class="carousel">

        <div class="carousel-inner">
          <div class="carousel-item">
            <div class="gambar-container">
              <img src="/gambar/artikel.png" alt="Image 1" class="gambar-gelap">
              <div class="teks-di-gambar tanggal">11 November 2023</div>
              <div class="teks-di-gambar judul-artikel">Panduan pemula untuk merawat tanaman anggrek</div>
              <button class="button">Baca Selengkapnya</button>
            </div>
            <img src="/gambar/artikel.png" alt="Image 2">
            <img src="/gambar/artikel.png" alt="Image 3">
          </div>
          <!-- Tambahkan slide sesuai kebutuhan -->
        </div>
      </div>
    </div>
    
    {{-- <div class="homebawah">
      <div class="linkd">
        <p class="deseasetext">Deteksi Penyakit</p>
        <div class="bagian-bawah">
          <div class="bagian-kiri">
            <p>Bagian Kiri</p>
          </div>
          <div class="bagian-kanan">Bagian Kanan</div>
        </div>
      </div>
    </div> --}}

    <div class="container-grid">
      <div class="kolom">
        <p class="articlestext">Deteksi Penyakit</p>
        <div style="display: flex;">
          <div style="flex: 1; padding: 10px;">
            <img src="/gambar/DP.png">
          </div>
          <div style="flex: 2; padding: 10px;">
            <p class="articlestext" style="font-size: 22px">
              Ketahui penyakit yang ada pada tanaman anda dan temukan solusinya
            </p>
            <a class="button_bawah">Pergi ke Halaman</a>
          </div>
        </div>
      </div>
      <div class="kolom">
        <p class="articlestext">Rekomendasi Tanaman</p>
        <div style="display: flex;">
          <div style="flex: 1; padding: 10px;">
            <img src="/gambar/RT.png">
          </div>
          <div style="flex: 2; padding: 10px;">
            <p class="articlestext" style="font-size: 22px">
              Temukan tanaman terbaik sesuai dengan kategori yang Anda inginkan
            </p>
            <a class="button_bawah">Pergi ke Halaman</a>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
