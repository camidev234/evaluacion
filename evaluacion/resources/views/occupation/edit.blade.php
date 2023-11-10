<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('occupations.update', ['id' => $occupation->id])}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" placeholder="occupation_code" name="occupation_code" value="{{$occupation->occupation_code}}"><br>
        <input type="text" placeholder="occupation name" name="occupation_name" value="{{$occupation->occupation_name}}"><br>
        <input type="text" placeholder="description" name="description" value="{{$occupation->description}}">
        <button>Actualizar</button>
    </form>
</body>
</html>