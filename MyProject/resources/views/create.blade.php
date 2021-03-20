<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud & Birr</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="form-container">
        <h2>Add a new Beer</h2>
        <form action="{{route('beers.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="form-group">
            <label for="input-Brand">Brand</label>
            <input type="text" class="form-control" id="input-Brand" placeholder="Enter brand" name="brand">
            </div>
            <div class="form-group">
                <label for="input-country">Country</label>
                <input type="text" class="form-control" id="input-country" placeholder="Enter country" name="country">
            </div>
            <div class="form-group">
                <label for="input-price">Price</label>
                <input type="text" class="form-control" id="input-price" placeholder="Enter price" name="price">
            </div>
            <div class="form-group">
                <label for="input-image">Image</label>
                <input type="text" class="form-control" id="input-image" placeholder="Enter image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
