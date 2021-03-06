<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&display=swap&subset=cyrillic"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href={{ asset("css/style.css") }}>
    <title></title>
</head>

</head>

<body>
<button id="btn_modal_window">modal_modifier_bouteille</button>
<div id="my_modal" class="modal">
    <div class="modal_content">
        <span class="close_modal_window">×</span>
        <h1 class="logo"><img src={{ asset("img/logo_vino.png") }} alt="vino"></h1>
        <form class="form-modal-modifier" action="{{ route("accueil") }}" method="post">
            <label for="name">Nom:</label><br><br>
            <label for="search">Recherche:</label>
            <input class="input-modal-modifier" type="text" id="search" name="search"><br><br>
            <label for="vintage">Millesime:</label>
            <input class="input-modal-modifier" type="text" id="vintage" name="vintage"><br><br>
            <label for="quantity">Quantité:</label>
            <input class="input-modal-modifier" type="text" id="quantity" name="quantity"><br><br>
            <label for="date">Date achat:</label>
            <input class="input-modal-modifier" type="date" id="date" name="date"><br><br>
            <label for="price">Prix:</label>
            <input class="input-modal-modifier" type="text" id="price" name="price"><br><br>
            <label for="garde">Garde:</label>
            <input class="input-modal-modifier" type="text" id="garde" name="garde"><br><br>
            <label for="cellar">Nom du cellier:</label>F
            <select class="input-modal-modifier" name="cellar" id="cellar">
                <option value="---">---</option>
                <option value="cellar1">cellar 1</option>
                <option value="cellar2">cellar 2</option>
                <option value="cellar3">cellar 3</option>
            </select><br><br>
            <label for="notes">Notes:</label>
            <input class="input-modal-modifier" name="notes" id="notes"><br><br>
        </form>
        <div class="btn-container">
            <div class="center">
                <div class="form-modal">
                    <button class="btn btn-accepter" type="submit" formaction="#">Accepter</button>
                </div>
                <div class="form-modal">
                    <button class="btn btn-annuler" type="submit" formaction="#">Annuler</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src={{ asset("js/modal.js") }}></script>

</html>