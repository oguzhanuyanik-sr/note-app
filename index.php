<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Not Uygulaması</title>
</head>

<body class="bg-dark container py-5">
        <!-- Heading Start -->
        <header class="alert alert-secondary text-dark text-center heading-box">
            <h1 class="fs-2">Not Uygulaması</h1>
        </header>
        <!-- Heading End -->

        <hr class="text-light mt-4">

        <!-- Form Start -->
        <section>
            <form action="" method="post" class="mt-2" id="dataForm">
                <div class="col-12">
                    <label for="title-input" class="form-label text-light display-6">Başlık</label>
                    <input class="form-control" type="text" name="title" id="title-input" required>
                </div>

                <div class="mt-2 col-12">
                    <label for="desc-input" class="form-label text-light display-6">İçerik</label>
                    <textarea name="desc" id="desc-input" rows="7" class="form-control" required></textarea>
                    <input type="hidden" name="data-input" id="dataInput">
                </div>

                <div class="mt-4 row d-flex justify-content-between">
                    <div class="col-5 col-sm-3">
                        <input type="submit" value="Ekle" class="form-control btn btn-success fs-4" id="add-button">
                    </div>
                    <div class="col-6">
                        <p class="text-dark bg-warning fs-4 text-center rounded warning-box">Yeni Not Eklendi</p>
                    </div>
                </div>
            </form>
        </section>
        <!-- Form End -->

        <hr class="text-light mt-4">

        <!-- Table Start -->
        <section>
            <div class="alert alert-secondary text-dark text-center heading-box">
                <h2 class="fs-2">Notlar</h2>
            </div>
            <div>
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Sıra No</th>
                            <th scope="col">Başlık</th>
                            <th scope="col">İçerik</th>
                            <th scope="col">Eklenme Zamanı</th>
                            <th scope="col">Eylem</th>
                        </tr>
                    </thead>
                    <tbody id="dataList">
                    </tbody>
                </table>
                <div class="mt-4">
                    <button class="btn btn-danger fs-4 col-5 col-sm-3" id="clearData">Notları Sil</button>
                </div>
            </div>
        </section>
        <!-- Table End -->

    <script src="js/ajax-script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
