<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- <link rel="stylesheet" href={{asset('\file_css.css')}}> --}}
    <title>produit</title>
</head>
<body>
    <table class="table table-primary">
        <thead>
          <tr class="table-primary">
            <th scope="col">id</th>
            <th scope="col">price</th>
            <th scope="col">produit name</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($pro as $produit)
            <tr class="table-primary">
                {{-- <th scope="row">{{$customer->id}}</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td> --}}

                <th scope="row">
                   {{$produit->id}}

                </th>
                <th>{{$produit->price}}</th>
                <th>{{$produit->produit_name}}</th>
                       {{-- btn --}}
                       <form action={{route('add_produit')}} method="GET">
                        @csrf

                         <th class="table-secondary"><input type="submit" value="add" class="btn btn-dark"></th>

                     </form>

                    <form action={{route('destroy_produit', ['id' =>$produit->id])}} method="POST">
                       @csrf

                        @method('DELETE')
                        <th class="table-secondary"><input type="submit" value="Delete" class="btn btn-dark"></th>


                    </form>

                    <form action={{route('index_produit', ['id' =>$produit->id])}} method="GET">
                       @csrf

             <th class="table-secondary"><button class="btn btn-dark">Update </button></th>

                    </form>

              </tr>



          @endforeach
        </tbody>
      </table>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>
