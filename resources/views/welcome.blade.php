<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-primi-passi</title>
</head>
<body>
    
    <h1>{{ $titolo1 }} </h1>
    <h2>{{ $titolo2 }}</h2>
    <h3>{{ $titolo3 }}</h3>
    
    @foreach($caratteristiche as $caratteristica)
        <p>{{$caratteristica}} </p>
    @endforeach

</body>
</html>