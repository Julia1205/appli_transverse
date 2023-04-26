{extends file="layout.tpl"}
{block name="content"}
    <header>
        <h1 class="text-center m-5">{$h1}</h1>
    </header>
    <body class="container">
    <p>Bienvenu sur le site du diagnostic de Digitalisation de l'entreprise Kremel</p>
    <nav>
        <li><a href="{base_url('/synthese')}">Synthèse</a></li>
        <li><a href="{base_url('/axe-competence')}">Axe compétences</a></li>
        <li><a href="{base_url('/axe-reactivite')}">Axe réactivité</a></li>
        <li><a href="{base_url('/axe-numerique')}">Axe numérique</a></li>
        <li><a href="{base_url('/analyse')}">Analyse numerique par métier</a></li>
    </nav>
{/block}