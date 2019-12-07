<?php
$files = scandir('items/furf/');
foreach($files as $file) {
  if($file == '.' || $file == ".."){ continue; }
  print("<img src='items/furf/$file' class='itemselector2 item_img2' onclick='SetFurfImage(&quot;$file&quot;);'>".PHP_EOL);
}
?>