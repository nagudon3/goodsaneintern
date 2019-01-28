<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View Student Records</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
    <table border = "1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Gender</td>
        <td>Age</td>
        <td>Edit</td>
        <td>Delete</td>
        <td>Delete Permanently</td>
    </tr>
    @foreach ($race as $ras)
    <tr>
        <td>{{ $ras->id }}</td>
        <td>{{ $ras->name }}</td>
        <td>
            @if ( $ras->gender  === 0)
                Male
            @elseif ( $ras->gender  === 1)
                Female
            @else
                Confuse
            @endif
        </td>
        <td>{{ $ras->age }}</td>
        <td><a href = 'edit/{{ $ras->id }}'>Edit</a></td>
        <td><a href = 'delete/{{ $ras->id }}'>Delete</a></td>
        <td><a href = 'fdel/{{ $ras->id }}'>Delete Permanently</a></td>
    </tr>
    @endforeach
    </table>
    <p>Click <a href='restoreall'>here</a> to restore all non permanent deleted records.</p>
    <p>Click <a href="insert">here</a> to insert more records</p>
</body>
</html>