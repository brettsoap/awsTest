<?php


if (isset($_GET['info']) && $_GET['info'] == "robbie") {
        phpinfo();
} else {
    echo '
    <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Centos deployment</title>
  <style>
    body {
      color: #000000;
      background-color: brown;
      font-family: Arial, sans-serif;
      font-size: 14px;
    }

    h1 {
      font-size: 500%;
      font-weight: normal;
      margin-bottom: 0;
    }

    h2 {
      font-size: 200%;
      font-weight: normal;
      margin-bottom: 0;
    }
  </style>
</head>
<body>
  <div align="center">
    <h1>Updates</h1>
    trying to get env vars working
    <br/>
    my var should be : '.getenv('MYPARAM').'
    <br/>

    '.phpinfo().'
  </div>
</body>
</html>
';
}

?>
