    <title>File Edit</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">

      <div class="row">
                <div class="col-md-12">
      <?php include('menu.php'); ?>
      <div class="jumbotron">

<?php

if(isset($_POST['field1']) && isset($_POST['field2'])) {
    $data = $_POST['field1'] . '-' . $_POST['field2'] . "\n";
    $ret = file_put_contents('/var/log/demo-dr/fichero-demo-dr.txt', $data, FILE_APPEND | LOCK_EX);
    $permisos = substr(sprintf('%o', fileperms('/var/log/demo-dr/fichero-demo-dr.txt')), -4);
    if($permisos == '0644') {
      chmod('/var/log/demo-dr/fichero-demo-dr.txt', 0666);
    }
    if($ret === false) {
        die('There was an error writing this file');
    }
}
else {
   die('no post data to process');
}

   $fh = fopen("/var/log/demo-dr/fichero-demo-dr.txt", 'r');

    $pageText = fread($fh, 25000);

    echo nl2br($pageText);
?>
    </p>
    <p>
    </p>
  </div>
</div>
</div>
</div>

