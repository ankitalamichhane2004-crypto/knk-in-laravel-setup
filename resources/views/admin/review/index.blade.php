
@extends('layouts.admin.master')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Simple Table</title>

    <style>
        table{
            width: 60%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th{
            background-color: lightgray;
        }
    </style>
</head>

<body>

    <table>
        <tr>
           
            <th>CustomerName</th>
            <th>Rating</th>
            <th> Description</th>
            <th>Show</th>
            <th colspan="2">Modify</th>
            <th>Create</th>
        </tr>

         @foreach ( $datas as $data ) 
        
      <tr>
        <td>{{ $data->CustomerName }}</td>
        <td>{{ $data->Rating}}</td>
        <td>{{ $data->Description }} </td>
        <td><a href="{{ route('blogshow', $data->id) }}"><button>Show</button></a></td>
        <td><a href="{{ route('blogedit', $data->id) }}"><button>Edit</button></td></a></td>
        <td><form action="{{ route('blogdelete',$data->id) }}" method="POST">@csrf<button type="submit">Delete</button></form></td>
     <td><a href="{{ route('blogform', $data->id) }}"><button>Create</button></a></td>
      </tr>
       
        @endforeach
   
    </table>

</body>
</html>


@endsection