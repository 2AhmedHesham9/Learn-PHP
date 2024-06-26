<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET & $_POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">

        <div class="row">

            <div class="col">
                <h3 class="display-4">Enter a Word</h3>
                <hr>
                <form action="process.php" method="get">
                    <div class="form-group">
                        <label for="word">Word</label>
                        <input type="text" name="word" id="word" class="form-control">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" value="submit">Check the lenth of Word</button>
                </form>


            </div>
        </div>

    </div>
</body>

</html>