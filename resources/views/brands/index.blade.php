<!DOCTYPE html>
<html>
<head>
	<title>Marcas</title>
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
      
      @foreach($brands as $brand)
      <tr>
        <td>{{$brand['id']}}</td>
        <td>{{$brand['name']}}</td>
	
        <td><a href="{{action('BrandController@edit', $brand['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('BrandController@destroy', $brand['id'])}}" method="post">
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