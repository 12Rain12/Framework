<html>
<a href="http://localhost/Framework/news/create.">Создать новость</a>
<h1>Новости</h1>
{if isset($article)}
    {foreach item=admin from=$news}
        {$admin.name}
        {$admin.text}
<{/foreach}
{/if}