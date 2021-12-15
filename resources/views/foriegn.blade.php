<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- <link rel="stylesheet" href={{asset('\file_css.css')}}> --}}
    <title>customer</title>
</head>
<body>
    <table class="table table-primary">
        <thead>
          <tr class="table-primary">
            <th scope="col">id</th>
            <th scope="col">produit_id</th>
            <th scope="col">customer_id</th>
            <th scope="col">name</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($cusss as $customer)
            <tr class="table-primary">


                <th scope="row">
                   {{$customer->id}}

                </th>
                <th>{{$customer->produits_id}}</th>
                <th>{{$customer->customers_id}}</th>
                <th>{{$customer->name}}</th>

               {{-- btn --}}

               <form action={{route('destroy_fkc', ['id' =>$customer->id])}} method="POST">
                @csrf
                 @method('DELETE')
                 <th class="table-secondary"><input type="submit" value="Delete" class="btn btn-dark"></th>


             </form>
              </tr>
          @endforeach
        </tbody>
      </table>
      {{-- @foreach ($pro->customer as $cu)

      <h1>{{$cu->id}}</h1>
      <h1>{{$cu->adresse}}</h1>
      <h1>{{$cu->adresse_postal}}</h1>
      <h1>{{$cu->email}}</h1>
      @endforeach
      @foreach ($test->produit as $t)

      <h1>{{$t->price}}</h1>

      {{-- <h1>{{$t->produit->pivot->price}}</h1> --}}



      {{-- +@endforeach  --}}
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>
