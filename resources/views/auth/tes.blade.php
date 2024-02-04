<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    
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
    </style>
</head>
<body>
    <section id="auth">
        <div class="min-vh-100 d-flex justify-content-center align-items-center">
            <div class="card border-0 shadow" style="background: transparent">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="namaapp">
                                <div class="house-of-plants">BloomUp</div>
                            </div>
                            <img
                                width="100%"
                                class="gambar"
                                alt=""
                                src="./gambar/bungalogin.png"
                            />
                        </div>
                        <div class="col-md-7">
                            <h2 class="mt-4 text-light text-center">
                                Login
                            </h2>
                            <form action="{{ url('login') }}" method="POST">
                                @csrf
                                <input 
                                name="email"
                                class="form-control mb-2"
                                type="text" 
                                placeholder="Username">
                        
                                <input 
                                name="password"
                                class="form-control mb-2"
                                placeholder="Password"
                                type="password"
                                />
                                
                                <div class="text-end">
                                    <button class="button btn btn-primary" type="submit">Masuk</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>