<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cURL</title>
</head>

<body>
    <?php
    // $fields = array('field1' => 'valor1', 'field2' => urlencode('valor 2'));
    $fields = array('id' => 290);
    // $fields_string = http_build_query($fields);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://212.142.193.210:16001/mikels/proyecto/update_estado.php");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_HEAD, $fields);
    $data = curl_exec($ch);
    echo gettype($data);
    echo $data;
    print_r(json_decode($data));
    curl_close($ch);
    ?>

</body>

</html>