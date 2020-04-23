<?php

$websiteURL = 'http://fridge-o-matic.com/';
$authors = array( 'Adam','Mary','Evan');
$nav_items = array('Home Page');
$urls = array('home.php');


/**
 * Displays site name.
 */

function site_name()
{
    echo config('name');
}

/**
 * Displays site url provided in conig.
 */

function site_url()
{
    echo config('site_url');
}

/**
 * Displays site version.
 */
function site_version()
{
    echo config('version');
}
function head(){
  $head = '<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link href="/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Required PHP Functions -->

    <title>Team Alpha</title>
  </head>';
  echo $head;
}

/**
 * Website navigation.
 */
function nav_menu($sep = ' | ')
{
    $nav_menu = '';
    $nav_items = config('nav_menu');
    foreach ($nav_items as $uri => $name) {
        $class = str_replace('page=', '', $_SERVER['QUERY_STRING']) == $uri ? ' active' : '';
        $url = config('site_url') . '/' . (config('pretty_uri') || $uri == '' ? '' : '?page=') . $uri;
        $nav_menu .= '<a href="' . $url . '" title="' . $name . '" class="item ' . $class . '">' . $name . '</a>' . $sep;
    }
    echo trim($nav_menu, $sep);
}

/**
 * Displays page title. It takes the data from
 * URL, it replaces the hyphens with spaces and
 * it capitalizes the words.
 */
function page_title()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'Home';
    echo ucwords(str_replace('-', ' ', $page));
}

/**
 * Displays page content. It takes the data from
 * the static pages inside the pages/ directory.
 * When not found, display the 404 error page.
 */
function page_content()
{

    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $path = getcwd() . '/' . config('Content_path') . '/' . $page . '.php';
    if (! file_exists($path)) {
        $path = getcwd() . '/' . config('Content_path') . '/404.php';
    }
  echo ($path);
  echo file_get_contents($path);
}

/**
 * Starts everything and displays the template.
 */

 /*
 function init()
 {
     require config('template_path') . '/template.php';
 }*/

 /*put the footer here! */

 /* <?php x = gettimeofday() ?> */
/*!!!!! YO this is to log into the SQl Data base */
/** The name of the database for phpcalles */
define('DB_NAME', 'kbzersix_YoshuFridge');

/** MySQL database username */
define('DB_USER', 'kbzersix_System');

/** MySQL database password */
define('DB_PASSWORD', 'H$3^*#YjeR.W');

/** MySQL hostname */
define('DB_HOST', 'localhost');
//$dbh=mysql_connect ("localhost", "cpUsername_dbUsername", "H$3^*#YjeR.W") <- not sure about this
//or die ('I cannot connect to the database.');
//mysql_select_db ("cpUsername_dbName")

//mary added
//probably doing this all wrong
$servername = "kbzersix_YoshuFridge";
$username= "kbzersix_System";
$password = "H$3^*#YjeR.W";
//local host?

$portnumber = 21
//trying to create connection i think
$conn = new mysqli($servername, $username, $password);

//checking the connection *shrugs*
if ($conn -> connect_error) {
    die("Mary was bad:". $conn->connect_error);
}
echo "Connected sucessfully";


?>
