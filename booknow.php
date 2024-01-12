<?php include('include/config.php'); ?>
<?php include('include/header.php'); ?>
<style>
.error{color:red;}
#book_now{
    padding:100px 0;
}
.all-page-banner.item-one {
    background-image: url(https://www.hyundai.com/content/dam/hyundai/in/en/data/connect-to-service/pc-service-bookingimage_2_1800x540.jpg);
}
</style>
        <!-- End Navbar Area -->
  
        <!-- Start SearchBox Modal -->
        <!-- <div class="search">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" class="form-control" placeholder="Type Here..." />
                <button type="submit" class="btn theme-btn"><i class="fa fa-search"></i> Search</button>
            </form>
        </div> -->
        <!-- End SearchBox Modal -->

        <!-- Start All Page Banner -->
        <section class="all-page-banner item-one">
            <div class="d-table">
                <div class="d-tablecell">
                    <div class="container">
                        <div class="banner-text text-center">
                            <h1>Book Service</h1>
                            <ul>
                                <li>
                                    <a style="color:#fff;" href="index.html">home</a>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </li>
                                <li>Book Service</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End All Page Banner -->

        <!-- Start Recently Added -->
        <section id="book_now" class="appoinment-section py-5 my-5">
            <div class="container">
                <div class="appoinment-wrapper">
                    <div class="row">   
                        <div class="col-lg-6">
                            <div class="appoinment-bg">
                                <div class="d-table">
                            
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="appoinment-form">
							<?php 
							
							?>
                                <form action="process.php" method="POST" id="booknow">
								<input type="hidden" name="action" value="booknow">
                                    <div class="form-group">
                                        <input type="text" name="names" class="form-control" placeholder="name *" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="email *" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" placeholder="phone" required>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control custom-select mr-sm-2 mb-0" id="servicecenter" name="servicecenter" required>
                                            <option value="0" selected="selected">Location </option>
                                                <option value="Mukesh Hyundai Serampore Service Centre">Mukesh Hyundai Serampore Service Centre</option>
                                                <option value="Mukesh Hyundai VIP Service Centre">Mukesh Hyundai VIP Service Centre</option>
                                                <option value="Mukesh Hyundai Khidirpur Service Centre">Mukesh Hyundai Khidirpur Service Centre</option>
                                               <option value="Mukesh Hyundai Gouripur, Birati Service Centre">Mukesh Hyundai Gouripur, Birati Service Centre</option>
                                               <option value="Mukesh Hyundai Chetla Service Centre">Mukesh Hyundai Chetla Service Centre</option>
                                               <option value="Mukesh Hyundai Kidderpore Service Centre">Mukesh Hyundai Kidderpore Service Centre</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="hyundai_value" style="display: none;" required>
                                            <option value="0" selected="selected">Car Model </option>
                                            <option value="Hyundai i20 N Line">Hyundai i20 N Line</option>
                                            <option value="Alcazar">Hyundai Alcazar</option>
                                            <option value="Hyundai i20">Hyundai i20</option>
                                            <option value="Hyundai Creta">Hyundai Creta</option>
                                            <option value="Hyundai Grand i10 NIOS">Hyundai Grand i10 NIOS</option>
                                            <option value="Hyundai Aura">Hyundai Aura</option>
                                            <option value="Hyundai Venue">Hyundai Venue</option>
                                            <option value="Hyundai Verna">Hyundai Verna</option>
                                            <option value="Hyundai Tucson">Hyundai Tucson</option>
                                             <option value="Hyundai Tucson">Hyundai Venue N-Line</option>
                                             <option value="Hyundai Tucson">Hyundai Kona Electric</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="type_of_service" style="display: none;" required>
                                            <option value="0" selected="selected">Type of Service</option>
                                            <option value="First_Service">First Service</option>
                                            <option value="Second_Service">Second Service</option>
                                            <option value="Third_Service">Third Service</option>
                                            <option value="Paid_Service">Paid Service</option>
                                            <option value="Running_Maintenance">Running Maintenance</option>
                                            <option value="Accidental_Repair">Accidental Repair</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="registration_number" class="form-control" placeholder="Registration Number" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Description"></textarea>
                                    </div>
                                    <button type="submit" class="custom-btn2">send message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Recently Added -->

        <!-- Start Latest Motors -->
        <!-- End Latest Motors -->


<?php include('include/footer.php'); ?>