<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> All POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    @if(Session::has('delete-msg'))
                    <div class="alert alert-success">
                        {{Session::get('delete-msg')}}
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                            <th>Tilte</th>
                            <th>Description</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->body}}</td>
                                    <td><a href="/post/{{$post->id}}" class="btn btn-success">View</a></td>
                                    <td><a href="/edit/{{$post->id}}" class="btn btn-success">Update</a></td>
                                    <td><a href="/delete/{{$post->id}}" class="btn btn-danger">Delete</a></td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                <a href="/addpost" class="btn btn-danger">Add blog</a>
                </div>
                {{$posts->links()}}
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>