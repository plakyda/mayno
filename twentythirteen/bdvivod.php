<div class="table21">
<?php
$connection = mysql_connect ('localhost','root','232581');
$db = mysql_select_db("wp_maino");
mysql_query("SET NAMES 'UTF-8w/o BOM' ;");
if(!$connection || !$db){
exit(mysql_error());
}

$result = mysql_query("select * from NameObjekt;");
if($result)
{
// Определяем таблицу и заголовок
 
 
 
echo "<table border =1 >";

 
// Так как запрос возвращает несколько строк, применяем цикл
while($row = mysql_fetch_array($result))
{
	echo " <tr><th rowspan=2>Лі-чиль-ник</th>
		<th rowspan=2 >Назва Об'єкт</th>
		<th colspan=4>Місцезнаходження</th>
	  <th colspan=5>Балансоутрімувач</th>
	  <th rowspan=2 >Відомості про об'єкт</th>
	  <th rowspan=2 >До складу об'єкту входить</th>
	  <th rowspan=2 > Рік ведення в експлуатацію</th>
	<th rowspan=2>Початкова ціна об'єкта без ПДВ</th>
	<th rowspan=2 id=one>Умова продажу об'єктів</th> 
  <tr><th>Область</th><th>смт</th><th>вул</th><th>буд</th><th>КП</th><th>код за ЄДРПОУ</th>
  <th>місто</th><th>вул</th><th>буд</th></tr>"  ;
echo "<tr><td valign=top>".$row['id']."&nbsp </td>
<td valign=top>".$row['nazvanie']."&nbsp;</td>
<td valign=top>".$row['oblast']." &nbsp </td>
<td valign=top>".$row['smt']."&nbsp;</td>
<td valign=top>".$row['vyl']."&nbsp;</td>
<td valign=top>".$row['byd']."&nbsp;</td>
<td valign=top>".$row['KP']."&nbsp;</td>
<td valign=top>".$row['kod']."&nbsp;</td>
<td valign=top>".$row['misto']."&nbsp;</td>
<td valign=top>".$row['vylica']."&nbsp;</td>
<td valign=top >".$row['bydin']."&nbsp;</td>
<td valign=top  >".$row['vidomosti']."&nbsp;</td>
<td valign=top  >".$row['sostav']."&nbsp;</td>
<td valign=top>".$row['rik']."&nbsp;</td>
<td valign=top>".$row['cina']."&nbsp;</td>
<td valign=top id=one>".$row['ymova']."&nbsp;</td>
  
 </tr>";
}
echo "</table>";
}
 

?>
</div>