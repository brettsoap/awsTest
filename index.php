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
      color: #ffffff;
      background-color: orange;
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
    <h1>CENTOS 4!</h1>
    <h2>1 This application was deployed using AWS CodeDeploy.</h2>
    <p>For next steps, read the <a href="http://aws.amazon.com/documentation/codedeploy">AWS CodeDeploy Documentation</a>.</p>
    '.phpinfo().'
  </div>
</body>
</html>
';
}

?>