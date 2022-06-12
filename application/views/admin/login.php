
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                             <p>logo iniundanganmu.com</p>   <!-- <img src="<?= base_url() ?>assets/images/icon/logo.png" alt="CoolAdmin">   -->
                            </a>
                        </div>
                        <div class="login-form">
                            <form id="login">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <!-- <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div> -->
                                <button class="au-btn au-btn--block au-btn--green m-b-20 submit" type="button">sign in</button>
                                <!-- <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                                    </div>
                                </div> -->
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        $('.submit').on('click', function () {
            const data = new FormData()
            const username = $("input[name=username]").val()
            const password = $("input[name=password]").val()

            data.append('username', username)
            data.append('passwd', password)
            
            $.ajax({
                // Server to process the submit
                url: 'admin/auth',
                type: 'post',

                // Form Data
                data: data,
                cache: false,
                contentType: false,
                processData: false,

                success: function (res) {
                    let response = JSON.parse(res)
                    if (response.success) {
                        window.location.reload()
                    } else {
                        alert(response.msg)
                    }
                }
            })
        })

    </script>

