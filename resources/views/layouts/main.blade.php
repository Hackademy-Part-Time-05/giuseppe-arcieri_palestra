<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Rubik:wght@400;700&display=swap" rel="stylesheet">
    <title>Palestra</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="container-fluid p-0">

    <x-navbar :$navbar :$logo />
      <section class="">
        {{$slot}}
      </section>
    <x-footer />
  </body>
</html>