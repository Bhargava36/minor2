<?PHP
include './../include/config.php';
session_start();
if (isset($_SESSION['sess_user']))
{
    $active_user = $_SESSION['sess_user'];
}
$user=mysqli_query($conn,"SELECT * FROM `users` WHERE `email` ='$active_user'");
$row=mysqli_fetch_array($user);
?>
          <div class="row mb-5" >
              <div data-aos="slide-right" data-aos-duration="1000" data-aos-delay="300" class="col-md-3 border border-right-primary ">
                 <div class="d-flex justify-content-center"><img src="./../assets/Profiles/<?php echo htmlentities($row['image']) ?>" class="mt-5 mx-auto rounded-circle profile" height="280px" width="90%" alt=""></div>
                   <h2 class="text-center mt-4"><?php echo htmlentities($row['fullName']) ?></h2>
                   <div class="d-grid mt-4 gap-2">
                    <a class="btn btn-info mb-3 " type="button" href="../logout.php">Logout</a>
                    
                  </div>
              </div>
              <div class="col-md-9 border " data-aos="slide-left" data-aos-duration="1200" data-aos-delay="300">
                  <div class="row border border-end-0 border-top-0 border-start-0">
                      <div class="col-md-6">
                          <h2 class="text-center mt-4">In Need of blood ?</h2>
                             
                          <div class="row px-3 mt-4 ">
                            <a href="#" onclick="searchBlood()" class="btn col-md-6 mx-auto join mb-4 " type="button">Find Blood</a>
                          </div>
                      </div>
                      <div class="col-md-6">
                        <h2 class="text-center donate mt-4">Ready To Donate Blood ?</h2>
                             
                        <div class="mt-4 row px-3">
                          <a href="#"  onclick="registerBlood()" class="btn col-md-6 mx-auto join mb-4 ">Register To Donate</a>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-12 d-flex justify-content-center mx-auto blood-content ">
                      <img src="./../assets/images/Hopital1.png" width="100%"height="600px">
                  </div>
              </div>
          </div>
        