<?php 
$conn = new mysqli('localhost', 'root', '', 'db_livraison');

// vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO utilisateur (user_id,username ) VALUES ('ddsddddd', 'valeur2')";
if ($conn->query($sql) === TRUE) {
    // renvoie une réponse JSON contenant les données insérées
    $data = array(
        'id' => $conn->insert_id,
        'colonne1' => 'valeur1',
        'colonne2' => 'valeur2'
    );
    echo json_encode($data);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>