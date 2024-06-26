<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_Server</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body style="padding-left: 20px;">
    version of PHP :
    <?php echo phpversion(); ?>
    <div class="container">
        <h1 class="display-4">Super Gloable-$_SERVER</h1>

        <table class="table table-striped">
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
            <?php foreach ($_SERVER as $key => $value) : ?>
                <tr>



                    <td>
                        <?php echo $key; ?>
                    </td>

                    <td>
                        <?php echo $value; ?>
                    </td>


                </tr>

            <?php endforeach; ?>

        </table>
    </div>

</body>

</html>