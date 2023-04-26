<?php
/* Smarty version 4.3.1, created on 2023-04-26 09:27:53
  from '/app/myapp/app/Views/axe-competence.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_644934e9123635_75878260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e08789e2cf6273278763a7e6ca18c76ccf91e993' => 
    array (
      0 => '/app/myapp/app/Views/axe-competence.tpl',
      1 => 1682519270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644934e9123635_75878260 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_625833776644934e90b0899_48546655', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "content"} */
class Block_625833776644934e90b0899_48546655 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_625833776644934e90b0899_48546655',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['objsCompetence']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <tr>
                    <th><?php echo $_smarty_tpl->tpl_vars['item']->value->axe_competence_item_id;?>
</th>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value->axe_competence_question;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value->axe_competence_score;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value->axe_competence_coment;?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
<?php
}
}
/* {/block "content"} */
}
