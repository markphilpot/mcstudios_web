<?php

require_once('include/config.php');

function getDB()
{
  $db = new PDO("mysql:host=$host;dbname=$database", $user);
   
  return $db;
}

// Map from descriptive names to Wordpress post IDs
function translate($page)
{
   $var = 115;
   
   if($page == "index")
      $var = 115;
   elseif($page == "photography")
      $var = 117;
   elseif($page == "equipment")
      $var = 118;
   elseif($page == "design")
      $var = 119;
   elseif($page == "my_sites")
      $var = 120;
   elseif($page == "publications")
      $var = 121;
   elseif($page == "collections")
      $var = 125;
   elseif($page == "music")
      $var = 126;
   elseif($page == "movies")
      $var = 127;
   elseif($page == "about")
      $var = 122;
   elseif($page == "resume")
      $var = 123;
   elseif($page == "contact")
      $var = 124;

   
   return $var;
}

?>
