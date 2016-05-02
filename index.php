<?php
// Echoes all http headers
echo "<html><head></head><body>";
echo "<h1><center>Http-Header Displaytool</center></h1><hr>";
echo "<br>";
try {
    foreach (getallheaders() as $name => $value) {
        echo $name . " : " . $value . "<br>";
    }
}catch(Exception $e)
{
    echo "Couldn't getallheaders()" . $e->getMessage();
}
echo "</body></html>\"";
?>