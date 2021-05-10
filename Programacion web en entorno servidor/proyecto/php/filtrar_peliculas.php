
<?php

function query()
{
    include('conexion.php');
    $result =  $conn->query('SELECT * FROM pelicula WHERE estado="A"');
    return $result;
}
?>
<input type="hidden" id="query" value="<?php query(); ?>"></input>
<script src="../jquery-3.6.0.min.js">
    llamar();

    function llamar() {
        $.ajax({
            method: "POST",
            url: "../index.php",
            data: {
                query: $('#query').val
            }
        }).done(function(msg) {
            alert(msg);
            window.location = "index.php";
        });
    }
</script>