<?php

$loc = $_REQUEST["loc"];

if($loc == "photography")
{
  echo "<a id='gallery_link' href='http://www.flickr.com/photos/markphilpot'>gallery</a> &alefsym; <a id='photography_equip_link' href='#'>equipment</a>";
}
else if($loc == "design")
{
  echo "<a id='sites_link' href='#'>sites</a> &alefsym; <a id='publications_link' href='#'>publications</a>";
}
else if($loc == "studio")
{
  echo "<a id='music_link' href=''>music</a> &alefsym; <a id='studio_equip_link' href='#'>equipment</a>";
}
else if($loc == "about")
{
  echo "<a id='resume_link' href='#'>resume</a> &alefsym; <a id='blog_link' href='http://blog.mcstudios.net'>blog</a> &alefsym; <a id='lifestream_link' href='http://www.markphilpot.net'>lifestream</a> &alefsym; <a id='contact_link' href='#'>contact</a>";
}

?> 
