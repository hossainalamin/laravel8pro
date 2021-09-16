<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        @if(Session::has('update-msg'))
                        <div class="alert alert-success">
                            {{Session::get('update-msg')}}
                        </div>
                        @endif
                        <div class="card-header">
                            Post edit
                        </div>
                        <div class="card-body">
                            <form action="{{route('product.submit')}}" method="POST">
                                @csrf
                                <input type="hidden" value="{{$product_update->id}}" name="id">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{$product_update->product_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" class="form-control" value="{{$product_update->price}}">
                                </div>
                                <div class="form-group">
                                    <label for="body">Detail</label>
                                    <textarea name="detail"  cols="30" rows="10" class="form-control">{{$product_update->detail}}</textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success form-control mt-2" value="Update">
                                    <a href="/product" class="btn btn-danger mt-2">Home</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>