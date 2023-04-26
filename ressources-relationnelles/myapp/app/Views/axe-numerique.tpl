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
              {foreach from=$objsNum item=item key=key}
                  <tr>
                      <th>{$item->axe_numerique_item_id}</th>
                      <td>{$item->axe_numerique_question}</td>
                      <td>{$item->axe_numerique_score}</td>
                      <td>{$item->axe_numerique_coment}</td>
                  </tr>
              {/foreach}
          </tbody>
      </table>
  </div>
  
{/block}