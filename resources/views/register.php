<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action = "abcde" method = "POST">
    <input type= "hidden" name="_token" value="<?php echo csrf_token() ?>" >

    <table>
    <tr>
        <td>Name</td>
        <td><input type="text" name = "name" /></td>
    </tr>
    <tr>
        <td>Username</td>
        <td><input type = "text" name="username" /></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="text" name="password" /></td>
    </td>
    <tr>
        <td colspan = "2" allign="center">
            <input type = "submit" value = "Register" />
        </td>
    </tr>
    </table>
    </form>
</body>
</html>