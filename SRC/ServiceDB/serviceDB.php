<?php

namespace serviceDB;

class serviceDB {

    private $db;
    private $Entidade;

    public function __construct(\PDO $db) {
        $this->db = $db;
    }
    
    public function persist( \Entidades\EntidadeInterface $Entidade){
        $this->Entidade = $Entidade;
    }

    public function listar($tabela) {
        $query = "select * from {$tabela}";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll();
    }

    public function flush() {
        $Fields = $this->Entidade->getFields();
        unset($Fields['id']);
        $Keys = implode(',', array_keys($Fields));
        $Values = ":" . implode(",:", array_keys($Fields));

        $query = "insert into {$this->Entidade->getTable()}({$Keys}) values({$Values});";
        $stmt = $this->db->prepare($query);

        foreach ($Fields as $key => $value) {
            $stmt->bindValue(':'.$key, $value);
        }
        
        if ($stmt->execute()) {
            return "Inclusão Efetuada com sucesso<br>";
        } else {
            return "Não foi possível efetuar a inclusão<br>";
        }
    }

}
