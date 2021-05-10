<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    query();
    function query()
    {
        // header('Location: ../index.php?fecha=' . $_REQUEST['fecha']);
    }

    ?>
    <input type="hidden" id="query" value="<?php echo $_REQUEST['fecha']?>"></input>
    <script src="../jquery-3.6.0.min.js"></script>

    <script>
        llamar();

        function llamar() {
            var dato = $('#query').val;
            $.ajax({
                method: "post",
                url: "../index.php",
                data: {
                    query: "2021-05-17"
                }
            }).done(function(msg) {
                alert(msg);
                window.location = "../index.php";
            });
        }
    </script>
</body>

</html>