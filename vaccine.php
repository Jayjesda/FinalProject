<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>แก้ไขข้อมูลส่วนตัว</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
      <?php include_once('includes/navbar.php');?>
        <div id="layoutSidenav">
          <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12">
          <div class="alert alert-info" role="alert">
            <h3>แบบฟอร์มลงทะเบียนฉีดวัคซีนโควิด จังหวัดหนองคาย</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12">
          <form action="https://devbanban.com/?p=2867" method="post">
            <h5>กรุณากรอกข้อมูลให้ครบทุกช่อง</h5>
 
            <div class="row">
              <div class="col-12 col-sm-6 mb-3">
                <select name="address" class="form-control" required>
                  <option value="">อำเภอ</option>
                    <option value="เมืองหนองคาย">เมืองหนองคาย</option>
                  <option value="สระใคร">สระใคร</option>
                  <option value="ท่าบ่อ">ท่าบ่อ</option>
                  <option value="โพนพิสัย">โพนพิสัย</option>
                  <option value="โพธิ์ตาก">โพธิ์ตาก</option>
                  <option value="ศรีเชียงใหม่">ศรีเชียงใหม่</option>
                  <option value="เฝ้าไร่">เฝ้าไร่</option>
                  <option value="รัตนวาปี">รัตนวาปี</option>
                  <option value="สังคม">สังคม</option>
                </select>
              </div>
              <div class="col-12 col-sm-6 mb-3">
                <input type="text"  name="stdcode" class="form-control" placeholder="ตำบล"  minlength="5" maxlength="45" required>
              </div>
            </div>
 
 
            <div class="row">
              <div class="col-12 col-sm-2 mb-3">
                <select name="firstname" class="form-control" required>
                  <option value="">คำนำหน้าชื่อ</option>
                  <option value="นาย">นาย</option>
                  <option value="นางสาว">นางสาว</option>
                </select>
              </div>
              <div class="col-12 col-sm-4 mb-3">
                <input type="text"  name="name" class="form-control" placeholder="ชื่อ" required> 
              </div>
              <div class="col-12 col-sm-6 mb-3">
                <input type="text" name="lastname" class="form-control" placeholder="นามสกุล" required>
              </div>
            </div>
 
             <div class="row">
              <div class="col-12 col-sm-6 mb-3">
                <input type="text"  name="phone" class="form-control" placeholder="เบอร์โทรศัพท์ 10 หลัก" minlength="10" maxlength="10"  required> 
              </div>

              <div class="col-12 col-sm-6 mb-3">
                <input type="text"  name="Idcard" class="form-control" placeholder="เลขบัตรประจำตัวประชาชน" minlength="13" maxlength="13"  required> 
              </div>

            </div>

            

            
            <div class="row">
              <div class="col-12 col-sm-6 mb-3">
                <select name="vaccinechoice" class="form-control" required>
                  <option value="">วัคซีนที่ต้องการรับ</option>
                    <option value="mRNA Vaccine">mRNA Vaccine</option>
                  <option value="Moderna">Moderna</option>
                  <option value="Pfizer">Pfizer</option>
                  <option value="Sinopharm">Sinopharm</option>
                  <option value="AstraZeneca">AstraZeneca</option>
                  <option value="Sinovac">Sinovac</option>
                </select>
              </div>

             <div class="row">
              <div class="col-12 col-sm-6 mb-3">
                <select name="numbervaccine" class="form-control" required>
                  <option value="">เข็มที่่</option>
                 <option value="1">1</option>
                  <option value="2">2</option>
                
                </select>
            </div>
              
              
 
 
            <div class="row">
              <div class="col-12 col-sm-12">
               <button type="submit" class="btn btn-primary" style="width: 100%;">บันทึกข้อมูล</button> 
                <br>
                <br>
                <br>
                
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
 
 
    <footer>
      <p class="text-center" style="margin-top: 100px;">
      ระบบลงทะเบียนฉีดวัคซีน 
      องการบริหารส่วนจังหวัดหนองคาย
      <br>
    </p>
    
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
                        </div>
              
                        </div>
                   
                    </div>
                </main>
          <?php include('includes/footer.php');?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
  </body>
</html>