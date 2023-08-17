<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <h2>Create user</h2>
    {{-- dd($id); --}}
    <form action="{{route('update',[$user->id])}}" method="post">
        @csrf
        <label for="Name">
            Name:
            <input type="text" name="name" value="{{ $user->name }}">
        </label><br><br>
        <label for="Email">
            Email:
            <input type="text" name="email" value="{{ $user->email }}">
        </label><br><br>
        <label for="Password">
            Password:
            <input type="text" name="password" >
        </label><br><br>
        <button type="submit">Edit user</button>
    </form>
    <a href="/post/user/">List</a>
</body>
</html>
