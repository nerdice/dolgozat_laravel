<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Book</title>
    </head>
    <body>
        @if($errors->any())
            @foreach($errors->all() as $error)
                {{$error}} <br>
            @endforeach
        @endif

        @if(session('success'))
            {{session('success')}}
        @endif

        <div>
            <h3>Book details: </h3>
            <p>Book title: {{$book->title}}</p>
            <p>Author: {{$book->author}}</p>
            <p>Release year: {{$book->release_year}}</p>
            <br>
            <label for="email">E-mail: </label> <br>
            <input type="email" name="email" id="email"> <br>
            <label for="rent_date">Date of rent: </label> <br>
            <input type="date" name="rent_date" id="rent_date"> <br>
            <button>Rent out</button>
        </div>

        </div>
    </body>
</html>