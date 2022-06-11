
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

