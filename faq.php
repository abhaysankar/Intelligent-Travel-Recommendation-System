<?php
include("header.php");
include('connection.php');
?>

<style>
a{
    font-family: "Poppins", sans-serif;
    font-size: 17px; !importnat
}
.navbar-light .navbar-nav .nav-link {
    padding: 30px 16px;
    color: #212121;
    font-weight: 600;
    outline: none;
}
    </style>

<!-- Packages Start -->
<div class="container-fluid py-5">
    <link href="assets/css/style.css" rel="stylesheet">

    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">F.A.Q</h6>
            <h1>Frequently Asked Question</h1>
        </div>

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">
                <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">
                    <?php
                    $sel = mysqli_query($con, "SELECT * FROM `faq`");
                    $i = 1;
                    while ($row = mysqli_fetch_array($sel)) {
                    ?>
                        <li>
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq<?php echo $i; ?>"><?php echo $row['question']; ?> <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq<?php echo $i; ?>" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    <?php echo $row['answer']; ?>
                                </p>
                            </div>
                        </li>
                    <?php
                        $i++;
                    }
                    ?>
                </ul>
            </div>
        </section><!-- End F.A.Q Section -->
    </div>
</div>
<!-- Packages End -->

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<?php
include("footer.php");
?>
