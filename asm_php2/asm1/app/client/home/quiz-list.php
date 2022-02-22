<?php include_once './app/client/home/include/header.php'; ?>
    <main class="container-fluid">
        <p id="demo"></p>
        <h3>Môn học: <?= $subject-> name?></h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Tên quiz</th>
                    <th>Thời gian bắt đầu</th>
                    <th>Thời gian kết thúc</th>
                    <th>Thời gian làm bài</th>
                    <th>Điểm</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($quizs as $q):?>
                    <tr>
                        <td scope="row"><?= $q->name ?></td>
                        <td><?= $q->start_time ?></td>
                        <td><?= $q->end_time ?></td>
                        <td><?= $q->duration_minutes ?> phút</td>
                        <td>
                            <a href="<?= BASE_URL .'mon-hoc/chi-tiet/lam-quiz?id='. $q->id ?>" class="btn btn-sm btn-primary">Bắt đầu làm bài</a>
                        </td>
                    </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </main>
<?php include_once './app/client/home/include/footer.php'; ?>

<script>
  
    // var now = new Date()
    // var endtime = new Date(now);
    // endtime.setSeconds(now.getSeconds() + 10);
    // var countDownDate = endtime.getTime();
    // var x = setInterval(function() {

    //     var now = new Date().getTime();

    //     var distance = countDownDate - now;

    //     var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    //     var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    //     var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    //     var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    //     document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    //     + minutes + "m " + seconds + "s ";

    //     if (distance < 0) {
    //         clearInterval(x);
    //         document.getElementById("demo").innerHTML = "EXPIRED";
    //     }
    // }, 1000);

</script>