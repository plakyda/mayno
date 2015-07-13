<?php
/* Define these, So that WP functions work inside this file */
define('WP_USE_THEMES', false);
require( $_SERVER['DOCUMENT_ROOT'] .'/wp-blog-header.php');
header('Location: ' . $_SERVER['HTTP_REFERER'] . '');
?>
<?php
$wpdb -> insert(
'nameobjekt',
array(

 'nazvanie' => $_POST['nazvanie'],
 'oblast' => $_POST['oblast'],
 'smt' => $_POST['smt'],
 'vyl' => $_POST['vyl'],
 'byd' => $_POST['byd'],
 'KP'  => $_POST['KP'],
 'kod' => $_POST['kod'],
 'misto' => $_POST['misto'], 
 'vylica' => $_POST['vylica'],
 'bydin' => $_POST['bydin'],
 'vidomosti' => $_POST['vidomosti'],
 'sostav' => $_POST['sostav'],
 'rik' => $_POST['rik'],
 'cina' =>  $_POST['cina'],
 'ymova'=>  $_POST['ymova'],
 
)
);
?>
  
  
