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
<body><br><br>
    <div class="container">
        <div class="card"><br>

            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card-title" style="float:left;"><b>To Do App</b></div>
                <div><a href="/" class="btn btn-primary" style="float:right;">Back</a></div>

                <br>
                <br>
                <hr>
                <form action="/update{{$data->id}}" method="post">
                    @csrf
                    @csrf('PATCH')
                    <!-- patch is a function to show methiod is edit method one. -->
                    <div class="form-group">
                        <label for="title">title</label>
                        <input type="text" name="title" class="form-control" value="{{$data->title}}">
                    </div> <br>
                    <div class="form-group">
                        <label for="description">description</label>
                        <input type="text" name="description" class="form-control" value="{{$data->description}}">
                    </div> <br>
                    <div>
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
