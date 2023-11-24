<?php include('include/config.php'); ?>
<?php include('include/header.php'); ?>
<style>
.error{color:red;}
.all-page-banner.item-one {
    background-image: url(https://www.hyundai.com/content/dam/hyundai/in/en/images/ClicktoBuy/all-car-range-image-pc.jpg);
}
</style>
        <!-- Start All Page Banner -->
        <section class="all-page-banner item-one">
            <div class="d-table">
                <div class="d-tablecell">
                    <div class="container">
                        <div class="banner-text text-center">
                            <h1>Test Drive</h1>
                            <ul>
                                <li>
                                    <a style="color:#fff;" href="index.html">home</a>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </li>
                                <li>Test Drive</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End All Page Banner -->

        <!-- Start Recently Added -->
        <section class="appoinment-section py-5">
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
							if(isset($_SESSION['success']))
							{
								echo '<p style="color:green">'.$_SESSION['success'].'</p>';
								unset($_SESSION['success']);
							}
							?>
                               <form action="process.php" method="POST" id="booknow">
							   <input type="hidden" name="action" value="testdrive">
                                    <div class="form-group">
                                        <input type="text" name="names" class="form-control" placeholder="name *" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="email *" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" placeholder="phone *" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="address" class="form-control" placeholder="Address *" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Date *</label>
                                        <input style="width: 100%; padding: 10px 10px 10px 14px;" type="date" id="cars" name="date" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Time *</label>
                                        <input style="width: 100%; padding: 10px 10px 10px 14px;" type="time" id="carsti" name="time" required>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="preferred_outlet" required>
                                            <option data-display="Preferred Outlet *">Preferred Outlet</option>
                                            <option value="VIP">Mukesh Hyundai VIP Showroom</option>
                                            <option value="Khardah">Mukesh Hyundai Khardah Showroom</option>
                                            <option value="SERAMPORE">Mukesh Hyundai SERAMPORE Showroom</option>
                                            <option value="Birati">Mukesh Hyundai Birati Showroom</option>
                                            <option value="HAZRA">Mukesh Hyundai HAZRA Showroom</option>
                                            <option value="Guwahati">Mukesh Hyundai Guwahati Showroom</option>
                                            <option value="Bijoynagar">Mukesh Hyundai Bijoynagar Showroom</option>
                                            <option value="Rangia">Mukesh Hyundai Rangia Showroom</option>
                                            <option value="Barpeta">Mukesh Hyundai Barpeta Showroom</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="car" required>
                                            <option data-display="Car Model *">Car</option>
                                            <option value="Hyundai i20 N Line">Hyundai i20 N Line</option>
                                            <option value="Alcazar">Hyundai Alcazar</option>
                                            <option value="Hyundai i20">Hyundai i20</option>
                                            <option value="Hyundai Creta">Hyundai Creta</option>
                                            <option value="Hyundai Grand i10 NIOS">Hyundai Grand i10 NIOS</option>
                                            <option value="Hyundai Aura">Hyundai Aura</option>
                                            <option value="Hyundai Venue">Hyundai Venue</option>
                                            <option value="Hyundai Verna">Hyundai Verna</option>
                                            <option value="Hyundai Tucson">Hyundai Tucson</option>
                                            <option value="Hyundai Tucson">Hyundai Venue N Line</option>
                                             <option value="Hyundai Tucson">Hyundai Kona Electric</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="pincode" class="form-control" placeholder="Test Drive Pincode *" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="message" required></textarea>
                                    </div>
                                    <button type="submit" class="custom-btn2">send message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php include('include/footer.php'); ?>