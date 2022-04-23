<!DOCTYPE html>
<html>
<!–– CSS background and button configuration ––>
<body style="background-color:powderblue;">
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 12px;
  margin: 4px 2px;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  cursor: pointer;
}
</style>
<!–– button action v
<center>
<h1>Click here to see monitoring dashboard</h1>
<button type="button" class="button" onclick="window.location.href = 'http://<?php echo $_SERVER['HTTP_HOST']; ?>/monitoring.php';">Click Me!</button>
</center>


</body>

</html>
