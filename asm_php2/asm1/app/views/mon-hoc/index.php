<?php include_once "./app/views/include/teamplate/header.php";?>
<div class="col-12">
    <table class="table">
        <thead>
            <th>Mã môn</th>
            <th>Tên môn</th>
            <th>
                <a href="<?= BASE_URL . 'mon-hoc/tao-moi'?>">Tạo mới</a>
            </th>
        </thead>
        <tbody>
            <?php foreach($subjects as $sub): ?>
            <tr>
                <td><?= $sub->id ?></td>
                <td>
                    <a href="<?= BASE_URL . 'quiz?subjectId=' . $sub->id?>"><?= $sub->name ?></a>
                </td>
                <td>
                    <a  href="<?= BASE_URL . 'mon-hoc/cap-nhat?id=' . $sub->id ?>">Sửa</a>
                    <a href="<?= BASE_URL . 'mon-hoc/xoa?id=' . $sub->id ?>">Xóa</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php include_once "./app/views/include/teamplate/footer.php";?>