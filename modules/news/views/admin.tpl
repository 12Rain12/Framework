<html>
<table border="1">
    <tr>
        <td>ID</td>
        <td width='20%'>Name</td>
        <td>Text</td>
        <td>Управление</td>
    </tr>
    {foreach item=admin from=$news}
        <tr>
            <td>{$admin.id}</td>
            <td>{$admin.name}</td>
            <td>{$admin.text}</td>
            <td>
                <center>
                    <a href="update.php?id={$admin.id}">Редактировать</a>
                    <a href="delete.php?id={$admin.id}">Удалить</a>
                    <a href="read.php?id={$admin.id}">Просмотреть</a>
                </center>
            </td>
        </tr>
    {/foreach}
</table>