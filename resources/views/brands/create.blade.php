
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agregar</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Agregar Marca</h2><br/>
      <form method="post" action="{{url('brands')}}" enctype="multipart/form-data">
        @csrf
        
            <label for="Name">Nombre:</label>
            <input type="text" class="form-control" name="name">
            <br>
            <button type="submit" class="btn btn-success">Submit</button>
         
      </form>
    </div>
    
  </body>
</html>