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
    @csrf
    <table>
        <tr>
            <td>Name</td>
            <td><input type='text' name='name' /></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type='text' name='age' /></td>
        <tr>
            <td>
                <select name="gender">
                    <option value="0">Male</option>
                    <option value="1">Female</option>
                    <option value="3">Confuse</option>
                </select>
            </td>
            <td colspan = '2'>
                <input type='submit' value="Add student"/>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>