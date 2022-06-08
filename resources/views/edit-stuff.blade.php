<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>Edit Stuff</h1>
    <div class="form">
        <form action="{{route('stuff.update', ['id' => $stuff->id])}}" method="post">
            @csrf
            @method('patch')
            <label id="name">Name: </label>
            <input type="text" name="name">
            <br>
            <label>Quantity: </label>
            <input type="text" name="qty">
            <br>
            <div class="button">
                <button type="submit">Done</button>
            </div>
        </form>
    </div>
</body>
</html>