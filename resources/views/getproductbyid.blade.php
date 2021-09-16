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
                        <div class="card-header">
                            Product detail
                        </div>
                        <div class="card-body">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{$prod_by_id->product_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="title">Price</label>
                                    <input type="text" name="price" class="form-control" value="{{$prod_by_id->price}}">
                                </div>
                                <div class="form-group">
                                    <label for="body">Description</label>
                                    <textarea name="detail" id="" cols="30" rows="10" class="form-control">{{$prod_by_id->detail}}</textarea>
                                </div>
                                <a href="/product"class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>