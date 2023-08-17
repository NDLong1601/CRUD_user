<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <h2>Create user</h2>
    <form action="{{route('create')}}" method="post">
        @csrf
        <label for="Name">
            Name:
            <input type="text" name="name">
        </label><br><br>
        <label for="Email">
            Email:
            <input type="text" name="email">
        </label><br><br>
        <label for="Password">
            Password:
            <input type="text" name="password">
        </label><br><br>
        <button type="submit">Create user</button>
    </form>
</body>
</html>

