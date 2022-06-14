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
    <h1>My Store</h1>
    <br>
    <h1>Category</h1>
    <div class="stuff-body">
        @foreach ($categories as $category)
            <div class="categories">
                <b><a href="{{route('stuff.view', ['id' => $category->id])}}">{{$category->type}}</a></b><br>
            </div>
        @endforeach
    </div>
</body>
</html>