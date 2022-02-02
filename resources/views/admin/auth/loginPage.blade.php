@include('layout.headerLoginAdmin')
<body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-group">
                    <div class="card p-4">
                        <div class="card-body">
                            <div style="text-align: center;">
                                <img src="http://s3.jagoanstorage.com/aditia-storage/asset/logo/uinsu.png" style="width: 200px;" />
                                <h3>Login</h3>
                                <p class="text-muted">Administrator</p>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-user"></i>
                                    </span>
                                </div>
                                <input class="form-control" type="text" placeholder="Username" id="txtUsername">
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-lock"></i>
                                    </span>
                                </div>
                                <input class="form-control" type="password" placeholder="Password" id="txtPassword">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0)" class="btn btn-primary px-4" id="btnLogin" onclick="prosesLogin()">Login</a>
                                </div>

                            </div>

                            <div style="margin-top:20px;">
                                SPK Topsis - Pemilihan Kost by <strong>Jepnidah Hasibuan</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('layout.footerLoginAdmin')