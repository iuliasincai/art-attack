<!-- <?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db_name = substr($url["path"], 1);
  $db = new mysqli($server, $username, $password, $db_name);
?> -->

<?php
   define('DB_SERVER', 'mysql://bc02618683702b:b5a58968@eu-cdbr-west-02.cleardb.net/heroku_c25aa04300f0c23?reconnect=true');
   define('DB_USERNAME', 'bc02618683702b');
   define('DB_PASSWORD', 'b5a58968');
   define('DB_DATABASE', 'heroku_c25aa04300f0c23');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>

<!-- <?php
   define('DB_SERVER', 'localhost:3306');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'art-attack-db');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?> -->
