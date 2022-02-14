<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>movie_name</th>
            <th>movie_description</th>
            <th>movie_gener</th>
            <th>delete</th>
            <th>edit</th>
        </tr>
        @foreach($movies as $movie)
        <tr>
            <td>{{$movie->movie_name}}</td>
            <td>{{$movie->movie_description}}</td>
            <td>{{$movie->movie_gener}}</td>
            <td><button>Delete</button></td>
            <td><button>Edit</button></td>
       </tr>
       @endforeach
    </table>
</body>
</html>