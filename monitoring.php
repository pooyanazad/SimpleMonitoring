<!DOCTYPE html>
<html>
<!-- css / going center and cahnge bg color -->
<body style="background-color:powderblue;">
 <meta http-equiv="refresh" content="15">

<center>
<h1>Server performance monitoring</h1>
<?php
#php code to run shell script
$output = shell_exec('./bash_script.sh|boxes -d simple');
echo "<td align=centre><pre>$output</pre>";

?>

</center>
</body>
</html>


