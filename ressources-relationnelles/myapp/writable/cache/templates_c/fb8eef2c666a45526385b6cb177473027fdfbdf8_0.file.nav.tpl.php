<?php
/* Smarty version 4.3.1, created on 2023-04-25 06:46:10
  from '/app/myapp/app/Views/layout/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6447bd82f1d942_82774821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb8eef2c666a45526385b6cb177473027fdfbdf8' => 
    array (
      0 => '/app/myapp/app/Views/layout/nav.tpl',
      1 => 1682423120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6447bd82f1d942_82774821 (Smarty_Internal_Template $_smarty_tpl) {
?>  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="https://www.kermel.com/">Kermel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url('/synthese');?>
">Synthèse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url('/axe-competence');?>
">Axe compétences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/axe-reactivite');?>
">Axe réactivité</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/axe-numerique');?>
">Axe numérique</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/analyse');?>
">Analyse numérique par métier</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<?php }
}
