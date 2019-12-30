<?php

namespace application\models;

use \PDO;

class boardModel extends Model 
{
    public function selectList($category, $idx, $pageNo)
    {
        $spl = 'SELECT idx, title FROM board';

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}