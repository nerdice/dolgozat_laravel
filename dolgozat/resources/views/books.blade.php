<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Books</title>
    </head>
    <body>
        @if($errors->any())
            @foreach($errors->all() as $error)
                {{$error}} <br>
            @endforeach
        @endif

        @if (session('success'))
            {{session('success')}}
        @endif

        <div>
            <h1>Available books</h1> <hr>
            @foreach ($books->all() as $book)
                <ul>
                    <li>Book title: {{$book->title}}</li>
                    <li>Author: {{$book->author}}</li>
                    <li>Year of release: {{$book->release_year}}</li>
                    <li>{{book->genre->genre_title}}</li>
                </ul>    
                <hr>
            @endforeach
        </div>
    </body>
</html>