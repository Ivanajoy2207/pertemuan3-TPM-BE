<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create FastFood</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="w-80 d-flex justify-content-center">
        <form action="{{route('fastfood.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="Menu" class="form-label">Menu</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Menu">
            </div>
            <div class="mb-3">
                <label for="">Size</label><br>
                <input type="radio" id="Small" name="Size" value="Small">
                <label for="Small">Small</label><br>
                <input type="radio" id="Medium" name="Size" value="Medium">
                <label for="Medium">Medium</label><br>
                <input type="radio" id="Large" name="Size" value="Large">
                <label for="Large">Large</label>
            </div>
            <div class="mb-3">
                <label for="Harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Harga">
            </div>
            <div class="mb-3">
                <label for="Image" class="form-label">Fastfood Image</label>
                <input type="file" class="form-control" id="Image" aria-describedby="emailHelp" name="Image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>