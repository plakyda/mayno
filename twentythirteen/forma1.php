
<link type="text/css" rel="stylesheet" href="forma.css" />

<?php if (isset($_GET['add'])) {
echo '<p style="color:red;">Сообщение отправлено!</p>';
}
?>
 
<div class="formas">
<div class="field">
<form name = "form1"  method="POST" action="<?php bloginfo('template_url'); ?>/maino.php"> 
 <label>Назва об'єкту</label><br> <textarea rows="3" cols="50" name="nazvanie"></textarea>
  
<br> <label> Місцезнаходення</label><br> 
 
   
  <label>Область:</label><input type="text" name="oblast" />
   
  
<br><label>смт:</label><input type="text" name="smt" />
  
 
<br> <label>вул:</label><input type="text" name="vyl" /> 


<br><label>буд.:</label><input type="text" name="byd" size = 3  />


<br><label>Балансоутрімувач</label><br> 
 
 <label>КП:</label><input type="text" name="KP" />

 
<br><label>код за ЄДРПОУ </label><input type="text" name="kod" /> 
 
 
<br><label>м.</label><input type="text" name="misto" /> 
 
 
 <br><label>вул.</label><input type="text" name="vylica" />

 
<br><label>буд.</label><input type="bydin" name="bydin" size = 3  />

 
<br><label>Відомості про об'єкт</label> <br><textarea rows="4" cols="50" name="vidomosti"></textarea> 
 
 
 <br><label>До складу об'єкту входить</label><br> <textarea rows="4" cols="50" name="sostav"></textarea> 


<br><br><label>Рік ведення в експлуатацію:</label><input type="text" name="rik" size=4 />


<br><br><label>Початкова ціна об'єкта без ПДВ:</label> <input type="text" name="cina" size=10 />
<br><label>Умова продажу об'єктів:</label><br><textarea rows="3" cols="50" name="ymova"></textarea><br>


<input type="submit" name= "add" value="Відправити" />

 </form>
  </div>	
	 </div>
