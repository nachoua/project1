<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset('\file_css.css')}}>
    <title>command</title>
</head>
<body>
     <h1> form one for produit</h1>
    {{-- @foreach ($data_customer as $customer) --}}
    <form action="{{route('store_fk_pro')}}" method="POST">
        {{-- @endforeach --}}
         @csrf
         <select name="customers_id">

            @foreach ($data_customer as $customer)
                <option name={{$customer->customers_id}}>{{$customer->id}}</option>
                @endforeach

       </select>
       <select name="produits_id">


        @foreach ($data_produit as $produit)
            <option name={{$produit->produits_id}}>{{$produit->id}}</option>
            @endforeach
   </select>
       <label>name :<input class="" type="text" name="name"></label>
       {{-- <label>produit name :<input class="" type="text" name="produit_name"></label> --}}

       <input class="" type="submit" value="send" name="submit">
    </form>
    <h1> form one for customer</h1>
    {{-- @foreach ($data_customer as $customer)
    <form action="{{route('store_fk_cus', ['id'=> $customer->id])}}" method="POST">
        @endforeach
         @csrf --}}


   {{-- <label>email :<input class="" type="text" name="email"></label>
   <label> adresse :<input class="" type="text" name="adresse"></label>
   <label> adresse postal: <input class="" type="text" name="adresse_postal"></label>
   <input class="" type="submit" value="send" name="submit">
    </form> --}}
</body>
</html>
