@extends('layouts.admin.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Blog Show Page</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container{
            width: 500px;
            background: white;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
        }

        h2{
            text-align: center;
        }

        p{
            font-size: 18px;
            margin: 15px 0;
        }

        strong{
            color: #007bff;
        }
    </style>
</head>
<body>

    <div class="container">

        <h2>Gallery Details</h2>

        <p>
            <strong> Name :</strong>
           
             {{ $gallery->Name}}
        </p>

        <p>
            <strong>image1</strong>
           
             {{ $gallery->image1 }}
        </p>

        <p>
            <strong>image2</strong>
            
             {{ $gallery->image2 }}
        </p>

    </div>

</body>
</html>

@endsection