<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche de Renseignement</title>
<link rel="stylesheet" href="style.css"> 
</head>
<body>
  <!-- Header avec logo à droite et texte à gauche -->
  <header class="header">
        <div class="header-left">
            <img src="logo.png" alt="Logo de l'agence">  
        </div>
        <div class="header-right">
        <p>République du Congo<br>Unité - Travail - Progrès</p>
        </div>
    </header>
    <div class="">
        <h1><u>Fiche de Renseignement</u></h1>
        <br><br>
        <form action="connexion.php" method="post">
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom">
            </div>
            <div class="form-group">
                <label for="situation">Situation matrimoniale :</label>
                <input type="text" id="situation" name="situation">
            </div>
            
            <div class="form-group">
                <label for="date">Date et lieu de naissance :</label>
                <input type="date" id="date" name="date">
                <label for="lieu"></label>
                <input type="text" id="lieu" name="lieu">
            </div>
            <div class="form-group">
                <label for="adresse">Adresse :</label>
                <input type="text" id="adresse" name="adresse">
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone :</label>
                <input type="text" id="telephone" name="telephone">
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="date-embauche">Date d'embauche :</label>
                <input type="date" id="date-embauche" name="date-embauche">
            </div>
            <div class="form-group">
                <label for="fonction">Fonction :</label>
                <input type="text" id="fonction" name="fonction">
            </div>
            <div class="form-group">
                <label for="formation">Formation :</label>
                <input type="text" id="formation" name="formation">
                
            </div>

             <div class="form-group">
                <label for="formation">Personne à contacter en cas d'urgence :</label>
                <input type="text" id="contacter" name="contacter">
                
            </div>
            <button type="submit">Soumettre</button>
        </form>
</body>
</html>
