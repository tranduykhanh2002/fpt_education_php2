<?php include_once "./app/views/include/teamplate/header.php";?>
<div class="container mt-3">
    <h2>Môn học</h2>
    <table class="table table-hover table-responsive">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tên Giáo Viên</th>
                <th>Name subject</th>
                <th>Action</th>
                <th class="btn">
                        <a class="btn btn-success" href="<?= BASE_URL . 'mon-hoc/tao-moi' ?>">Tạo mới</a>
                    </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($subject as $sub => $p){ ?>
            <tr>
                <td><?php echo $sub+1 ?></td>
                <td><?php echo $p['name_user'] ?></td>
                <td><?php echo $p['name'] ?></td>
                <td>
                    <a class="btn btn-sm btn-info"
                        href="<?= BASE_URL . 'mon-hoc/xoa?id='.$p['id'] ?>">Xóa</a>
                    <a class="btn btn-sm btn-info" href="mon-hoc/cap-nhat?id=<?php echo $p['id'] ?>">Sửa</a>
                    <a class="btn btn-sm btn-info" href="mon-hoc/chi-tiet-mon-hoc?id=<?php echo $p['id'] ?>">Chi
                        tiết</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php include_once "./app/views/include/teamplate/footer.php";?>