<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_REQUEST['nombre']) and isset($_REQUEST['suministrador']) and isset($_REQUEST['precio']) and isset($_REQUEST['descripcion']) and isset($_REQUEST['link'])) {
        $nombre = $_REQUEST['nombre'];
        $sumin = $_REQUEST['suministrador'];
        $precio = $_REQUEST['precio'];
        $desc = $_REQUEST['descripcion'];
        $link = $_REQUEST['link'];


        // $fields = array('field1' => 'valor1', 'field2' => urlencode('valor 2'));
        $data = array(
            'fields' => array(
                'nombre' => $nombre,
                'suministrador' => $sumin,
                'precio' => $precio,
                'descripcion' => $desc,
                'link' => $link
            )
        );
        $json_data = json_encode($data);
        // print_r($json_data);
        // $fields_string = http_build_query($fields);
        $ch = curl_init("https://api.airtable.com/v0/appEgZovGBAS2YawY/productos?api_key=keyFJPVahyGYUscdR");
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: Bearer keyFJPVahyGYUscdR", "Content-Type: application/json"));
        curl_exec($ch);
        // print_r();
        // header('Location: index.php?add=' . curl_exec($ch));
        // echo gettype($data);echo "<br>";
        // print_r(json_decode($data));echo "<br>";
        // curl_close($ch);
    } else {
        header('Location: index.php?error=1');
    }
}
