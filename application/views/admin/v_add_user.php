    <div class="page-wrapper">
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30 d-flex justify-content-center">
                    <div class="card w-75">
                        <div class="card-header">
                            <strong>create membership</strong> Form
                        </div>
                        <div class="card-body card-block">
                            <form method="post">
                                <div class="form-group row">
                                    <div class="col-md">
                                        <label for="nf-text" class=" form-control-label">First Name</label>
                                        <input type="text" name="firstname" 
                                        placeholder="Please enter first name" class="form-control">
                                    </div>
                                    <div class="col-md">
                                        <label for="nf-text" class=" form-control-label">Last Name</label>
                                        <input type="text" name="lastname" 
                                        placeholder="Please enter last name" class="form-control">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="nf-email" class=" form-control-label">Email</label>
                                    <input type="text" name="email" 
                                    placeholder="Please enter email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nf-password" class=" form-control-label">Password</label>
                                    <input type="password" name="password" 
                                    placeholder="Please enter password" class="form-control">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary btn-sm submit">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <script>
        $('.submit').on('click', function () {
            const data = new FormData()
            const firstname = $("input[name=firstname]").val()
            const lastname = $("input[name=lastname]").val()
            const email = $("input[name=email]").val()
            const passwd = $("input[name=password]").val()

            data.append('firstname', firstname)
            data.append('lastname', lastname)
            data.append('email', email)
            data.append('passwd', passwd)
            
            $.ajax({
                // Server to process the submit
                url: 'store',
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
