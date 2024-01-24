<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./globalogin.css" />
    <link rel="stylesheet" href="./css/form-login.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Mitr:wght@300;500&display=swap"
    />
  </head>
  <body>
    <div class="login">
      <div class="login-child"></div>
      <div class="form-login">
        <div class="form-login-child"></div>
        <div class="form-login-item"></div>
        <img
          class="gambar"
          alt=""
          src="./gambar/bungalogin.png"
        />

        <input 
          class="input-username"
          type="text" 
          placeholder="Username">

        <input 
          class="input-password"
          placeholder="Password"
          type="password"
        />

        <div class="label-login">
          <div class="house-of-plants">Masuk</div>
        </div>
        <div class="namaapp">
          <div class="house-of-plants">BloomUp</div>
        </div>
        <div class="button-login" id="buttonLoginContainer">
          <div class="button-login-child"></div>
          <div class="button">Masuk</div>
        </div>
      </div>
    </div>

    <script>
      var inputUsername = document.getElementById("inputUsername");
      if (inputUsername) {
        inputUsername.addEventListener("click", function (e) {
          // Please sync "Login" to the project
        });
      }

      var buttonLoginContainer = document.getElementById(
        "buttonLoginContainer"
      );
      if (buttonLoginContainer) {
        buttonLoginContainer.addEventListener("click", function (e) {
          // Please sync "Login" to the project
        });
      }
    </script>
  </body>
</html>