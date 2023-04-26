<?php
/* Smarty version 4.3.1, created on 2023-04-26 06:20:52
  from '/app/myapp/app/Views/axe-competence.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6449091444e422_96128215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e08789e2cf6273278763a7e6ca18c76ccf91e993' => 
    array (
      0 => '/app/myapp/app/Views/axe-competence.tpl',
      1 => 1682508049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6449091444e422_96128215 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2039532743644909143c3cd3_97211022', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "content"} */
class Block_2039532743644909143c3cd3_97211022 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2039532743644909143c3cd3_97211022',
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
            <pre>
            <?php if (($_smarty_tpl->tpl_vars['item']->value->axe_competence_item_id) == 1) {?>
                <?php echo var_dump($_smarty_tpl->tpl_vars['item']->value->axe_competence_item_id);?>

            <?php echo var_dump($_smarty_tpl->tpl_vars['key']->value);?>

            <?php }?>
            </pre>
            
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block "content"} */
}
