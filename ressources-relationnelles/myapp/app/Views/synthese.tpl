{extends file="layout.tpl"}
{block name="content"}
    <div class="container">
        <h2 class="m-5">Synthèse</h2>
        <div class="row">
            <div class="col">
                {foreach from=$synthese item=item key=key}
                    <p class='row'>{$item->synthese_axe_name}: 
                    {if ($item->synthese_axe_name) == 'Axe réactivité'}
                        <b class='reactivite'>
                    {elseif ($item->synthese_axe_name) == 'Axe compétences'}
                        <b class='competences'>
                    {elseif ($item->synthese_axe_name) == 'Axe numérique'}
                        <b class='numerique'>
                    {/if}
                        
                        {$item->synthese_axe_note}</b> /5</p>               
                {/foreach}
            </div>
            <div class="col">
                <canvas id="myChart"></canvas>
            </div>      
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
  const ctx = document.getElementById('myChart');
  let reactivite = document.getElementsByClassName('reactivite')[0].innerText;
  let competences = document.getElementsByClassName('competences')[0].innerText;
  let numerique = document.getElementsByClassName('numerique')[0].innerText;

  new Chart(ctx, {
    type: 'radar',
    data: {
      labels: ['Axe réactivité', 'Axe compétences', 'Axe numérique'],
      datasets: [{
        label: 'Score',
        data: [reactivite, competences, numerique],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      },
    }
  });
</script>

{/block}