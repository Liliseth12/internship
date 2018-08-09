<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editar</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Editar Ciudad</h2><br  />
        <form method="post" action="{{action('CountryController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        
          <label for="name">Nombre:</label>
          <input type="text" class="form-control" name="name" value="{{$country->name}}">
          <br>
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          
      </form>
    </div>
  </body>
</html>