<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>My Store</h1>
    <div class="add"><a href="/create">Add Stuff</a></div>
    <div class="stuff-body">
        @foreach ($stuffs as $stuff)
            <div class="card">
                <b>{{$stuff->name}}</b><br>
                <p>Quantity: {{$stuff->qty}}</p>
            </div>
        @endforeach
    </div>
</body>
</html>