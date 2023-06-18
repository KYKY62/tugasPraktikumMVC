<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Warung Rizky</title>

</head>

<body>
    <form action="<?php echo URL; ?>/dashboard">
        <div class="position-absolute top-50 start-50 translate-middle">
            <h4 class="text-center mb-3">Form Login</h4>

            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="user_nama">
                <label for="floatingPassword">Nama</label>
            </div>

            <div class="form-floating mb-2">
                <input type="text" class="form-control " id="floatingPassword" placeholder="Password" name="user_alamat">
                <label for="floatingPassword">Alamat</label>
            </div>

            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingInput" name="user_email" placeholder="Email">
                <label for="floatingInput">Email</label>
            </div>

            <div class="form-floating mb-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="user_password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="user_hp">
                <label for="floatingPassword">Nomor Hp</label>
            </div>

            <button type="submit" name="btn_simpan" value="SIMPAN" class="col-12 btn btn-success position-absolute top-100 start-50 translate-middle mt-5 bi bi-caret-down-fill btn-">Login</button>
        </div>
    </form>
</body>

</html>