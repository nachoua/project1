<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>relationships</title>
    <link rel="stylesheet" href={{asset('\file_css.css')}}>

</head>
<body>
    <h1>starting the project</h1>
    @foreach ($data as $d)

    <h1>{{$d->first_name}}</h1>
    <h1>{{$d->last_name}}</h1>
    <h1>{{$d->adresse}}</h1>
    <h1>{{$d->birdthay}}</h1>
    {{-- for FK --}}
    <h1>this part retaled about FK<h1>
    <h1>{{$d->profile->email}}</h1>

    <h1>{{$d->profile->student_number}}</h1>

    @endforeach

</body>
</html>
