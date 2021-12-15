<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>many to many</title>

    <link rel="stylesheet" href={{asset('\file_css.css')}}>
</head>
<body>
     <h1>starting project many to many </h1>
     @foreach ($pro->customer as $cu)

     <h1>{{$cu->id}}</h1>
     <h1>{{$cu->adresse}}</h1>
     <h1>{{$cu->adresse_postal}}</h1>
     <h1>{{$cu->email}}</h1>
     @endforeach
     @foreach ($test->produit as $t)

     <h1>{{$t->price}}</h1>

     {{-- <h1>{{$t->produit->pivot->price}}</h1> --}}



     @endforeach

</body>
</html>
