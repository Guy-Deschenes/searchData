<h1>hello world!</h1>

<p>
<?
$id = $_GET["id"];

$con = mysql_connect("localhost","root","dani");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


mysql_query("USE kk", $con);

$q = mysql_query("select * from users where user_name like '%" . 
$id . "%'");

while ($row = mysql_fetch_array($q, MYSQL_ASSOC)) {
  echo "<li>" .  $row["user_name"] . "</li>";
}


// some code

$var = "esto es una variable texto ";
$n = 23 + $id;
echo ($var . $n);

?>
</p>

<? if (true) { ?>

<form action="index.php" method="get">
Mete el ID neno <input type="text" name="id"></input>
<button type="submit">Ok</button>
<button type="cancel">Cancel</button>

   <? } ?>
</form>

