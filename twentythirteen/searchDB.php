<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0 
* Template Name: search_newspaper_wp
*/ 
define('WP_USE_THEMES', false);
require( $_SERVER['DOCUMENT_ROOT'] .'/wp-config.php');
header('Content-Type: text/html; charset=utf-8', true);
get_header();
?>
<div class = "search">
<H2>Результат поиска</H2>
<?php

if(isset($_POST["button_search"])&& (!empty($_POST["words"]))){
$words = htmlspecialchars($_POST["words"]);
	$results = searchMaino($words);
	if(count($results) != 0){
		
		for($i = 0; $i < count($results); $i++)
		{
			
			$id = $results[$i]["id"];
			$nazvanie = $results[$i]["nazvanie"];
			$oblast = $results[$i]["oblast"];
			$smt = $results[$i]["smt"];
			$vyl = $results[$i]["vyl"];
			$byd = $results[$i]["byd"];
			$KP = $results[$i]["KP"];
			$misto = $results[$i]["misto"];
			$vylica = $results[$i]["vylica"];
			$bydin = $results[$i]["bydin"];
			$vidomosti = $results[$i]["vidomosti"];
			$sostav = $results[$i]["sostav"];
			$rik = $results[$i]["rik"];
			$cina = $results[$i]["cina"];
			$ymova = $results[$i]["ymova"];
			 
		}
	}
	
}
?>

<?php

function searchMaino($words){
	$query_search="";
	$arraywords = explode(" ", $words);
 foreach($arraywords as $key => $value){
		if(isset($arraywords[$key - 1]))$query_search .= " AND";
		$query_search .="(`nazvanie` LIKE '%$value%' OR `oblast` LIKE '%$value%')";
	}
	
	;
		global $wpdb;
	
		$result_set = $wpdb->get_results( "SELECT * FROM `NameObjekt` WHERE $query_search");
		echo "<table border = 1    >";
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
			foreach ( $result_set as $result ) {
				
			echo ' <tr><td>'
			. $result->id . 
			'&nbsp</td><td>'
			. $result->nazvanie .
			'&nbsp</td><td>'
			. $result->oblast .
			'</td> <td >'
			. $result->smt .'
			</td> <td >'
			. $result->vyl .
			'</td> <td >'
			. $result->byd .
			'</td> <td >'
			. $result->KP .
			'</td> <td >'
			. $result->kod .
			'</td> <td >'
			. $result->misto .
			'</td> <td >'
			. $result->vylica .
			'</td> <td >'
			. $result->bydin .
			'</td> <td >'
			. $result->vidomosti .
			'</td> <td >'
			. $result->sostav .
			'</td> <td >'
			. $result->rik .
			'</td> <td >'
			. $result->cina .
			'</td> <td >'
			. $result->ymova .'

				</td></tr>
' ;
			
			}
echo "<table>";
	
	}
	

	
?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>