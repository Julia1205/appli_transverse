<?php
/* Smarty version 4.3.1, created on 2023-04-25 06:47:37
  from '/app/myapp/app/Views/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6447bdd99b02f8_19816868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b493825e57f3d36c4efdeb5b30e364acbfffb58' => 
    array (
      0 => '/app/myapp/app/Views/home.tpl',
      1 => 1682423254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6447bdd99b02f8_19816868 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1894734026447bdd9962d01_12833526', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "content"} */
class Block_1894734026447bdd9962d01_12833526 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1894734026447bdd9962d01_12833526',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header>
        <h1 class="text-center m-5"><?php echo $_smarty_tpl->tpl_vars['h1']->value;?>
</h1>
    </header>
    <body class="container">
    <p>Bienvenu sur le site du diagnostic de Digitalisation de l'entreprise Kremel</p>
    <nav>
        <li><a href="<?php echo base_url('/synthese');?>
">Synthèse</a></li>
        <li><a href="<?php echo base_url('/axe-competence');?>
">Axe compétences</a></li>
        <li><a href="<?php echo base_url('/axe-reactivite');?>
">Axe réactivité</a></li>
        <li><a href="<?php echo base_url('/axe-numerique');?>
">Axe numérique</a></li>
        <li><a href="<?php echo base_url('/analyse');?>
">Analyse numerique par métier</a></li>
    </nav>
<?php
}
}
/* {/block "content"} */
}
