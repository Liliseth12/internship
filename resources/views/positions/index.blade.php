<!DOCTYPE html>
<html>
<head>
	<title>Cargos</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
    <br />
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Nombre</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($positions as $position)
      <tr>
        <td>{{$position['position_name']}}</td>
	       
        <td><a href="{{action('PositionController@edit', $position['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('PositionController@destroy', $position['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</body>
</html>