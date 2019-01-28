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
            <td>
                <select name='gender'>
                    <option value= 0 >Male</option>
                    <option value = 1>Female</option>
                    <option value = 3>Confuse</option>
                </select>
            </td>
            <tr>
            <td>Age</td>
            <td>
                <input type = 'text' name ='age' value = '{{$race->age}}' />
            </td>
            </tr>
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