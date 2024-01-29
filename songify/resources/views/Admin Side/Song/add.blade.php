
<!DOCTYPE html>
<html lang="en">
<head>
  <title>::Add Songs::</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>|Add New Song|</h2>
  <form action="/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="text">Song Name:</label>
      <input type="text" class="form-control" placeholder="Enter Song Name" name="songname">
    </div>
    <div class="form-group">
        <label for="text">Song Path:</label>
        <input type="file" class="form-control" placeholder="Enter Song Path" name="songpath">
    </div>
      <div class="form-group">
        <label for="text">Song Duration:</label>
        <input type="text" class="form-control" placeholder="Enter Song Duration" name="duration">
      </div>
      <div class="form-group">
        <label for="text">Realese Date:</label>
        <input type="date" class="form-control" name="realesedate">
      </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>

</body>
</html>
