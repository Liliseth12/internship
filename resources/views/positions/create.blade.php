<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agregar</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>

  <body>
    <div class="container">
      <h2>Agregar Cargo</h2><br/>
      <form method="post" action="{{url('positions')}}" enctype="multipart/form-data">
        @csrf
        
            <label for="PositionName">Nombre:</label>
            <input type="text" class="form-control" name="position_name"><br> 
            <button type="submit" class="btn btn-success">Submit</button>

      </form>
    </div>

  </body>
</html>