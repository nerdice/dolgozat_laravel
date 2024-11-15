<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Book</title>
    </head>
    <body><p>dqs</p>
        @if($errors->any())
            @foreach($errors->all() as $error)
                {{$error}} <br>
            @endforeach
        @endif

        @if(session('success'))
            {{session('success')}}
        @endif

AAAAAAAAAAAAAAAAAAAAAA
        </div>
    </body>
</html>