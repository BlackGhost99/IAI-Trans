<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "gestion_sco";
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn){
    die("Connexion échoué :" .mysqli_connect_error());
  }

  $id = $_POST["id"];
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $adresse = $_POST["adresse"];
  $contact = $_POST["contact"];
  $ContactUrg = $_POST["ContactUrg"];
  $E_mail = $_POST["Email"];
  $Moyen_d_Admission = $_POST["MoyendA"];
  $classe = $_POST["classe"];
  $notes = $_POST["notes"];

  $sql = "INSERT INTO etudiant (id, nom, prenom, adresse, contact, ContactUrg, E_mail, Moyen_d_Admission, classe, notes)
  VALUES ('$id', '$nom', '$prenom', '$adresse', '$contact', '$ContactUrg', '$E_mail', '$Moyen_d_Admission', '$classe', '$notes')";
  if (mysqli_query($conn, $sql)) {
    echo "Enregistrement réussi";
} else {
    echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
 ?>
