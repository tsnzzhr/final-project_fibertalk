<?php require_once __DIR__ . '/../../templates/header.php'; ?>
<script>
    $(document).ready(function() {
        $(".navbar-nav").append(
            ' <li class="nav-item"><a href="/final_project/views/patient/dashboard.php" class="nav-link m-3 menu">Dashboard</a></li>');
        $("#login").remove();
    });
</script>

<div class="container">
    <h1 class="mb-3 txt-ungu">Dashboard</h1>

    <div class="row mb-2">
        <div class="col p-3 text-center">
            <img src="/final_project/assets/img/diet.png" width="120" height="120">
            <a href="/final_project/views/nutritionist/form_konsul_1.php" class="btn dash p-3 mt-4">Pasien Obesitas & Diet Sehat</a>
        </div>
        <div class="col p-3 text-center">
            <img src="/final_project/assets/img/pregnancy.png" width="120" height="120">
            <a href="#" class="btn dash p-3 mt-4">Pasien Ibu Hamil & Menyusui</a>
        </div>

        <div class="col p-3 text-center">
            <img src="/final_project/assets/img/cookie.png" width="120" height="120">
            <a href="#" class="btn dash p-3 mt-4">Pasien Gizi Umum</a>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../../templates/footer.php'; ?>