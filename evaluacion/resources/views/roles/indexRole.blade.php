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
                <th>ID</th>
                <th>NAME</th>
            </tr>
        </thead>
        <tbody>
            @forelse($allRoles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                    <td>
                        <form action="{{route('role.deleteRole', ['role' => $role->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button>Eliminar</button>
                        </form>
                        <form action="{{route('role.updateRole', ['role' => $role->id])}}" method="get">
                            
                            <button>Actualizar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    Empty
                </tr>
            @endforelse
        </tbody>
    </table>
    

    <a href="{{route('roles.createRole')}}">Crear rol</a>
</body>
</html>