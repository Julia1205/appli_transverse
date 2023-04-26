{extends file="layout.tpl"}
{block name="content"}
    <div class="container">

  <table class="table">
        <thead>
          <tr>
            <th scope="col">Items</th>
            <th scope="col">Questionnements</th>
            <th scope="col">Score</th>
            <th scope="col">Commentaires/Justification (exemples concrets)</th>
          </tr>
        </thead>
        <tbody>
        {foreach from=$objsCompetence item=item key=key}
            {if ($key) != 0 }
                {if ($objsCompetence[($key)-1)] != )}
                {/if}
            {else}
            {/if}
            <pre>
            {if ($item->axe_competence_item_id) == 1}
                {var_dump($item->axe_competence_item_id)}
            {var_dump($key)}
            {/if}
            </pre>
            
        {/foreach}
{/block}