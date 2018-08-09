<!DOCTYPE html>
<html>
<head>
	<title>Projectos</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
    <br />
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Titulo</th>
        <th>Duración</th>
        <th>Fecha de Inicio</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($projects as $project)
      <tr>
        <td>{{$project['title']}}</td>
        <td>{{$project['duration']}}</td>
        <td>{{$project['start_date']}}</td>
	       
        <td><a href="{{action('ProjectController@edit', $project['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('ProjectController@destroy', $project['id'])}}" method="post">
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