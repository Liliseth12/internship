<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editar </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Editar Cliente</h2><br  />
        <form method="post" action="{{action('CustomerController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
          
          <label for="first_name">Nombre:</label>
          <input type="text" class="form-control" name="first_name" value="{{$customer->first_name}}"><br> 

          <label for="last_name">Apellido:</label>
          <input type="text" class="form-control" name="last_name" value="{{$customer->last_name}}"><br>

          <label for="email">E-mail:</label>
          <input type="text" class="form-control" name="email" value="{{$customer->email}}"><br>

          <label for="is_coor">Coordinador</label>    
          <input type="checkbox" name="is_coor" value="true"><br>

          <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          
      </form>
    </div>
  </body>
</html>