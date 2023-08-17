<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>
<body>
    <h2>List users</h2>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Option</td>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="/post/user/update/{{ $user->id }}">Update</a> <br>
                    <a href="/post/user/delete/{{ $user->id }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="/post/user/create">Create new user</a> <br>
</body>
</html>
