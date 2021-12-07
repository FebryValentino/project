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
                            <h4>Welcome!</h4>
                            <h6 class="font-weight-light">Happy to see you again!</h6>
                            <?= $this->session->flashdata('pesan'); ?>
                            <form class="user" method="post" action="<?= base_url('autentifikasi'); ?>">
                                <div class="form-group">
                                    <label for="exampleInputEmail">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-account-outline text-info"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control form-control-user" value="<?= set_value('email'); ?>" id="email" placeholder="Alamat Email" name="email">
                                    </div>
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-lock-outline text-info"></i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password"> <br>
                                    </div>
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox">
                                            Tetap Masuk
                                        </label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Lupa Password?</a>
                                </div>
                                <div class="my-3">
                                    <button type="submit" class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Tidak Punya Akun? <a href="<?= base_url('/Autentifikasi/registrasi'); ?>" class="text-primary">Buat</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 login-half-bg d-none d-lg-flex flex-row">
                        <p class="text-white font-weight-medium text-center flex-grow align-self-end">
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> | Made with <i class="far fa-heart"></i> by BF2SD kelompok_1
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>