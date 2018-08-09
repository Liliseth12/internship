<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editar</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Editar Departamento</h2><br  />
        <form method="post" action="{{action('DepartmentController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
          
          <label for="department_name">Nombre:</label>
          <input type="text" class="form-control" name="department_name" value="{{$department->department_name}}"><br>

          <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          
      </form>
    </div>
  </body>
</html>