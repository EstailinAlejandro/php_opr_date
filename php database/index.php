<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=telefoons",
                        "root","");
    $query= $db->prepare("SELECT * FROM telefoons");
    $query->execute();
    $result =$query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as &$data) {
        echo $data['']
    }

}





catch (PDOException $e) {
    die("Error!:". $e->getMessage());
}




?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
