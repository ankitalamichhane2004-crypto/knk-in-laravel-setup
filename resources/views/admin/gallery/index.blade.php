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
        .photo{
            height: 100px;
            width: 100px;
        }
    </style>
</head>

<body>

    <table>
        <tr>
           
            <th>Name</th>
            <th>image1</th>
            <th>image2</th>
            <th>Show</th>
            <th colspan="2">Modify</th>
            <th>Create</th>
        </tr>

         @foreach ( $datas as $data ) 
        
      <tr>
        <td>{{ $data->Name }}</td>
        <td><img src="{{ asset('/storage/' . $data->image1) }}" alt="" class="photo"> </td>
        <td><img src="{{ asset('/storage/' . $data->image2) }}" alt="" class="photo"> </td>
       
        <td><a href="{{ route('gallery.show', $data->id) }}"><button>Show</button></a></td>
        <td><a href="{{ route('gallery.edit', $data->id) }}"><button>Edit</button></td></a></td>
        <td><form action="{{ route('gallery.destroy', $data->id) }}" method="POST">
        @csrf
       @method('DELETE')
       <button type="submit" class="delete-btn">Delete</button>
    </form></td>
     <td><a href="{{ route('gallery.index', $data->id) }}"><button>Create</button></a></td>
      </tr>
       

       

        @endforeach
   
    </table>

</body>
</html>


@endsection