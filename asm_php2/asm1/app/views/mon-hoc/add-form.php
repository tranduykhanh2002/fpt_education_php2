<?php include_once "./app/views/include/teamplate/header.php";?>
<form action="<?= BASE_URL .  'mon-hoc/luu-tao-moi' ?>" method="post">
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <div class="mt-5">
                    <h3 class="text-center">Tạo mới môn học</h3>
                    <div class="form-group">
                        <label for="">Tên môn học</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mt-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php include_once './app/views/include/footer.php' ?>