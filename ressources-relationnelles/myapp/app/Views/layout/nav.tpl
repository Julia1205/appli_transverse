<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
  <a class="navbar-brand" href="{base_url('/')}">Diagnostic</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{base_url('/synthese')}/{$company_id}">Synthèse</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{base_url('/axe-competence')}/{$company_id}">Axe compétences</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{base_url('/axe-reactivite')}/{$company_id}">Axe réactivité</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{base_url('/axe-numerique')}/{$company_id}">Axe numérique</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{base_url('/analyse')}/{$company_id}">Analyse numérique par métier</a>
      </li>
    </ul>
  </div>
</div>
</nav>