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
        <td>Edit</td>
    </tr>
    @foreach ($race as $ras)
    <tr>
        <td>{{ $ras->id }}</td>
        <td>{{ $ras->name }}</td>
        <td><a href = 'edit/{{ $user->id }}'>Edit</a></td>
    </tr>
    @endforeach
    </table>
</body>
</html>