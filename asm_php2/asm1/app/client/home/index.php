<?php include_once './app/client/home/include/header.php'; ?>
    <main class="container-fluid">
        <h3 class="text-center">Danh sách môn học</h3>
        <div class="row">
            <?php foreach($subjects as $key => $s): ?>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $s->name; ?></h5>
                        <a href="<?= BASE_URL . 'mon-hoc/chi-tiet?id=' . $s->id?>" class="btn btn-primary">Làm quizs</a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </main>
<?php include_once './app/client/home/include/footer.php'; ?>