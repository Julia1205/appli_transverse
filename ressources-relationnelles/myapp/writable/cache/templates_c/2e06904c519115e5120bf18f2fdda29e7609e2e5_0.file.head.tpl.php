<?php
/* Smarty version 4.3.1, created on 2023-04-25 06:15:41
  from '/app/myapp/app/Views/layout/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6447b65d3b7010_56591266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e06904c519115e5120bf18f2fdda29e7609e2e5' => 
    array (
      0 => '/app/myapp/app/Views/layout/head.tpl',
      1 => 1682421319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/nav.tpl' => 1,
  ),
),false)) {
function content_6447b65d3b7010_56591266 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link href="<?php echo base_url('assets/css/footer.css');?>
" rel="stylesheet" />-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
				integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
				integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" 
				crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Digitalisation <?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {
echo $_smarty_tpl->tpl_vars['title']->value;
}?></title>
	</head>
<?php $_smarty_tpl->_subTemplateRender("file:layout/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
