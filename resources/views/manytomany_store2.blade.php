<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset('\file_css.css')}}>
    <title>many to many store 2</title>
</head>
<body>
    <h1>many to many store 2</h1>

 {{-- @foreach ($data_customer as $customer) --}}

    <form action="{{route('storeproduit')}}" method="POST">
        {{-- @endforeach --}}
         @csrf
         {{-- <select name="id">

            @foreach ($data_customer as $customer)
                <option name={{$customer->id}}>{{$customer->id}}</option>
                @endforeach

       </select> --}}

        <label>price :<input class="" type="text" name="price"></label>
        <label>produit name :<input class="" type="text" name="produit_name"></label>


        <input class="" type="submit" value="send" name="submit">

    </form>

</body>
</html>
