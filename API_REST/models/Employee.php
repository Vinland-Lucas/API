<?php

class Employee {
    // Connexion
    private $_pdoConnexion;
    private $_table = 'employee';

    // Objects Properties
    private $_id = "";
    private $_name = "";
    private $_email = "";
    private $_age = "";
    private $_designation = "";
    private $_hiringDate = "";

    // Constructeur avec $db pour la connexion à la BDD
    public function __construct($db) {
        $this->_pdoConnexion = $db;
    }

    // Liste tous les employés
    public function getEmployees() {
        $sql = "SELECT * FROM " .$this->_table .";";

        $queryListEmployees = $this->_pdoConnexion->query($sql);

        // On fetch quand on instanciera l'objet (ici employees)

        return $queryListEmployees;
    }

    // Récupère un employé par son ID
    public function getEmployee() {
        $sql = "SELECT id FROM " .$this->_table ." WHERE id = ?;";

        $queryGetEmployeeById = $this->_pdoConnexion->query($sql);

        $queryGetEmployeeById->bindParam(1, $this->_id);

        return $queryGetEmployeeById;
    }
    public function createEmployee() {
        // Créé un employé
    }
    public function updateEmployee() {
        // Update un employé
    }
    public function deleteEmployee() {
        // Delete un employé
    }
}