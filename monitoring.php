<!DOCTYPE html>
<html>
<body style="background-color:powderblue;">
 <meta http-equiv="refresh" content="15">

<center>
<h1>Server performance monitoring</h1>
<?php

$output = shell_exec('./bash_script.sh|boxes -d simple');
echo "<td align=centre><pre>$output</pre>";

?>

</center>
</body>
</html>


