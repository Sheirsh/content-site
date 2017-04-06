<?php
try
{
$pdo=new PDO('mysql:host=localhost;dbname=site','ss','trickster');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');
}
catch(PDOException $e)
{
	$output='server is not online';
	include 'error.html.php';
	exit();	
}
try
{
$sql = 'SELECT articletext FROM article';
$result = $pdo->query($sql);
}
catch (PDOException $e)
{
$output = 'Error fetching article: ' . $e->getMessage();
include 'error.html.php';
exit();
}
while($article=$result->fetch())
{
	$art[]=$article['articletext'];
}
try
{
$sql = 'SELECT heading FROM article';
$result = $pdo->query($sql);
}
catch (PDOException $e)
{
$output = 'Error fetching article: ' . $e->getMessage();
include 'home.html.php';
exit();
}
while($heading=$result->fetch())
{
	$head[]=$heading['heading'];
}
include 'home.html.php';
?>