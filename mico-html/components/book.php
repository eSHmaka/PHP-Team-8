<section class="book_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col">
          <form method="POST" action="bookingSubmitPage.php">
            <h4>
              BOOK <span>APPOINTMENT</span>
            </h4>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPatientName">Patient Name </label>
                <input name="patient_name" type="text" class="form-control" id="inputPatientName" placeholder="Name" required>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDoctorName">Doctor's Name</label>
                <select name="doctor_name" class="form-control wide" id="inputDoctorName">
                  <?php 
                    $i = 0;
                    while ($i < count($Doctors)) {
                      echo '<option value="'. $Doctors[$i]. '">'. $Doctors[$i]. '</option>';
                      $i++;
                    }
                  ?>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDepartmentName">Department's Name</label>
                <select name="department_name" class="form-control wide" id="inputDepartmentName">
                  <?php
                    $i = 0; 
                    do {
                      echo '<option value="'. $Departments[$i]. '">'. $Departments[$i]. '</option>';
                      $i++;
                    } while ($i < sizeof($Departments));
                  ?>
                </select>
              </div>
            </div>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPhone">Phone Number</label>
                <input type="number" name="phone_number" class="form-control" id="inputPhone" placeholder="XXXXXXXXXX" required>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputSymptoms">Symptoms</label>
                <input type="text" name="symptoms" class="form-control" id="inputSymptoms" placeholder="ვკვდები" required>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDate">Choose Date </label>
                <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                  <input name="date" type="text" class="form-control" readonly>
                  <span class="input-group-addon date_icon">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="btn-box">
              <button type="submit" class="btn ">Submit Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>