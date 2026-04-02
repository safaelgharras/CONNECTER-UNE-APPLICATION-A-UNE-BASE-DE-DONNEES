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
        $sql = "INSERT INTO {$this->table} (titre, contenu) VALUES (:titre, :contenu)";
        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            'titre' =>$this->titre,
            'contenu' =>$this->contenu
        ]);
    }

   public function update(){
    $sql = "UPDATE {$this->table} 
            SET titre=:titre, contenu=:contenu 
            WHERE id=:id";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([
        'titre' => $this->titre,
        'contenu' => $this->contenu,
        'id' => $this->id
    ]);
}

    public function delete(){
        $sql = "DELETE FROM {$this->table} WHERE id=:id";
        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            'id' =>$this->id
        ]);
    }
}