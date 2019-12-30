<h1>글쓰기</h1>
<form action="/board/insertBoard" method="POST">
    <p> 글제목 : <input type="text" name="title" id="title" style="width:300px;"></p>
    <p> 글내용: </p>
    <p> <textarea class="content" name="" id="" cols="30" rows="10"></textarea></p>
    <p><input type="submit" name="submit_insert_board" value="저장하기">
        <button onclick="location.href='/board/index/story'">목록으로</button>
    </p>
</form>