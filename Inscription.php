<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://classless.de/classless.css">
  </head>
  <body>
    <form class="inscription" action="connect.php" method="post">
      <div class="fill">
        <h2>Inscription Etudiants</h2>
        <p>Veuillez remplir le formulaire</p>
        <p><input type="text" name="id" placeholder="Identifiant" required></p>
        <p><input type="text" name="nom" placeholder="Nom(s)" required></p>
        <p><input type="text" name="prenom" placeholder="Prenom" required></p>
        <p><input type="text" name="adresse" placeholder="Adresse" required></p>
        <p><input type="tel" name="contact" placeholder="Contact" required></p>
        <p><input type="tel" name="ContactUrg"placeholder="Contact en cas d'urgence" required></p>
        <p><input type="text" name="Email"placeholder="E-mail" required></p>
        <label for="MoyenA">Moyen d'admission</label><br>
        <select id ="MoyenA" name ="MoyendA">
          <p><option value="Concours">Concours</option></p>
          <p><option value="Frais">Payement</option></p>
        </select>
        <br>
        <p><label for="classe">Classe</label><br>
        <select id ="classe" name ="classe">
          <p><option value="AP 1">AP/LP 1</option></p>
          <p><option value="AP 2">AP/LP 2</option></p>
          <p><option value="AP 3">AP/LP 3</option></p>
          <p><option value="ING 1">Ingenieur 1</option></p>
          <p><option value="ING 2">Ingenieur 2</option></p>
          <p><option value="ING 3">Ingenieur 3</option></p>
          <p><option value="MIAGE 1">Miage 1</option></p>
          <p><option value="MIAGE 2">Miage 2</option></p>
          <p><option value="MASTER 1">Master 1</option></p>
          <p><option value="MASTER 2">Master 2</option></p>
        </select>
        <br>
        <p><label for="notes">Moyennes</label><br>
        <textarea id="notes" name="notes" rows="30" cols="80"></textarea>
        <p><input type="submit" value="Envoyer" style="background:skyblue"></p>
      </div>
    </form>
  </body>
</html>
