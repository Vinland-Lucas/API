<?php
//Headers requis --> nécessaires pour effectuer des contrôles ou pour faire des autorisations
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF=8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// On vérifie que la méthode utilisée est correcte et certifie que notre API est bien une API REST
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // On inclut les fichiers de configuration et d'accès au données
    include_once '../config/Database.php';
    include_once '../models/Employee.php';

    // On instancie la BDD
    $database = new Database();
    $db = $database->getConnection();

    // On instancie les objets (ici ça sera des employés)
    $employees = new Employee($db);

    // On récupère les données
    $stmt = $employees->getEmployees();

    // On vérifie si on a au moins 1 employé
    if ($stmt->rowCount() > 0) {
        // On initialise un tableau associatif
        $tableauEmployees = [];
        $tableauEmployees['employees'] = [];

        // On parcourt les produits
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            extract($row);

            $employ = [
                "id" => $id,
                "name" => $name,
                "email" => $email,
                "age" => $age,
                "designation" => $designation,
                "hiringDate" => $hiringDate
            ];

            $tableauEmployees['employees'][] = $employ; // ajoute le tableau $employ dans le $tableauEmployees['employees']
        }

        // On envoie le code réponse 200 OK
        http_response_code(200); // 200 --> signifie que le protocole HTTP a fonctionné
        // On encode en JSON et on envoie
        echo json_encode($tableauEmployees);
    }

} else {
    // On gère l'erreur
    http_response_code(405); //405 --> code qui correspond à "La méthode n'est pas autorisée"
    echo json_encode(["message" => "La méthode n'est pas autorisée"]);
}



