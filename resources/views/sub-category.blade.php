<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>{{$category->type}}</h1>
    <div class="nav">
        <div class="add"><a href="{{route('stuff.add')}}">Add Stuff</a></div>
    </div>
    <div class="stuff-body">
        @foreach ($stuffs as $stuff)
            <div class="card">
                <b>{{$stuff->name}}</b><br>
                <p>Quantity: {{$stuff->qty}}</p>
                <div class="buttons">
                    <div class="edit">
                        <a href="{{route('stuff.edit', ['id' => $stuff->id])}}">Edit</a>
                    </div>
                    <form action="{{route('stuff.delete', ['id' => $stuff->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>