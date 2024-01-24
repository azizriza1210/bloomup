<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>BloomUp</title>
    <!---CSS File!--->
    <link rel="stylesheet" href="/css/artikelstyle.css" />
  </head>

  <body>
    <main class="header">
      <nav class="topnav" id="myTopnav">
        <div class="logo">
          <img src="/gambar/logo.svg" class="logo">
        </div>
        <ul>
          <li><a href="{{ url('/') }}">Home</a></li>•
          <li><a href="#">Article</a></li>•
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
    
    <div class="wrapper">
        <div class="label">Cari Artikel</div>
        <div class="searchBar">
          <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Search article" value="" />
          <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
            <svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
            </svg>
          </button>
        </div>
    </div>
  </body>
</html>