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

        hehe
        <div> <hr>
            @foreach($rents->all() as $r)
            {{$r}} 
            <hr> 
            @endforeach
        </div>
    </body>
</html>