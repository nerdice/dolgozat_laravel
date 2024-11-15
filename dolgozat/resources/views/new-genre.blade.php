<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New genre</title>
    </head>
    <body>
        <form action="{{route('new-genre.store')}}" method="POST">
            @csrf
            <label for="genre_title">Add new genre: </label> <br>
            <input type="text" name="genre_title" id="genre_title"> <br>
            <button>Submit</button>
        </form>
    </body>
</html>