<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trashed Car List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Trashed List</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>title</th>
        <th>price</th>
        <th>content</th>
        <th>image</th>
        <th>Restore</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach($place as $place) 
      <tr>
        <td>{{ $place->title }}</td>
        <td>{{ $place->price }}</td>
        <td>{{ $place->content }}</td>
        <td>{{ $place->image }}</td>
        <td><a href="restore/{{ $place->id }}">Restore</a></td>
        <td><a href="delete/{{ $place->id }}">Delete</a></td>
      </tr>
     @endforeach 
    </tbody>
  </table>
</div>

</body>
</html>
