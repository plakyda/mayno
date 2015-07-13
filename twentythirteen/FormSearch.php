<?php if (isset($_GET['button_search'])) {
echo '<p style="color:red;">Сообщение отправлено!</p>';
}
?>
</br>
<form name="search"     method="post" action="<?php bloginfo('template_url'); ?>/searchDB.php">
<input type="text" name="words" />
<input type="submit" name="button_search" value="Поиск" />
</form>
</br>