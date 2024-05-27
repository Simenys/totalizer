
<!-- Header -->
<?php
    include "includes/header.php";
?>

<!-- Create new accound -->
<form class="form" id="reg-form">
  <!-- Login 2 - Bootstrap Brain Component -->
<div class="bg-light py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
        <div class="bg-white p-4 p-md-5 rounded shadow-sm">
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <h3>Create account</h3>
              </div>
            </div>
          </div>
          <form action="#!">
            <div class="row gy-3 gy-md-4 overflow-hidden">
                <div class="col-12">
                <label for="email" class="form-label">Username <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
              <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
              </div>
              <div class="col-12">
                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password" id="password" value="" required>
              </div>

              <!-- JS check if al requirements are met on pasword -->
              <div>
                <ul>
                    <div class="check-mark-list">
                        <li>At least 8 characters</li><img class="check-mark red-mark" src="layout/exclamation-triangle.svg" alt="failed_check_mark"><img class="check-mark green-mark" src="layout/check-circle.svg" style="display: none" alt="pass_check_mark">
                    </div>
                    <div class="check-mark-list">
                        <li>A mix of upper-case and lower-case characters</li><img class="check-mark red-mark" src="layout/exclamation-triangle.svg" alt="failed_check_mark"><img class="check-mark green-mark" src="layout/check-circle.svg" style="display: none" alt="pass_check_mark">
                    </div>
                    <div class="check-mark-list">
                        <li>At least one number</li><img class="check-mark red-mark" src="layout/exclamation-triangle.svg" alt="failed_check_mark"><img class="check-mark green-mark" src="layout/check-circle.svg" style="display: none" alt="pass_check_mark">
                    </div>
                    <div class="check-mark-list">
                        <li>At least one special character e.g - !&*</li><img class="check-mark red-mark" src="layout/exclamation-triangle.svg" alt="failed_check_mark"><img class="check-mark green-mark" src="layout/check-circle.svg" style="display: none" alt="pass_check_mark">
                    </div>
                </ul>
              </div>

              <div class="col-12">
                <div class="d-grid">
                  <button class="btn btn-lg btn-primary" type="submit">Create</button>
                </div>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>





<!-- Footer -->
<?php
    include "includes/footer.php";
?>