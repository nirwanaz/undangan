<!DOCTYPE html>
<html>
  <head>
    <meta name="google-signin-client_id" content="999073883271-07lr4het971bs8qeql0rif0oihsni22u.apps.googleusercontent.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <style>
      body {
        background: url('https://images.unsplash.com/photo-1551503766-ac63dfa6401c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');
        background-repeat: no-repeat;
        background-size: cover;
      }

      .btn-primary {
        background-color: #5000ac;
        border-color: #5000ac;
      }

      .btn-primary:hover {
        background-color: #ba00a1;
        border-color: #ba00a1;
      }
    </style>  
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center g-0">
        <div class="col-md-5 my-5">
          <div class="card py-2 shadow-sm" style="border-radius: .7rem; background-color: rgba(255,255,255, 0.6);">
            <div class="card-body py-5">
              <h3 class="text-center text-capitalize">sign in</h3>
              <form action="#" class="p-2">
                <div class="mb-3">
                  <label for="Email" class="form-label">Email / Username</label>
                  <input type="text" name="email" class="form-control">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control">
                </div>
                <div class="my-3 form-check">
                  <input type="checkbox" name="rememberme" class="form-check-input">
                  <label for="rememberme" class="form-check-label">Remember Me</label>
                </div>
                <div class="my-3">
                  <button type="button" class="btn btn-primary w-100 d-inline-block">Login</button>
                </div>
              </form>
              <div class="another-login">
                <h5 class="text-center text-uppercase">or</h5>
                <div class="g-signin2" data-onsuccess="onSignIn" data-width="auto" data-longtitle="true"></div>
              </div>
            </div>
          </div>
          
        </div>
        <div class="col-md-5 my-5">
          <div class="card text-light py-3 h-100" style="background-image: url('https://images.unsplash.com/photo-1536029058117-75fb5c1c4c46?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTB8fHdlZGRpbmclMjBwYXJ0eXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60');">
            <div class="card-body py-5">
              <h5 class="card-title text-uppercase my-3">new in here?</h5>
              <h3 class="card-title text-capitalize my-3">let's join us</h3>
              <p class="card-text my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat odio facilisis mauris sit amet. Lacinia quis vel eros donec. Nibh cras pulvinar mattis nunc sed blandit libero volutpat sed. Ac tortor dignissim convallis aenean</p>
              <button type="button" class="btn btn-light text-capitalize my-3 w-100">create account</button>
            </div>
          </div>
        </div>
      </div>
    </div>    
    <!-- SignOut -->
    <!-- <a href="#" onclick="signOut()">SignOut</a> -->

    <script>
      function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
      }

      function signOut() {
        let auth2 = gapi.auth2.getAuthInstance()
        auth2.signOut().then(function() {
          console.log('User signed out.')
        })
      }

    </script>
  </body>
</html>