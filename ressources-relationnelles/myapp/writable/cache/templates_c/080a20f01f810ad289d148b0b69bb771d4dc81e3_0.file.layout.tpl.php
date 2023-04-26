<?php
/* Smarty version 4.3.1, created on 2023-04-26 04:37:26
  from '/app/myapp/app/Views/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6448f0d638a8c3_98408407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '080a20f01f810ad289d148b0b69bb771d4dc81e3' => 
    array (
      0 => '/app/myapp/app/Views/layout.tpl',
      1 => 1682501765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/head.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_6448f0d638a8c3_98408407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:layout/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13692637176448f0d61f36a1_75996762', 'h1');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11105879736448f0d6389ff5_71026684', "content");
?>


<?php $_smarty_tpl->_subTemplateRender("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'h1'} */
class Block_13692637176448f0d61f36a1_75996762 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'h1' => 
  array (
    0 => 'Block_13692637176448f0d61f36a1_75996762',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['h1']->value))) {?>
        <h1 class="text-center m-5"><?php echo $_smarty_tpl->tpl_vars['h1']->value;?>
</h1>
    <?php }
}
}
/* {/block 'h1'} */
/* {block "content"} */
class Block_11105879736448f0d6389ff5_71026684 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11105879736448f0d6389ff5_71026684',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<?php
}
}
/* {/block "content"} */
}
