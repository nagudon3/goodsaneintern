<!DOCTYPE html>
<html>
<head>
    <title>Student Management - Update</title>
</head>
<body>
    <form method = "post" action = "{{ url('edit', $race->id) }}">
        @csrf
        <table>
            <tr>
            <td>Name</td>
            <td>
                <input type = 'text' name ='name' value = '{{$race->name}}' />
            </td>
            </tr>
            <tr>
                <td colspan = '2'>
                    <input type = 'submit' value = "Update student" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>