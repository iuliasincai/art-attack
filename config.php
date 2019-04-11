<?php
//Get Heroku ClearDB connection information
$cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server   = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db       = substr($cleardb_url["path"],1);


$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'    => '',
    'hostname' => $cleardb_server,
    'username' => $cleardb_username,
    'password' => $cleardb_password,
    'database' => $cleardb_db,
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
$db = mysqli_connect($cleardb_server, $cleardb_username,$cleardb_password,$cleardb_db);
?>

<!-- <?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db_name = substr($url["path"], 1);
  $db = new mysqli($server, $username, $password, $db_name);
?> -->

<!-- <?php
   define('DB_SERVER', 'mysql://bc02618683702b:b5a58968@eu-cdbr-west-02.cleardb.net/heroku_c25aa04300f0c23?reconnect=true');
   define('DB_USERNAME', 'bc02618683702b');
   define('DB_PASSWORD', 'b5a58968');
   define('DB_DATABASE', 'heroku_c25aa04300f0c23');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?> -->

<!-- <?php
   define('DB_SERVER', 'localhost:3306');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'art-attack-db');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?> -->
