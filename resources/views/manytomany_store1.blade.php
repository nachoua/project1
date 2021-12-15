<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset('\file_css.css')}}>
    <title>many to many store 1</title>
</head>
<body>
    <h1>many to many store 1</h1>
    {{-- @foreach ($data_produit as $produit) --}}
    {{-- , ['id'=> $produit->id] --}}
    <form action="{{route('storecustomer')}}" method="POST">
        {{-- @endforeach --}}
        @csrf
        <label>email :<input class="" type="text" name="email"></label>
        <label> adresse :<input class="" type="text" name="adresse"></label>
        <label> adresse postal: <input class="" type="text" name="adresse_postal"></label>

        <input class="" type="submit" value="send" name="submit">

    </form>

</body>
</html>
