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
            <th scope="col">email</th>
            <th scope="col">adresse</th>
            <th scope="col">adresse postal</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($cus as $customer)
            <tr class="table-primary">
                {{-- <th scope="row">{{$customer->id}}</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td> --}}

                <th scope="row">
                   {{$customer->id}}

                </th>
                <th>{{$customer->email}}</th>
                <th>{{$customer->adresse}}</th>
                <th>{{$customer->adresse_postal}}</th>
                <form action={{route('add_customer')}} method="GET">
                    @csrf


                     <th class="table-secondary"><input type="submit" value="add" class="btn btn-dark"></th>


                 </form>



                <form action={{route('destroy_customer', ['id' =>$customer->id])}} method="POST">
                   @csrf

                    @method('DELETE')
                    <th class="table-secondary"><input type="submit" value="Delete" class="btn btn-dark"></th>


                </form>

                <form action={{route('index_customer', ['id' => $customer->id])}} method="GET">


                   @csrf

         <th class="table-secondary"><button class="btn btn-dark">Update </button></th>

                    {{-- <th class="table-secondary"><input type="submit" value="Update" class="btn btn-dark"></th> --}}
                </form>


              </tr>



          @endforeach
        </tbody>
      </table>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>
