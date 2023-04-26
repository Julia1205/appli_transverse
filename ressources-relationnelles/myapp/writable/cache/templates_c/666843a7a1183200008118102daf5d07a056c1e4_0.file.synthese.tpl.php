<?php
/* Smarty version 4.3.1, created on 2023-04-26 04:54:29
  from '/app/myapp/app/Views/synthese.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6448f4d51d0c09_24972159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '666843a7a1183200008118102daf5d07a056c1e4' => 
    array (
      0 => '/app/myapp/app/Views/synthese.tpl',
      1 => 1682501665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6448f4d51d0c09_24972159 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_792199426448f4d5064229_67796226', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "content"} */
class Block_792199426448f4d5064229_67796226 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_792199426448f4d5064229_67796226',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <h2 class="m-5">Synthèse</h2>
        <div class="row">
            <div class="col">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['synthese']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <p class='row'><?php echo $_smarty_tpl->tpl_vars['item']->value->synthese_axe_name;?>
: 
                    <?php if (($_smarty_tpl->tpl_vars['item']->value->synthese_axe_name) == 'Axe réactivité') {?>
                        <b class='reactivite'>
                    <?php } elseif (($_smarty_tpl->tpl_vars['item']->value->synthese_axe_name) == 'Axe compétences') {?>
                        <b class='competences'>
                    <?php } elseif (($_smarty_tpl->tpl_vars['item']->value->synthese_axe_name) == 'Axe numérique') {?>
                        <b class='numerique'>
                    <?php }?>
                        
                        <?php echo $_smarty_tpl->tpl_vars['item']->value->synthese_axe_note;?>
</b> /5</p>               
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="col">
                <canvas id="myChart"></canvas>
            </div>      
        </div>
    </div>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/chart.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block "content"} */
}
