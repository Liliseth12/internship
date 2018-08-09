<!DOCTYPE html>
<html>
<head>
	<title>Clientes</title>
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
        <th>Apellido</th>
        <th>E-mail</th>
        <th>Cliente</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($customers as $customer)
      <tr>
        <td>{{$customer['id']}}</td>
        <td>{{$customer['first_name']}}</td>
	       <td>{{$customer['last_name']}}</td>
         <td>{{$customer['email']}}</td>
         @if ($customer['is_coor']==1)
         <td>No</td>
         @else
         <td>Si</td>
         @endif
        <td><a href="{{action('CustomerController@edit', $customer['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('CustomerController@destroy', $customer['id'])}}" method="post">
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