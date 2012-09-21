{if isset($news)}
    {foreach item=admin from=$news}
        {$admin.name}  <br>
        {$admin.text}   <br>  <br>

    {/foreach}
{/if}