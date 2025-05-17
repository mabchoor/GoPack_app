<?php 
class Database2 {
    private $host;
    private $username;
    private $password;
    private $database;
    private $conn;

    public function __construct() {
        $this->host = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->database = "db_livraison2";

        // Create mysqli connection
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($sql) {
        return $this->conn->query($sql);
    }

    public function bind_param($stmt, $params) {
        call_user_func_array(array($stmt, 'bind_param'), $params);
    }

    public function execute($stmt) {
        return $stmt->execute();
    }

    public function fetch($result) {
        return $result->fetch_assoc();
    }

    public function fetch_all($result) {
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function close() {
        $this->conn->close();
    }
}





function getSumPrixByUserId($user_id) {
    $db = new Database2(); // Create a new instance of Database2 class

    // Prepare and execute the query
    $result = $db->query("SELECT SUM(prix) AS total_prix FROM `delivrys` WHERE User_id = '".$user_id."'");
    $user = $db->fetch($result);
    
    // Check if user data is found
    if (!empty($user)) {
        $sum = isset($user["total_prix"]) ? $user["total_prix"] : "0";
    } else {
        // Handle case when user data is not found
        $sum = "N/A";
    }
    
    $db->close(); // Close the database connection
    
    return $sum; // Return the sum
}


function getinprosses($user_id) {
    $db = new Database2(); // Create a new instance of Database2 class

    // Prepare and execute the query
    $result = $db->query("SELECT COUNT(*) AS total_count FROM `delivrys` WHERE etat = 0 AND User_id = '".$user_id."'");
    $user = $db->fetch($result);
    
    // Check if user data is found
    if (!empty($user)) {
        $count = isset($user["total_count"]) ? $user["total_count"] : 0;
    } else {
        // Handle case when user data is not found
        $count = 0;
    }

    $db->close(); // Close the database connection
    
    return $count; // Return the count
}
function getenddel($user_id) {
    $db = new Database2(); // Create a new instance of Database2 class

    // Prepare and execute the query
    $result = $db->query("SELECT COUNT(*) AS total_count FROM `delivrys` WHERE etat = 1 AND User_id = '".$user_id."'");
    $user = $db->fetch($result);
    
    // Check if user data is found
    if (!empty($user)) {
        $count = isset($user["total_count"]) ? $user["total_count"] : 0;
    } else {
        // Handle case when user data is not found
        $count = 0;
    }

    $db->close(); // Close the database connection
    
    return $count; // Return the count
}


function getUnreadMessageCount($user_id) {
    $db = new Database2(); // Create a new instance of Database2 class

    // Prepare and execute the query
    $result = $db->query("SELECT COUNT(*) AS total_count FROM `message` WHERE status = 0 AND User_id = '".$user_id."'");

    // Check if query executed successfully
    if ($result === false) {
        // Handle query error
        die("Error executing query: " . $db->conn->error);
    }

    // Fetch the result
    $user = $db->fetch($result);

    // Check if user data is found
    if (!empty($user)) {
        $count = isset($user["total_count"]) ? $user["total_count"] : 0;
    } else {
        // Handle case when user data is not found
        $count = 0;
    }

    $db->close(); // Close the database connection

    return $count; // Return the count
}



function getenamechauffeur($user_id) {
    $db = new Database2(); // Create a new instance of Database2 class

    // Prepare and execute the query                         
    $result = $db->query("SELECT Nom FROM `drivers` where Chauffeur_id='".$user_id."'");
    $user = $db->fetch($result);
    
    // Check if user data is found
    if (!empty($user)) {
        $count = isset($user["total_count"]) ? $user["total_count"] : 0;
    } else {
        // Handle case when user data is not found
        $count = Null;
    }
    $db->close(); // Close the database connection
    return $count; // Return the count
}

function getsource($demande_id) {
    $db = new Database2(); // Create a new instance of Database2 class

    // Prepare and execute the query
    $result = $db->query("SELECT * FROM `sourcedeliv` WHERE User_id = '".demande_id."'");
    $user = $db->fetch($result);
    
    // Check if user data is found
    if (!empty($user)) {
        $adresse = isset($user["adresse"]) ? $user["adresse"] : 0;
        $ville = isset($user["ville"]) ? $user["ville"] : 0;
        $code_postal = isset($user["code_postal"]) ? $user["code_postal"] : 0;
    } else {
        // Handle case when user data is not found
        $count = 0;
    }

    $db->close(); // Close the database connection
    
    return $adresse.' '.$code_postal .' '.$ville; // Return the count
}
function getdestination($demande_id) {
    $db = new Database2(); // Create a new instance of Database2 class

    // Prepare and execute the query
    $result = $db->query("SELECT * FROM `destinadeliv` WHERE User_id = '".demande_id."'");
    $user = $db->fetch($result);
    
    // Check if user data is found
    if (!empty($user)) {
        $adresse = isset($user["adresse"]) ? $user["adresse"] : 0;
        $ville = isset($user["ville"]) ? $user["ville"] : 0;
        $code_postal = isset($user["code_postal"]) ? $user["code_postal"] : 0;
    } else {
        // Handle case when user data is not found
        $count = 0;
    }

    $db->close(); // Close the database connection
    
    return $adresse.' '.$code_postal .' '.$ville; // Return the count
}

function getinprosseslist($user_id) {
    $db = new Database2(); // Create a new instance of Database2 class

    // Prepare and execute the query
    $result = $db->query("SELECT * FROM `delivrys` WHERE etat =0 AND User_id = '".$user_id."'");
    $user = $db->fetch($result);
    
    // Check if user data is found
    if (!empty($user)) {
        $count = isset($user[""]) ? $user["total_count"] : 0;
        echo '<tr>
        <td><h6 class="mb-0">'.getenamechauffeur($user["chauffeur"]).'</h6></td>
        <td>'.getdestination($user["Demande_id"]).'</td>
        <td>
        '.$user['date'].'
        </td>
        <td>
        '.$user['time_serv'].'
        </td>
        <td>'.$user['prix'].'</td>
    </tr>';
    } else {
        // Handle case when user data is not found
        $count = 0;
    }

    $db->close(); // Close the database connection
    
    return $count; // Return the count
}


function getendedlist($user_id) {
    $db = new Database2(); // Create a new instance of Database2 class

    // Prepare and execute the query
    $result = $db->query("SELECT * FROM `delivrys` WHERE etat = 1 AND User_id = '".$user_id."'");
    $user = $db->fetch($result);
    
    // Check if user data is found
    if (!empty($user)) {
        $count = isset($user[""]) ? $user["total_count"] : 0;
        echo '<tr>
        <td><h6 class="mb-0">'.getenamechauffeur($user["chauffeur"]).'</h6></td>
        <td>'.getdestination($user["Demande_id"]).'</td>
        <td>
        '.$user['date'].'
        </td>
        <td>
        '.$user['time_serv'].'
        </td>
        <td>'.$user['prix'].'</td>
    </tr>';
    }
}
function addplace($adresse, $code_postal, $ville) {
    // Include the Database2 class

    // Create a new Database2 object
    $db = new Database2();

    $sql = "INSERT INTO lieu (id_lieu, adresse, code_postal, ville) VALUES (NULL, ?, ?, ?)";

    // Prepare the statement
    $stmt = $db->getConn()->prepare($sql);

    // Bind the parameters
    $stmt->bind_param("sss", $adresse, $code_postal, $ville);

    // Execute the statement
    $result = $stmt->execute();

    // Check the result
    if ($result) {
        // Success: Data inserted into the database
        echo "Data inserted successfully lieu.";

        // Get the ID of the inserted row
        $inserted_id = $stmt->insert_id;

        // Close the statement
        $stmt->close();

        // Close the database connection
        $db->close();

        // Return the inserted ID
        return $inserted_id;
    } else {
        // Error: Failed to insert data into the database
        echo "Failed to insert data into the database lieu.";

        // Close the statement
        $stmt->close();

        // Close the database connection
        $db->close();

        // Return false indicating failure
        return false;
    }
}

function addcolie($width, $length, $weight, $depth, $quantity, $description, $demande)
{
    // Include the Database2 class

    // Create a new Database2 object
    $db = new Database2();

    $sql = "INSERT INTO `coli` (`num`, `description`, `largeur`, `longeur`, `profondeur`, `poids`, `quantite`, `demmande`) VALUES (NULL, ?,?,?,?,?,?,?)";

    // Prepare the statement
    $stmt = $db->getConn()->prepare($sql);

    // Bind the parameters
    $stmt->bind_param("sssssss", $description, $width, $length, $depth, $weight, $quantity, $demande);

    // Execute the statement
    $result = $stmt->execute();

    // Check the result
    if ($result) {
        // Success: Data inserted into the database
        echo "Data inserted successfully. colie";

        // Get the ID of the inserted row
        $inserted_id = $stmt->insert_id;

        // Close the statement
        $stmt->close();

        // Close the database connection
        $db->close();

        // Return the inserted ID
        return $inserted_id;
    } else {
        // Error: Failed to insert data into the database
        echo "Failed to insert data into the database. colie: " . $stmt->error;

        // Close the statement
        $stmt->close();

        // Close the database connection
        $db->close();

        // Return false indicating failure
        return false;
    }
}
function addshipmentsrequest($price, $deliveryDate, $requestDate, $client, $addressDestination, $cityDestination, $codePostalDestination, $addressSource, $citySource, $codePoste, $width, $length, $weight, $depth, $quantity, $description)
{

    // Call addplace function to insert source and destination addresses and retrieve their IDs
    $source = addplace($addressSource, $codePoste, $citySource);
    $destination = addplace($addressDestination, $codePostalDestination, $cityDestination);

    // Create a new Database2 object
    $db = new Database2();

    $sql = "INSERT INTO `demande` (`Demande_id`, `prix_Demande`, `date_Demande`, `date_limite`, `source`, `destination`, `cllient`) VALUES (NULL, ?,?,?,?,?,?)";

    // Prepare the statement
    $stmt = $db->getConn()->prepare($sql);

    // Bind the parameters
    $stmt->bind_param("ssssss", $price, $deliveryDate, $requestDate, $source, $destination, $client);

    // Execute the statement
    $result = $stmt->execute();

    // Check for success or failure
    if ($result) {
        // Success: Data inserted into the database
        echo "Data inserted successfully. demande";

        // Get the ID of the inserted row
        $inserted_id = $stmt->insert_id;
        addcolie($width, $length, $weight, $depth, $quantity, $description,$inserted_id);
        // Close the statement
        $stmt->close();

        // Close the database connection
        $db->close();

        // Return the inserted ID
        return $inserted_id;
    } else {
        // Error: Failed to insert data into the database
        echo "Failed to insert data into the database. demande: " . $stmt->error;

        // Close the statement
        $stmt->close();

        // Close the database connection
        $db->close();

        // Return false indicating failure
        return false;
    }
}