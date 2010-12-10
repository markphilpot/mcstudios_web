<?php

require_once('../include/database.php');

function escape_html($text)
{
   $tmp = str_replace('<br />', ' ', $text[1]);
   $tmp = str_replace('<br>', ' ', $tmp);
   return html_entity_decode($tmp);
}

try
{
  $db = getDB();
  
  $loc = $_REQUEST['loc'];

  $query = "select * from wp_posts where id = :id";
  
  $statement = $db->prepare($query);
  
  $id = translate($loc);
  
  $statement->bindParam(":id", $id, PDO::PARAM_INT);
  
  $statement->execute();
  
  $result = $statement->fetchAll();
  
  foreach($result as $row) // Will only be one
  {
    $tmp = $row['post_content'];
    $tmp = preg_replace_callback("/(&lt;\?php.*&gt;)/",'escape_html', $tmp);

    eval('?>'.$tmp);
  }
  
  $db = null;
}
catch(PDOException $e)
{
  // Fix later
  print "<h3>This is a test of the emergency broadcast system. This is only a test</h3>";
  die();
}

?>
