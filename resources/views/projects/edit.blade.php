<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editar</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Editar Projecto</h2><br  />
        <form method="post" action="{{action('ProjectController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
          
          <label for="Title">Título:</label>
          <input type="text" class="form-control" name="title" value="{{$project->title}}"><br> 

          <label for="Duration">Duración:</label>
          <input type="text" class="form-control" name="duration" value="{{$project->duration}}"><br>

          <label for="Start_date">Fecha de Inicio:</label>    
          <input type="date" name="start_date" id="StartDate" value="{{$project->start_date}}"><br>

          <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          
      </form>
    </div>
  </body>
</html>