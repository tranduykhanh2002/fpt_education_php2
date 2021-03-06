<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard Template · Bootstrap v5.1</title>

    <!-- <link href="./css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="<?= BASE_URL . 'dashboard'?>" class="nav-link px-2 text-secondary">Trang Quản Trị </a></li>
                    <li><a href="<?= BASE_URL . 'mon-hoc'?>" class="nav-link px-2 text-white">Môn học</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Tài khoản</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Danh sách quiz</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">About</a></li>
                    <li><a href="<?= BASE_URL . 'trang-chu'?>" class="nav-link px-2 text-secondary">Trang Chủ </a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control form-control-dark" placeholder="Search..."
                        aria-label="Search">
                </form>

                <div class="text-end">
                    <?php if(isset($_SESSION['auth'])){ ?>
                    <button type="button" class="btn btn-outline-light me-2">
                        <?= $_SESSION['auth']['name'] ?>
                    </button>
                    <button type="button" class="btn btn-outline me-2">
                        <a href="<?= BASE_URL . 'dang-xuat' ?>" class="btn btn-outline-light me-2">Log Out</a>
                    </button>
                    <?php } else { header('location:' . BASE_URL . 'tai-khoan/dang-nhap')  ?> <?php }?>

                </div>
            </div>
        </div>
    </header>