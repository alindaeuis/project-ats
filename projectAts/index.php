<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- link css -->
    <link rel="stylesheet" href="style.css">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Kompeten-tidak kompeten</title>
</head>

<body>
    <div class="form-check form-switch"
        style="display: flex; justify-content: center; align-items: center; margin-top: 20px;">
        <input class="form-check-input" type="checkbox" role="switch" id="switch" onchange="switchMode()">
        <label class="form-check-label" style="color: #fff; margin-left: 5px;" for="flexSwitchCheckChecked"
            id="label">Change Mode</label>
    </div>
    <div class="main">
        <div class="form-left">
            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                <?php $nama = $_POST['nama'] ?>
                <?php $nilai = $_POST['nilai'] ?>

                <?php if ($nilai > 70 && $nilai <= 100): ?>
                    <i class="fa-regular fa-face-smile-beam"></i>
                    <h2>Kompeten</h2><br><br>
                    <p>Rincian Nilai</p>
                    <h4 class="nama">
                        <?php echo $nama ?>
                    </h4>
                    <h3>Nilai</h3>
                    <h2 class="nilai" style="font-size: 40px;">
                        <?php echo $nilai ?>
                    </h2>
                <?php else: ?>
                    <i class="fa-regular fa-face-sad-tear" style="color: red"></i>
                    <h2 style="color: red">Tidak Kompeten</h2><br><br>
                    <p>Rincian Nilai</p>
                    <h4 class="nama">
                        <?php echo $nama ?>
                    </h4>
                    <h3>Nilai</h3>
                    <h2 class="nilai" style="color: red; font-size: 40px;">
                        <?php echo $nilai ?>
                    </h2>
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <div class="form-right">
            <div class="header-form">
                <h1>Cek Keterangan Nilai</h1>
            </div>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" style="outline: none;
                        border-color: #53aae4;
                        box-shadow: 0 0 8px rgba(83, 170, 228, 0.7);">
                </div>
                <div class="mb-3">
                    <label for="nilai" class="form-label">Nilai</label>
                    <input type="number" min=0 max=100 class="form-control" id="nilai" name="nilai" style="outline: none;
                        border-color: #53aae4;
                        box-shadow: 0 0 8px rgba(83, 170, 228, 0.7);">
                </div>
                <button type="submit" class="btn btn-primary"
                    style="background-color:#53aae4;font-weight: 700; cursor: pointer;">Kirim</button>
            </form>
        </div>
    </div>

    <p class="copywrite" style="text-align: center;
  font-size: 20px;
  font-weight: 600;
  color: rgba(255, 255, 255, 0.9);">&copy;alindaeuissoleha</p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script>
        function switchMode() {
            let body = document.querySelector('body');
            let switchEl = document.querySelector('#switch');
            let label = document.querySelector('#label');

            if (switchEl.checked) {
                body.style.background = '#263159';
                label.style.color = '#c9dcf1';
            } else {
                body.style.background = '#c9dcf1';
                label.style.color = '#263159';
            }
        }
    </script>
</body>

</html>