<h1>게시판</h1>
<a href="/board.writeView">글쓰기</a>
<?php
    if ($list[0] == 0){
        echo '현재 작성된 글이 없습니다.<br>';
    } else {
        foreach ($list[1] as $item){
?>
            <a href="localhost:8081/board/view/board/<?php echo $item->idx; ?>"> <h3>제목 : <?php echo $item->title; ?></h3> </a>
<?php
        }
    }
?>