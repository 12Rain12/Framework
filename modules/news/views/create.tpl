<form method = "POST" action={$SCRIPT_NAME}>
    <p>Название<br><textarea name="name" cols="100" rows="1"></textarea  />
    <p>Статья<br><textarea name="text" cols="100" rows="20"></textarea />
        <input type="hidden" name="act" value="add">
        <input type='submit' value="Добавить" />
</form>