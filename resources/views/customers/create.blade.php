<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agregar</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>

  <body>
    <div class="container">
      <h2>Agregar Cliente</h2><br/>
      <form method="post" action="{{url('customers')}}" enctype="multipart/form-data">
        @csrf
        
            <label for="first_name">Nombre:</label>
            <input type="text" class="form-control" name="first_name"><br> 

            <label for="last_name">Apellido:</label>
            <input type="text" class="form-control" name="last_name"><br>

            <label for="email">E-mail:</label>
            <input type="text" class="form-control" name="email"><br>

            <label for="is_coor">Coordinador</label>    
            <input type="checkbox" name="is_coor" value="true"><br>

            <button type="submit" class="btn btn-success">Submit</button>
         
      </form>
    </div>

  </body>
</html>