<!DOCTYPE html>
<html>
<head>
	<title>Ciudades</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
    <br />
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Número</th>
        <th>Nombre</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($countries as $country)
      <tr>
        <td>{{$country['id']}}</td>
        <td>{{$country['name']}}</td>
	
        <td><a href="{{action('CountryController@edit', $country['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('CountryController@destroy', $country['id'])}}" method="post">
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