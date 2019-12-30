<?php
namespace application\contorllers;

class BoardController extends contorllers
{
    public function index($category, $idx, $pageNo)
    {
        $model = new \application\models\BoardModel();
        $list = $model->selectList($category, $idx, $pageNo);

        require_once 'application/views.board.index.php';
    }
}