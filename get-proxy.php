<?php
/*								 					   			    
*  _____                      _____           _     _               
* |  __ \                    / ____|         | |   | |              
* | |__) | __ _____  ___   _| |  __ _ __ __ _| |__ | |__   ___ _ __ 
* |  ___/ '__/ _ \ \/ / | | | | |_ | '__/ _` | '_ \| '_ \ / _ \ '__|
* | |   | | | (_) >  <| |_| | |__| | | | (_| | |_) | |_) |  __/ |   
* |_|   |_|  \___/_/\_\\__, |\_____|_|  \__,_|_.__/|_.__/ \___|_|   
*                       __/ | Hadi Abedzadeh                        
*                      |___/                                        
*                                     						 	 	
* Open this file on web browser                                     
*/
error_reporting(0);
require_once('PHP_Simple_HTML_DOM.php');
$page01 = file_get_html("https://proxy-list.org/english/index.php?p=1");
$page02 = file_get_html("https://proxy-list.org/english/index.php?p=2");
$page03 = file_get_html("https://proxy-list.org/english/index.php?p=3");
$page04 = file_get_html("https://proxy-list.org/english/index.php?p=4");
$page05 = file_get_html("https://proxy-list.org/english/index.php?p=5");
$page06 = file_get_html("https://proxy-list.org/english/index.php?p=6");
$page07 = file_get_html("https://proxy-list.org/english/index.php?p=7");
$page08 = file_get_html("https://proxy-list.org/english/index.php?p=8");
$page09 = file_get_html("https://proxy-list.org/english/index.php?p=9");
$a = array($page01, $page02, $page03, $page04, $page05, $page06, $page07, $page08, $page09);
file_put_contents("getproxy.txt",$a);
$r = file_get_html('getproxy.txt');
foreach ($r->find('li[class=proxy] <script type="text/javascript">') as $html) {
    $a = (explode("'", $html));
    $a = base64_decode($a[1]);
    $a = $a . "\n";
    file_put_contents('checked.txt', $a, FILE_APPEND);
    unlink("getproxy.txt");
    }
?>
