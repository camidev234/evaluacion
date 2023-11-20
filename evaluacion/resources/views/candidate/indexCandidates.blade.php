<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listado de Candidatos</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Numero de documento</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($allCandidates as $candidate)
                <tr>
                    <td>{{$candidate->user->name}}</td>
                    <td>{{$candidate->user->number_document}}</td>
                    <td>{{$candidate->user->email}}</td>
                </tr>
            @empty
                <td>No candidates on system</td>
            @endforelse
        </tbody>
    </table>
</body>
</html>