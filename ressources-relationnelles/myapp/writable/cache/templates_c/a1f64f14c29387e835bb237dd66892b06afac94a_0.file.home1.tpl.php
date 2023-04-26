<?php
/* Smarty version 4.3.1, created on 2023-04-26 09:39:20
  from '/app/myapp/app/Views/home1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_644937985115c3_67673038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1f64f14c29387e835bb237dd66892b06afac94a' => 
    array (
      0 => '/app/myapp/app/Views/home1.tpl',
      1 => 1682519957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644937985115c3_67673038 (Smarty_Internal_Template $_smarty_tpl) {
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
<!--nav des entreprises-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
  <a class="navbar-brand" href="<?php echo base_url('/');?>
">Accueil</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="<?php echo base_url('/synthese');?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->company_id;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->company_name;?>
</a>
      </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
</div>
</nav>
<h1>Bienvenu sur le site de diagnostics de digitalisation</h1><?php }
}
