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
              {foreach from=$objReac item=item key=key}
                  <tr>
                      <th>{$item->axe_reactivite_item_id}</th>
                      <td>{$item->axe_reactivite_question}</td>
                      <td>{$item->axe_reactivite_score}</td>
                      <td>{$item->axe_reactivite_coment}</td>
                  </tr>
              {/foreach}
          </tbody>
      </table>
  </div>

{/block}