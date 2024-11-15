<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New book</title>
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

        
        <form action="{{route('new-book.store')}}" method="POST">
            @csrf
            <label for="">Add a new book: </label> <br> <br> <hr>
            
            <label for="title">Book title: </label> <br>
            <input type="text" name="title" id="title"> <br>
            
            <label for="author">Author: </label> <br>
            <input type="text" name="author" id="author"> <br>
            
            <label for="release_year">Year of release: </label> <br>
            <input type="number" name="release_year" id="release_year"> <br>

            <select name="genre_id" id="genre_id">
                @foreach ($genres->all() as $genre)
                    <option value="{{$genre->id}}">{{$genre->genre_title}}</option>
                @endforeach
            </select>
            
            <button>Submit</button>
        </form>
    </body>
</html>