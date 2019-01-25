<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action = "create" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <table>
        <tr>
            <td>Name</td>
            <td><input type='text' name='name' /></td>
        </tr>
        <tr>
            <td colspan = '2'>
                <input type='submit' value="Add student"/>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>