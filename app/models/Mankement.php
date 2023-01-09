<?php

class Mankement
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function getMankement()
    {
        $this->db->query("SELECT Mankement.Id, Mankement.AutoId, Mankement.Datum, Mankement.Mankement, Instructeur.Naam, Instructeur.Email, Auto.Kenteken, Auto.Type
                          FROM Mankement 
                          INNER JOIN Auto
                          ON Mankement.AutoId = Auto.Id
                          INNER JOIN Instructeur
                          ON Auto.InstructeurId = Instructeur.Id
                          WHERE Instructeur.Id = 2;");;
        $result = $this->db->resultSet();
        return $result;
    }
    // public function addMankement($post)
    // {
    //     $sql = "INSERT INTO Kilometerstand (AutoId, Datum, KmStand) VALUES (:AutoId, '2022-12-12 10:53:01.000000', :KmStand)";
    //     $this->db->query($sql);
    //     $this->db->bind(':AutoId', $post['AutoId'], PDO::PARAM_INT);
    //     $this->db->bind(':KmStand', $post['KmStand'], PDO::PARAM_STR);
    //     return $this->db->execute();
    // }
}
