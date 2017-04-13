<?php
/*
  _    _        _____ _____             _    
 | |  | |      / ____|  __ \           | |   
 | |  | |_ __ | |  __| |__) |__ _ _ __ | | __
 | |  | | '_ \| | |_ |  _  // _` | '_ \| |/ /
 | |__| | |_) | |__| | | \ \ (_| | | | |   < 
  \____/| .__/ \_____|_|  \_\__,_|_| |_|_|\_\
        | |     Hadi Abedzadeh                              
        |_|                                 
*/

 echo "\n
  _    _        _____ _____             _    
 | |  | |      / ____|  __ \           | |   
 | |  | |_ __ | |  __| |__) |__ _ _ __ | | __
 | |  | | '_ \| | |_ |  _  // _` | '_ \| |/ /
 | |__| | |_) | |__| | | \ \ (_| | | | |   < 
  \____/| .__/ \_____|_|  \_\__,_|_| |_|_|\_\
        | |     Hadi Abedzadeh                              
        |_|     
 +-------------------------------------------------------------------+\n\n";

set_time_limit(0);
if (isset($argv[1], $argv[2], $argv[3])) {
  $proxies = array();
  $proxies = FILE($argv[3]);
  for ($x = 1; $x = -1; $x++) {
    if (isset($proxies)) {
      $proxy = $proxies[array_rand($proxies)];
    }
    $ch = curl_init();
    if (isset($proxy)) {
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    }
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_COOKIESESSION, TRUE);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_URL, "https://www.google.com/search?q=" . $argv[1] . "+" . $argv[2]);
    $results = curl_exec($ch);
    curl_close($ch);
    echo "*";
  }
  
  if ($argv['1'] == 'JUSTWORD') {
    for ($x = 1; $x = -1; $x++) {
      if (isset($proxies)) {
        $proxy = $proxies[array_rand($proxies)];
      }
      $ch = curl_init();
      if (isset($proxy)) {
        curl_setopt($ch, CURLOPT_PROXY, $proxy);
      }
      curl_setopt($ch, CURLOPT_HEADER, FALSE);
      curl_setopt($ch, CURLOPT_COOKIESESSION, TRUE);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
      curl_setopt($ch, CURLOPT_URL, "https://www.google.com/search?q=" . $argv[2]);
      $results = curl_exec($ch);
      curl_close($ch);
      echo "*";
    }
  }
 } else {
  echo "\t Example:";
  echo "\n\t\t UpGRank.php [URL] [WORD] [proxyFile]";
  echo "\n\t\t UpGRank.php JUSTWORD [WORD] [proxyFile]\n";
}
?>
