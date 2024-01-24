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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
          margin: 0;
          padding: 0;
          font-family: 'Mitr', sans-serif;
          background: linear-gradient(to right, #CCFCBB 50%, #183631 50%);
        }
        /* ... (CSS yang lain tetap sama) */
      </style>
  </head>
  <body>
    <div class="login">
      <div class="login-child">
        <div class="form-login">
            <div class="form-login-child"></div>
            <div class="form-login-item"></div>
            <img
            class="gambar"
            alt=""
            src="./gambar/bungalogin.png"
            />
            <center>
                <form action="{{ url('login') }}" method="POST">
                    @csrf
                    <input 
                    name="email"
                    class="input-email"
                    type="text" 
                    placeholder="email"/>
            
                    <input 
                    name="username"
                    class="input-username"
                    type="text" 
                    placeholder="Username"/>
            
                    <input 
                    name="password"
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
                    <button class="button" type="submit">Masuk</button>
                    </div>
                </form>
            </center>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script>
    //   var inputUsername = document.getElementById("inputUsername");
    //   if (inputUsername) {
    //     inputUsername.addEventListener("click", function (e) {
    //       // Please sync "Login" to the project
    //     });
    //   }

    //   var buttonLoginContainer = document.getElementById(
    //     "buttonLoginContainer"
    //   );
    //   if (buttonLoginContainer) {
    //     buttonLoginContainer.addEventListener("click", function (e) {
    //       // Please sync "Login" to the project
    //     });
    //   }
    </script>
  </body>
</html>
