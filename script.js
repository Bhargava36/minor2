// Landing Page Call
function ajaxLandingPageCall() {
    $.ajax({
      url: './landingpage.php',
      success: function (response) {
        $('.main-content').html(response);
      },
    });
  }

  // about  Page Call
function ajaxAboutPageCall() {
    $.ajax({
      url: './about.php',
      success: function (response) {
        $('.main-content').html(response);
      },
    });
  }
    // Contact  Page Call
function ajaxContactPageCall() {
    $.ajax({
      url: './contact.php',
      success: function (response) {
        $('.main-content').html(response);
      },
    });
  }
// Loginpage  Page Call
function ajaxLoginPageCall() {
    $.ajax({
      url: './login.php',
      success: function (response) {
        $('.main-content').html(response);
      },
    });
  }
// Register  Page Call
function ajaxRegisterPageCall() {
    $.ajax({
      url: './Registration.php',
      success: function (response) {
        $('.main-content').html(response);
      },
    });
  }
  //forgotpassword page call
  function ajaxForgotPageCall(){
    $.ajax({
      url: './forgotpassword.php',
      success: function (response) {
        $('.main-content').html(response);
      },
    });
  }
  
  // Account  Page Call
function ajaxaccountPageCall() {
  $.ajax({
    url: './accountpage.php',
    success: function (response) {
      $('.account-content').html(response);
    },
  });
}

/////Donar registration
function  donarRegistration(){
    var files = $('#donarRegistrationForm')[0];
    var formData = new FormData(files);
    formData.append("donarRegistration",'donarRegistration');
    $('.Registring-response').html('Registering...');
    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: './backscript.php',
      data: formData,
      contentType: false,
      processData: false,
      success: function (response) {
        $('.Registring-response').html(response);
      },
    });
  }
  //donar login
  function  donarLogin(){
    var files = $('#donarLoginForm')[0];
    var formData = new FormData(files);
    formData.append("donarLogin",'donarLogin');
    $('.login-response').html('Logging...');
    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: './backscript.php',
      data: formData,
      contentType: false,
      processData: false,
      success: function (response) {
        $('.login-response').html(response);
        if(response==="Logged"){
          window.location.href="http://localhost/minor2/login/useraccountpage.php";
        }
       
      },
    });
  }

