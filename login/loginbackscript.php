<?PHP
include './../include/config.php';
session_start();
if (isset($_SESSION['sess_user']))
{
    $active_user = $_SESSION['sess_user'];
}
//search blood details 
if(isset($_POST['sBlood'])){
  
    echo '
    <div class="col-md-12  border">
    <div class="row pb-5  border border-end-0 border-top-0 border-start-0">
        <div class="col-md-6">
           
               
            <div class="row align-items-center px-3 mt-4 ">
           <div class="col-md-4 mt-5"><h5 class="text-center mt-4">Search Results :</h5></div>
              <div class="col-md-8 mt-md-5 mx-auto">
                <select id="filterBGroup" onchange="donarsList()" class="form-select" aria-label="Default select example">
                  <option value="" selected>Select Blood Group</option>
                  <option value="A +">A +</option>
                  <option value="A -">A -</option>
                  <option value="B +">B +</option>
                  <option value="B -">B -</option>
                  <option value="O +">O +</option>
                  <option value="O -">O -</option>
                  <option value="AB +">AB +</option>
                  <option value="AB -">AB -</option>
                </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
          
               
          <div class="mt-4 row align-items-center px-3">
          <div class="col-md-4 mt-5"><h5 class="text-center mt-4">Search Results :</h5></div>
            <div class="col-md-8 mt-md-5 mx-auto">
            <select id="filterDistrict" onchange="donarsList()" class="form-select" name="district" aria-label="Default select example">
                    <option value="" selected>Select Your District :</option>
                    <option value="Rangareddy">Rangareddy</option>
                    <option value="East Godavari">East Godavari</option>
                    <option value="Krishna">Krishna</option>
                    <option value="Visakhapatnam">Visakhapatnam</option>
                    <option value="Chittoor">Chittoor</option>
                    <option value="Anantapur">Anantapur</option>
                    <option value="Kurnool">Kurnool</option>
                    <option value="Mahbubnagar">Mahbubnagar</option>
                    <option value="Hyderabad">Hyderabad</option>
                    <option value="West Godavari">West Godavari</option>
                    <option value="Karimnagar">Karimnagar</option>
                    <option value="Warangal">Warangal</option>
                    <option value="Nalgonda">Nalgonda</option>
                    <option value="Prakasam">Prakasam</option>
                    <option value="Medak">Medak</option>
                    <option value="Sri Potti Sriramulu Nellore">Sri Potti Sriramulu Nellore</option>
                    <option value="YSR">YSR</option>
                    <option value="Khammam">Khammam</option>
                    <option value="Adilabad">Adilabad</option>
                    <option value="Srikakulam">Srikakulam</option>
                    <option value="Nizamabad">Nizamabad</option>
                    <option value="Vizianagaram">Vizianagaram</option>
                  </select>
            </div>
          </div>
        </div>
    </div>
    <div class="col-md-12 mt-5 d-flex  list justify-content-center mx-auto">
      <table class="table table-striped table-hover">
          <thead>
            <tr class="py-3">
              <th scope="col">Name</th>
              <th scope="col">Blood Group</th>
              
              <th scope="col">Phone Number</th>
              <th scope="col">Address</th>
            </tr>
          </thead>
          <tbody class="donarList-response" >
          

          </tbody>
        </table>
    </div>
    </div>';
}
/////search blood details 
if(isset($_POST['rBlood'])){
    echo '
    <div class="col-md-12">
          <h1 class="mt-5 text-center">
             Registration Form !
          </h1>                   
      <div class="row mt-4 justify-content-center">
          <form id="donarUpdateForm" class="col-md-8">
              <div class="mb-3">
                      <label for="Email" class="form-label fw-bold">Select Blood Group :</label>
                      <select class="form-select" name="bgroup" id="bgroup" aria-label="Default select example">
                        <option selected>Select Blood Group</option>
                        <option value="A +">A +</option>
                        <option value="A -">A -</option>
                        <option value="B +">B +</option>
                        <option value="B -">B -</option>
                        <option value="O +">O +</option>
                        <option value="O -">O -</option>
                        <option value="AB +">AB +</option>
                        <option value="AB -">AB -</option>
                      </select>
                  </div>
                <div class="mb-3">
                  <label for="" class="form-label fw-bold">Date Of Birth:</label>
                  <div class="row">
                      <div class="col-1 d-flex justify-content-center">
                          <i class="fal  fa-calendar-alt fa-2x"></i>
                      </div>
                     <div class="col-11">
                       <input type="date" name="date" id="date" class="form-control">
                     </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="Password" class="form-label fw-bold">Gender</label>
                  <div class="row">
                    <div class="col-4">
                      <label class="radio-inline mr-5"><input type="radio" value="Male" name="gender" checked>Male</label>

                    </div>
                    <div class="col-4">
                      <label class="radio-inline ml-5"><input type="radio" value="Female" name="gender">Female</label>

                    </div>
                    <div class="col-4">
                      <label class="radio-inline ml-5"><input type="radio" value="Others" name="gender">others</label>

                    </div>
                     </div>
                </div>
                <div class="mb-3">
                  <label for="Password" class="form-label fw-bold">Phone number</label>
                  <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone number">
                </div>
                <div class="mb-3">
                  <label for="Email" class="form-label fw-bold">District :</label>
                  <select class="form-select" name="district" aria-label="Default select example">
                    <option selected>Select Your District :</option>
                    <option value="Rangareddy">Rangareddy</option>
                    <option value="East Godavari">East Godavari</option>
                    <option value="Krishna">Krishna</option>
                    <option value="Visakhapatnam">Visakhapatnam</option>
                    <option value="Chittoor">Chittoor</option>
                    <option value="Anantapur">Anantapur</option>
                    <option value="Kurnool">Kurnool</option>
                    <option value="Mahbubnagar">Mahbubnagar</option>
                    <option value="Hyderabad">Hyderabad</option>
                    <option value="West Godavari">West Godavari</option>
                    <option value="Karimnagar">Karimnagar</option>
                    <option value="Warangal">Warangal</option>
                    <option value="Nalgonda">Nalgonda</option>
                    <option value="Prakasam">Prakasam</option>
                    <option value="Medak">Medak</option>
                    <option value="Sri Potti Sriramulu Nellore">Sri Potti Sriramulu Nellore</option>
                    <option value="YSR">YSR</option>
                    <option value="Khammam">Khammam</option>
                    <option value="Adilabad">Adilabad</option>
                    <option value="Srikakulam">Srikakulam</option>
                    <option value="Nizamabad">Nizamabad</option>
                    <option value="Vizianagaram">Vizianagaram</option>
                    
                  </select>
              <div class="text-danger donarUpdate-response"></div>
              </div>
                <div class="d-grid mt-5 gap-2">'; ?>
                  <button class="btn join" onclick="updateDonar()" type="button">Register</button>
                  <?php echo '<p class="text-center">By joining, you agree to the <span class="fw-bold">terms</span> and  <span class="fw-bold">privacy policy</span></p>
                </div>
          </form>
      </div>
    </div>';
}

////update Donar details
if(isset($_POST['donarUpdate'])){
  if(isset($_POST['bgroup']) && !empty($_POST['bgroup']) && isset($_POST['date']) && !empty($_POST['date']) && isset($_POST['gender']) && !empty($_POST['gender']) && isset($_POST['phoneNumber']) && !empty($_POST['phoneNumber']) && isset($_POST['district']) && !empty($_POST['district'])){
    $bgroup = $conn -> real_escape_string($_POST['bgroup']);
    $date = $conn -> real_escape_string($_POST['date']);
    $gender = $conn -> real_escape_string($_POST['gender']);
    $phoneNumber = $conn -> real_escape_string($_POST['phoneNumber']);
    $district = $conn -> real_escape_string($_POST['district']);
    $sql=mysqli_query($conn,"UPDATE `users` SET `bloodGroup`='$bgroup',`doB`='$date',`gender`='$gender',`phoneNo`='$phoneNumber',`district`='$district',`status`='2' WHERE `email`= '$active_user'");
    if($sql){
      echo "Registered";
    }else{
      echo "Try Again Later";
    }
  }else{
    echo "All Fields must be filled";
  }
}

if(isset($_POST['donarList']) && isset($_POST['filterDistrict']) && isset($_POST['filterBGroup'])){

  if($_POST['filterDistrict']=='' && $_POST['filterBGroup']==''){
    $donars=mysqli_query($conn,"SELECT * FROM `users` WHERE `email` != '$active_user' AND `status`='2' ");
  }elseif($_POST['filterDistrict'] != '' && $_POST['filterBGroup']==''){
    $district = $conn -> real_escape_string($_POST['filterDistrict']);
    $donars=mysqli_query($conn,"SELECT * FROM `users` WHERE `email` != '$active_user' AND `status`='2' AND `district` ='$district' ");
  }elseif($_POST['filterDistrict'] == '' && $_POST['filterBGroup']!=''){
    $bgroup = $conn -> real_escape_string($_POST['filterBGroup']);
    $donars=mysqli_query($conn,"SELECT * FROM `users` WHERE `email` != '$active_user' AND `status`='2' AND `bloodGroup` ='$bgroup' ");
  }else{
    $bgroup = $conn -> real_escape_string($_POST['filterBGroup']);
    $district = $conn -> real_escape_string($_POST['filterDistrict']);
    $donars=mysqli_query($conn,"SELECT * FROM `users` WHERE `email` != '$active_user' AND `status`='2' AND `bloodGroup` ='$bgroup' AND `district` ='$district' ");
    // echo mysqli_error($conn);
  }
          if(mysqli_num_rows($donars)>0){
            while($row=mysqli_fetch_array($donars)){?>
            <tr class="py-3">
              <td><?php echo htmlentities($row['fullName']) ?></td>
              <td><?php echo htmlentities($row['bloodGroup']) ?></td>
              <td><a href="tel:$row['phoneNo']" class="btn"><?php echo htmlentities($row['phoneNo']) ?></a></td>
              <td><?php echo htmlentities($row['district']) ?></td>
            </tr>
      <?php } 
          }else{ ?>
            <tr class="py-3">
              <td>No Donars Found</td>
            </tr>
         <?php }   
               
}

if(isset($_POST['updatestatus'])){
  $quer=mysqli_query($conn,"SELECT * FROM `users` WHERE `email`= '$active_user'");
  if(mysqli_num_rows($quer)>0){
    $row=mysqli_fetch_array($quer);
    if($row['status']=='1'){
      $sql="UPDATE `users` SET `status` = '2' WHERE `email`= '$active_user'";

    }else if($row['status']=='2'){
      $sql="UPDATE `users` SET `status` = '1' WHERE `email`= '$active_user'";
    }else{
      echo "Error Occured !!!Contact Mr.Ashok";
    }
    $query=mysqli_query($conn,$sql);
  }
  
}