
<?php
 $path = storage_path();
 ?>
<head>
  <title>View Uploaded Files</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Uploaded Files</h2>
    
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>File Name</th>
        <th>Project Name</th>
        <th>Project Lead Name</th>
        <th>File Description</th>
        <th>Share Type</th>
      </tr>
    </thead>
    <tbody>
      @foreach($request_data as $row)
                <tr> 
                    <td><a href="{{ storage_path('app/uploads/').$row->ID }}">{{$row->ID}}</a></td>
                    <td>{{$row->File_Name}}</td>
                    <td>{{$row->Project_Name}}</td>
                    <td>{{$row->Project_Lead_Name}}</td>
                    <td>{{$row->File_Description}}</td>
                    <td>{{$row->Share_Type}}</td>
                </tr>
            @endforeach
    </tbody>
  </table>
</div>

</body>

