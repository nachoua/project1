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

    <form action={{route('update_produit', ['id'=> $pro->id])}} method="POST">
        {{-- @endforeach --}}
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <label>price:<input class="" type="text" name="price" value="{{$pro->price}}"></label>
        <label> produit name :<input class="" type="text" name="produit_name" value="{{$pro->produit_name}}"></label>


        <input class="" type="submit" value="send" name="submit">

    </form>

</body>
</html>
