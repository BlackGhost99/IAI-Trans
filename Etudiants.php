<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Liste des etudiants</title>
    <link rel="stylesheet" href="https://classless.de/classless.css">
  </head>
  <body>
    <section class="infos">
      <h2>Etudiants inscrits</h2>
      <table>
        <thead>
          <tr>
            <th>Identifiant</th>
            <th>Nom(s)</th>
            <th>Prenom(s)</th>
            <th>Adresse</th>
            <th>Contact</th>
            <th>Contact en cas d'urgence</th>
            <th>Adresse mail</th>
            <th>Moyen d'admission</th>
            <th>Classe</th>
            <th>Notes</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname ="gestion_sco";

           $conn = mysqli_connect($servername, $username, $password, $dbname);
           if ($conn-> connect_error){
             die("Echec de connexion :". $conn-> connect_error);
           }
           $sql = "SELECT * from etudiant";
           $result = $conn-> query($sql);
           if ($result -> num_rows > 0) {
             while ($row = $result-> fetch_assoc()){
               echo "<tr>
                <td>" .$row["id"] ."</td>
                <td>" .$row["nom"] ."</td>
                <td>" .$row["prenom"] ."</td>
                <td>" .$row["adresse"] ."</td>
                <td>" .$row["Contact"] ."</td>
                <td>" .$row["ContactUrg"] ."</td>
                <td>" .$row["E_mail"] ."</td>
                <td>" .$row["Moyen_d_Admission"] ."</td>
                <td>" .$row["classe"] ."</td>
                <td>" .$row["notes"] ."</td>
                </tr>";
             }
             echo "</table>";
           }
           else{
             echo "0 result";
           }

           $conn-> close();
          ?>
        </tbody>
      </table>
    </section>
  </body>
</html>
