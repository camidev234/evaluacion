<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Numero de documento</th>
                <th>Nombre</th>
                <th>Telefono</th>
            </tr>
        </thead>
        <tbody>
            @foreach($allUsers as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->number_document}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->telephone}}</td>
                    <td>
                        <form action="{{route('users.destroyUser', ['user' => $user->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button>Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{route('users.createUser')}}">Crear usuario</a>
</body>
</html>