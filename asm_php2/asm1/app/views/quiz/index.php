<?php include_once "./app/views/include/teamplate/header.php";?>
    <div class="container">
        <div class="mt-3">
            <h3>Môn học: <?= $subject->name?></h3>
            <table class="table table-hover table-responsive">
                <thead class="">
                    <tr>
                        <th>Tên quiz</th>
                        <th>Thời gian bắt đầu</th>
                        <th>Thời gian kết thúc</th>
                        <th>Trạng thái</th>
                        <th>Thời gian làm bài</th>
                        <th>Đảo câu</th>
                        <th>
                            <a href="<?= BASE_URL . 'quiz/tao-moi?subjectId=' . $subject->id?>" class="btn btn-success">Tạo mới</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($subjectQuizs as $sq):?>
                    <tr>
                        <td scope="row"><?= $sq->name?></td>
                        <td><?= $sq->start_time?></td>
                        <td><?= $sq->end_time?></td>
                        <td><?= $sq->status == 1 ? "Active" : "Inactive"?></td>
                        <td><?= $sq->duration_minutes?></td>
                        <td><?= $sq->is_shuffle == 1 ? "Có" : "Không"?></td>
                        <td>
                            <a href="<?= BASE_URL . 'quiz/cap-nhat?id=' . $sq->id?>" class="btn btn-primary">Sửa</a>
                            &nbsp;
                            <a href="<?= BASE_URL . 'quiz/xoa?id=' . $sq->id ?>" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                    <?php endforeach?>
                    <tr>
                        <td scope="row"></td>
                        <td></td> 
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>