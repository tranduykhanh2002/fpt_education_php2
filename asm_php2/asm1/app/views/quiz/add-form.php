<?php include_once "./app/views/include/teamplate/header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1 mt-3">
                <form action="<?= BASE_URL . 'quiz/save-add?subjectId=' . $subjectId?>" method="post">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mt-3">
                                <label for="">Tên quiz</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Thời gian bắt đầu</label>
                                <input type="datetime-local" name="start_time" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Thời gian kết thúc</label>
                                <input type="datetime-local" name="end_time" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mt-3">
                                <label for="">Thời gian làm bài</label>
                                <input type="number" step="0" name="duration_minutes" class="form-control">
                            </div>
                            <div class="form-check mt-5">
                                <input class="form-check-input" name="status" type="checkbox" value="1" id="status">
                                <label class="form-check-label" for="status">
                                    Mở Quiz
                                </label>
                            </div>
                            <!-- <div class="form-check mt-5">
                                <input class="form-check-input" name="is_shuffle" type="checkbox" value="1" id="is_shuffle">
                                <label class="form-check-label" for="is_shuffle">
                                    Đảo câu
                                </label> -->
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="" class="btn btn-danger">Hủy</a>
                            &nbsp;
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                    </div>
                </form>    
            </div>
        </div>
    </div>
    

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>