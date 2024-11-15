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

        @if(session('success'))
            {{session('success')}}
        @endif

        <div>
            <h1>Available books</h1> <hr>
            @foreach ($books->all() as $book)
                <ul>
                    <li>Book title: {{$book->title}}</li>
                    <li>Author: {{$book->author}}</li>
                    <li>Year of release: {{$book->release_year}}</li>
                    <li>Genre: {{$book->genre->genre_title}}</li>
                </ul>    
                <form action="" method="GET">
                    <button>Kölcsönzés</button>
                </form>
                <form action="{{route('books.destroy', $book->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Törlés</button>
                </form>
                <hr>
            @endforeach
        </div>
    </body>
</html>