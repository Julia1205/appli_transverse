<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link href="{base_url('assets/css/footer.css')}" rel="stylesheet" />-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
				integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
				integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" 
				crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Digitalisation {if isset($title)}{$title}{/if}</title>
	</head>
<!--nav des entreprises-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
  <a class="navbar-brand" href="{base_url('/')}">Accueil</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    {foreach from=$companies item=item key=key}
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{base_url('/synthese')}/{$item->company_id}">{$item->company_name}</a>
      </li>
    {/foreach}
    </ul>
  </div>
</div>
</nav>
<div class='container'>
<h1 class='text-center m-5'>Bienvenu sur le site de diagnostics de digitalisation</h1>
</div>