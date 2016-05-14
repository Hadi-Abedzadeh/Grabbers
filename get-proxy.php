<?php
/**                                                                  
 *  _____                      _____           _     _               
 * |  __ \                    / ____|         | |   | |              
 * | |__) | __ _____  ___   _| |  __ _ __ __ _| |__ | |__   ___ _ __ 
 * |  ___/ '__/ _ \ \/ / | | | | |_ | '__/ _` | '_ \| '_ \ / _ \ '__|
 * | |   | | | (_) >  <| |_| | |__| | | | (_| | |_) | |_) |  __/ |   
 * |_|   |_|  \___/_/\_\\__, |\_____|_|  \__,_|_.__/|_.__/ \___|_|   
 *                       __/ | Written by Hadi Abedzadeh             
 *                      |___/                                        
 *                                                                   
 * Open this file on web browser or console                          
 */
// Modifications by DRS David Soft <David@Refoua.me>
set_time_limit(0);
error_reporting(0);
chdir(dirname(__FILE__));
header("Content-Type: text/plain");
require_once('PHP_Simple_HTML_DOM.php');
$path = "https://proxy-list.org/english/index.php";
$splitter = 'li[class=proxy] <script type="text/javascript">';
for ($i = 1; $i <10; $i++)
foreach (file_get_html($path."?p=$i")->find($splitter) as $html) {
	$info = explode("'", $html);
	$info = base64_decode($info[1]) . "\n"; echo $info; flush();
	file_put_contents('checked.txt', $info, FILE_APPEND | LOCK_EX);
	}
?>
