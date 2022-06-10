<?php
session_start();
include './include/config.php';

///Registration of the user
if(isset($_POST['donarRegistration'])){
  

  if (isset($_POST['fullName']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmPassword'])&& isset($_FILES['image'])) {
    if ($_POST['fullName'] != "" && $_POST['email'] != "" && $_POST['password'] != "" && $_POST['confirmPassword'] != "" ) {
          $fullName = $conn->real_escape_string($_POST['fullName']);
          $email = $conn->real_escape_string($_POST['email']);
          $password = $conn->real_escape_string($_POST['password']);
          $confirmPassword = $conn->real_escape_string($_POST['confirmPassword']);
          
          // ------------
          $image = $_FILES['image']['name'];
          $imageFile = $_FILES['image']['tmp_name'];
          $imageExt = strtolower(pathinfo($image, PATHINFO_EXTENSION));
          $imageName = strtolower($fullName . "_" . "Profile" . "." .$imageExt);
          $imagePath = "./assets/Profiles/" . ($imageName);
          //-------------
          $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'JPEG', 'PNG', 'JPG', 'jfif', 'svg');
        
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
          }else{          
              $checkExisting=mysqli_query($conn,"SELECT * FROM `users` WHERE `email`='$email'");
              if($checkExisting){
                  if(mysqli_num_rows($checkExisting)>0){
                      echo "Mail Already Exists !! Login";
                  }else{
                      if(!in_array($imageExt, $valid_extensions) ){
                          echo"Your Profile image extension must be 'jpeg', 'jpg', 'png', 'gif', 'JPEG', 'PNG', 'JPG', 'jfif', 'svg' ";
        
                      }elseif(move_uploaded_file($imageFile,$imagePath)){
                        $finalPassword=md5($password);
                          $insertQuery=mysqli_query($conn,"INSERT INTO `users`(`fullName`, `email`, `password`, `image`,`status`) VALUES ('$fullName','$email','$finalPassword','$imageName',1)")  ;
                          // echo mysqli_error($conn);
                          if($insertQuery){
                            echo '<p class="text-success"><i class="fas fa-exclamation-circle"></i>Registration Successful</p>';
                            }else{
                              echo '<p class="text-danger"><i class="fas fa-exclamation-circle"></i>Failed TryAgain</p>';
                            }
                      }else{
                      unlink("./assets/Profiles/$imageName");
                      mysqli_query($conn,"DELETE FROM `users` WHERE `email`='$email'");
                      echo "Failed to Upload Try again";
                      }
                    }
              }else{
                echo '<p class="text-danger"><i class="fas fa-exclamation-circle"></i>Try Again Later</p>';
              }
          }
    }else{ 
        echo '<p class="text-danger"><i class="fas fa-exclamation-circle"></i>Failed Try Again</p>'; 
    }   
  }else {
        echo '<p class="text-danger"><i class="fas fa-exclamation-circle"></i> All fields must be filled</p>';
  }  
}
///User Login
if(isset($_POST['donarLogin'])){
	if (!isset($_POST['userEmail']) || $_POST['userEmail'] == "" || !isset($_POST['userPassword']) || $_POST['userPassword'] == "") {
		echo "All fields must be filled!";
	}else {

		$UserName = $conn -> real_escape_string($_POST['userEmail']);
		$Password = md5($conn -> real_escape_string($_POST['userPassword']));
		
		
		// Login Type Check
		
			$Login = mysqli_query($conn,"SELECT * FROM `users` WHERE `email` = '$UserName'");
			if (mysqli_num_rows($Login) == 1) {
				$LoginRow = mysqli_fetch_array($Login);
				// If the password inputs matched the hashed password in the database
				
				if($Password==$LoginRow['password']) {
					$_SESSION['sess_user'] = $LoginRow['email'];
					echo  "Logged";
          

				}else{
          echo "Wrong Credentials";
				} 
      }else{
        echo "Wrong Credentials";
      }
  }
}
?>