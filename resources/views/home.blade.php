<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pyae Phyo Thant</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
        crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            
            <div class="card-body">
                
                <div class="card-title" style="float:left;"><b>To Do App</b></div>
                <div><a href="new" class="btn btn-primary" style="float:right;">New</a></div>
                <br>
                <br>
                <hr>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>title</th>
                            <th>description</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $value)
                            <tr>
                                <td>{{$value->id}}</td>
                                <td>{{$value->title}}</td>
                                <td>{{$value->description}}</td>
                                <td>
                                    <a href="/edit" class="btn btn-success">Edit</a>
                                    <a href="/delete" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>