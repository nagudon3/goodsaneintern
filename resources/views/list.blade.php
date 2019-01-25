<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View list</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <table border = 1>
    <tr>
        <td>ID</td>
        <td>Name</td>
    </tr>
    @foreach ($race as $r)
    <tr>
        <td>{{ $r->id }}</td>
        <td>{{ $r->name }}</td>
    </tr>
    @endforeach
    </table>
</body>
</html>