<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agregar</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>

  <body>
    <div class="container">
      <h2>Agregar Projecto</h2><br/>
      <form method="post" action="{{url('projects')}}" enctype="multipart/form-data">
        @csrf
        
            <label for="Title">Título:</label>
            <input type="text" class="form-control" name="title"><br> 

            <label for="Duration">Duración:</label>
            <input type="text" class="form-control" name="duration"><br> 

             <label for="Start_date">Fecha de Inicio:</label>
            <input type="date" class="form-control" id="StartDate" name="start_date"><br> 

            <button type="submit" class="btn btn-success">Submit</button>
         
      </form>
    </div>
    <script type="text/javascript">
      document.getElementById("StartDate").valueAsDate = new Date();
    </script>
  </body>
</html>