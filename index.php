<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    </head>
    <body>
    <div class="container">
        <h2>Single loader</h2>
        <form action="core/singleload.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="image" class="form-label">Loade image</label>
                <input type="file" name="image" class="form-control" id="image">
            </div>
            <button type="submit" class="btn btn-primary">Load</button>
        </form>

        <h2>Multy loader</h2>
        <form action="core/multyload.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Loade images</label>
                <input type="file" name="images[]" class="form-control" multiple>
            </div>
            <button type="submit" class="btn btn-primary">Load files</button>
        </form>
    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>