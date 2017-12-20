<div class="page animsition  center text-center" data-animsition-in="fade-in"
data-animsition-out="fade-out">
<div class="page-content container ">
  <div class="panel col-xs-12 col-sm-6 col-sm-offset-3">
    <div class="page-content container-fluid ">
      <div class="brand">
        <img class="brand-img" src="<?php echo site_url(); ?>assets/assets/images/logo.png" width="100px" alt="...">
        <h2 class="brand-text font-size-18">Login</h2>
      </div>
      <form method="post" action="<?php echo site_url(); ?>login/proses_login/" autocomplete="off">
        <div class="form-group form-material floating">
          <input type="text" class="form-control" name="username" />
          <label class="floating-label">NPM/Username</label>
        </div>
        <div class="form-group form-material floating">
          <input type="password" class="form-control" name="password" />
          <label class="floating-label">Password</label>
        </div>

        <button type="submit" class="btn btn-primary btn-block btn-lg margin-top-40">Masuk</button>
      </form>
      <br>
      <p>Silahkan login dengan menggunakan akun KRS Online</p>
    </div>
  </div>

</div>
</div>