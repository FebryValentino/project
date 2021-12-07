<body>
    <div class="container-scroller d-flex">
        <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
            <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                <div class="row flex-grow">
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <div class="auth-form-transparent text-left p-3">
                            <div class="brand-logo">
                                <img src="<?= base_url('assets/'); ?>img/logo-11.png" alt="logo">
                            </div>
                            <h4>Daftar</h4>
                            <h6 class="font-weight-light" style="margin-bottom: 12px;">Mudah cepat dan sederhana</h6>
                            <form class="user" method="post" action="<?= base_url('autentifikasi/registrasi'); ?>">
                                <div class="form-group">
                                    <label>Nama Pengguna</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-account-outline text-info"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control form-control-lg border-left-0" id="nama" name="nama" placeholder="Nama Pengguna" value="<?= set_value('nama'); ?>">
                                    </div>
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-email-outline text-info"></i>
                                            </span>
                                        </div>
                                        <input type="email" class="form-control form-control-lg border-left-0" id="email" name="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>">
                                    </div>
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-lock-outline text-info"></i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control form-control-lg border-left-0" id="password1" name="password1" placeholder="Password">
                                    </div>
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label>Ulang Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-lock-outline text-info"></i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control form-control-lg border-left-0" id="password2" name="password2" placeholder="Ketik Ulang Password">
                                    </div>
                                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>


                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn">DAFTAR</button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Sudah Punya Akun? <a href="<?= base_url('/Autentifikasi'); ?>" class="text-primary">Masuk</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 register-half-bg d-none d-lg-flex flex-row">
                        <p class="text-white font-weight-medium text-center flex-grow align-self-end">
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> | Made with <i class="far fa-heart"></i> by BF2SD Kelompok_1
                        </p>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>