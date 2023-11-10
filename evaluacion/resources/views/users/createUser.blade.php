<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('users.storeUser')}}" method="POST">
        @csrf
        <select name="role_id" id="">
            @foreach ($roles as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
        </select>
        <label for="">Nombre</label><br>
        <input type="text" placeholder="nombre" name="name">
        <label for="">Numero de documento</label><br>
        <input type="text" placeholder="numero de documento" name="number_document"><br>
        <label for="">Telefono</label><br>
        <input type="text" name="telephone" placeholder="telefono"><br>
        <label for="">Celular</label><br>
        <input type="text" name="phone_number"><br>
        <label for="">Correo</label><br>
        <input type="text" placeholder="email" name="email">
        <label for="">Cumpleaños</label><br>
        <input type="date" name="birthdate" placeholder="cumpleaños"><br>
        <label for="">Contraseña</label><br>
        <input type="password" placeholder="password" name="password">

        <button>Crear usuario</button>
    </form>
</body>
</html>