{include file="layout/head.tpl"}
{*On fait le contenu*}
{block name='h1'}
    {if isset($h1)}
        <h1 class="text-center m-5">{$h1}</h1>
    {/if}
{/block}
{block name="content"}
    
{/block}

{include file="layout/footer.tpl"}
