<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!-- Section: Design Block -->
  <!-- Background image -->
    <div class="p-5 bg-image" style="
        background-image: url('https://wallpaperaccess.com/full/1950286.jpg');
        height: 300px;
        ">
        <section class="text-center">
            <img src="https://drive.google.com/thumbnail?id=1_ApqoUNL_BJM-LvksFPPCWHhz8nNHkdA" width="120" height="60" style="margin-top: 40px;">
        </section>
    </div>
  <!-- Background image -->

  <div style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        width: 600px;
        height: 500px;
        margin-left: 450px;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        ">
    <div class="card-body py-3 px-md-3">

    @yield('input-box')
    </div>
  </div>
@yield('script')
<!-- Section: Design Block -->
</body>
</html>
