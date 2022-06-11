
  /// allexam questions 
  function searchBlood() {
    $('.blood-content').html('Loading...');
    $.ajax({
      type: 'POST',
      url: './loginbackscript.php',
      data: {
        sBlood : 'sBlood',
      },
      success: function (response) {
        $('.blood-content').html(response);
        donarsList();
      },
    });
  }


  /// allexam questions 
  function registerBlood() {
    $('.blood-content').html('Loading...');
    $.ajax({
      type: 'POST',
      url: './loginbackscript.php',
      data: {
        rBlood : 'rBlood',
      },
      success: function (response) {
        $('.blood-content').html(response);
      },
    });
  }

  
  function  updateDonar(){
    var files = $('#donarUpdateForm')[0];
    var formData = new FormData(files);
    formData.append("donarUpdate",'donarUpdate');
    $('.donarUpdate-response').html('Registering...');
    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: './loginbackscript.php',
      data: formData,
      contentType: false,
      processData: false,
      success: function (response) {
        $('.donarUpdate-response').html(response);
      },
    });
  }

//filter
function donarsList(){
  
    var formData = {
      filterDistrict :  $('#filterDistrict').val(),
      filterBGroup :  $('#filterBGroup').val(),
      donarList : 'donarList',
    }
    
    $('.donarList-response').html('Loading...');
    $.ajax({
      type: 'POST',
      url: './loginbackscript.php',
      data: formData,
      success: function (response) {
        $('.donarList-response').html(response);
      },
    });
}  