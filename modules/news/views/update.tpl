<form action="update.php?id={$edit[0].id}" method="POST">
    <p>Название<br><textarea rows="1" cols="80" name="name">{$edit[0].name}</textarea><br/>
    <p>Статья<br><textarea rows="20" cols="90" name="text">{$edit[0].text}</textarea><br/>
        <input type="hidden" name="id" value="{$edit[0].id}">
        <input type="submit" value="Сохранить"/>
</form>