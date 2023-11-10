<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('role.storeRole')}}" method="POST">
        @csrf
        <label for="">Rol:</label><br>
        <input type="text" placeholder="name" name="name"><br>
        <button>Crear rol</button>
    </form>
</body>
</html>