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
            <h1 class="text-center mt-4">Search Results :</h1>
               
            <div class="row px-3 mt-4 ">
              <div class="col-md-8 mx-auto">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Select Blood Group</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
          <h1 class="text-center mt-4">Filter :</h1>
               
          <div class="mt-4 row px-3">
            <div class="col-md-8 mx-auto">
            <select class="form-select" aria-label="Default select example">
              <option selected>Select Area</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
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
          <tbody>
            <tr class="py-3">
              <td>Mark</td>
              <td>Ab -</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr class="py-3">
              <td>Mark</td>
              <td>Ab -</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr class="py-3">
              <td>Mark</td>
              <td>Ab -</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>

           </tbody>
        </table>
    </div>
    </div>';
}
/////search blood details 
if(isset($_POST['rBlood'])){
  
    echo '<div class="row">
    <div class="col-md-12 pt-3">
          <h1 class="mt-5 text-center">
             Registration Form !
          </h1>                   
      <div class="row mt-4 justify-content-center">
          <form class="col-md-8"action="">
              <div class="mb-3">
                      <label for="Email" class="form-label fw-bold">Select Blood Group :</label>
                      <select class="form-select" aria-label="Default select example">
                        <option selected>Select Blood Group</option>
                        <option value="1">A +</option>
                        <option value="2">A -</option>
                        <option value="3">B +</option>
                        <option value="3">B -</option>
                        <option value="3">O +</option>

                        <option value="3">O -</option>
                        <option value="3">AB +</option>
                        <option value="3">AB -</option>
                        
                      </select>
      
                  </div>
                <div class="mb-3">
                  <label for="Email" class="form-label fw-bold">Date Of Birth:</label>
                  <div class="row">
                      <div class="col-1 d-flex justify-content-center">
                          <i class="fal  fa-calendar-alt fa-2x"></i>
                      </div>
                     <div class="col-11">
                       <input type="date" name="" id="" class="form-control">
                     </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="Password" class="form-label fw-bold">Gender</label>
                  <div class="row">
                    <div class="col-4">
                      <label class="radio-inline mr-5"><input type="radio" name="optradio" checked>Male</label>

                    </div>
                    <div class="col-4">
                      <label class="radio-inline ml-5"><input type="radio" name="optradio">Female</label>

                    </div>
                    <div class="col-4">
                      <label class="radio-inline ml-5"><input type="radio" name="optradio">others</label>

                    </div>
                     </div>
                </div>
                <div class="mb-3">
                  <label for="Password" class="form-label fw-bold">Phone number</label>
                  <input type="number" class="form-control" id="Password" placeholder="Phone number">
                </div>
                <div class="mb-3">
                  <label for="Email" class="form-label fw-bold">District :</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Select Your District :</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
  
              </div>
                <div class="d-grid mt-5 gap-2">
                  <button class="btn join" type="button">Register</button>
                  <p class="text-center">By joining, you agree to the <span class="fw-bold">terms</span> and  <span class="fw-bold">privacy policy</span></p>
                </div>
          </form>
      </div>
    </div>             
</div>';
}