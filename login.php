
<div class="row">
  <div data-aos="slide-up" data-aos-delay="500" data-aos-duration="1000"  class="col-md-6 mt-md-5 pt-3">
      <div>
        <h1 class="mt-5 text-center">
            Welcome Back!
        </h1>
        <p class="text-center">Login to continue</p>
    <div class="row mt-4 justify-content-center">
        <form class="col-md-8" id="donarLoginForm">
            
              <div class="mb-3">
                <label for="Email" class="form-label fw-bold">Email address</label>
                <input type="email" class="form-control"  name="userEmail" id="userEmail" placeholder="Youremail@gmail.com">
              </div>
              <div class="mb-3">
                <label for="Password" class="form-label fw-bold">Enter your password</label>
                <input type="password" class="form-control" name="userPassword" id="userPassword" placeholder="Enter your Password">
              </div>
              <div class="mb-3 Forgot">
                  <div class="login-response text-danger"></div>
                  <a href="#"class="" onclick="ajaxForgotPageCall()">Forgot password?</a>
              </div>
             
              <div class="d-grid mt-5 gap-2">
                <a class="btn mb-3 join" href="#" onclick="donarLogin()" type="button">Sign In</a>
                <p class="text-center">New User ? <a onclick="ajaxRegisterPageCall()" href="#">SignUp</a></p>
              </div>
        </form>
    </div>
    </div>
  </div>
  <div class="col-md-6 align-items-center d-flex">
      <div>
          <img data-aos="slide-down" data-aos-delay="500" data-aos-duration="1000" src="./assets/images/Hopital1.png" width="100%" height="100%" alt="">
          <p class="text-center">You don't have to somebody's family to donate blood</p>
          </div>
  </div>
  <div class="col-md-12">
      <p class="text-center">Copyright Reserved @ 2022</p>
  </div>
</div>