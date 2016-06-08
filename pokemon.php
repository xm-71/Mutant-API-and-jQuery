<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">

</head>

<div class="top-bar">
    <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
            <li class="menu-text">The Lists of All Lists <i class="fa fa-optin-monster fa-2x" aria-hidden="true"></i></i>
            </li>
            <li>
                <a href="index.html">Mutants</a>
                <ul class="menu vertical">
                    <li><a href="#">Pokemon</a></li>
                    <li><a href="#">Class Roster</a></li>
                </ul>
                <li><a href="pokemon.html">Pokemon</a></li>
                <li><a href="#">Class Roster</a></li>
            </li>

        </ul>
    </div>

</div>
</form>
<div class="row">
    <div class="large-12 columns text-center">
        <ul id="pokemonList" class="inline-list">
            <li class="template">
              <?php include 'pokemonList.php';?>
            </li>
        </ul>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-rc1/jquery.min.js"></script>
<script src="load-mutant.js"></script>
<script src="delete-Mutant.js"></script>
<script src="create.js"></script>
<script src="update.js"></script>
<script src="app.js"></script>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
</body>

</html>
