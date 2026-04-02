<?php

class Article{
    private $conn;
    private $table = "Articles";

    public $id;
    public $titre;
    public $contenu;

    public function __construct($db){
        $this->conn = $db;
    }

    public function read(){
        $sql = "SELECT * FROM {$this->table}";
        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

   public function create(){
    $sql = "INSERT INTO {$this->table} (titre, contenu)
            VALUES (:titre, :contenu)";

    $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            'titre'=>$this->titre,
            'contenu'=>$this->contenu
        ]);
    }
}