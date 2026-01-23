<?php
session_start();
if (!isset($_SESSION['student_name'])) {
    header("Location: login.php");
    exit();
}

 include_once("includes/config.php");

$about = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM about_page WHERE id=1"));
$features_result = mysqli_query($conn,"SELECT * FROM about_features WHERE about_id=1");
$features = [];
while($row = mysqli_fetch_assoc($features_result)) { $features[] = $row['feature_text']; }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E-learning</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- style -->
    <?php
    include_once("includes/style.php");
    ?>
    <!-- Spinner CSS Fix -->
    <style>
        /* Spinner hidden by default */
        #spinner {
            opacity: 0;
            visibility: hidden;
            transition: opacity .3s ease, visibility .3s ease;
            z-index: 2000;
        }

        /* Spinner visible only when .show is present */
        #spinner.show {
            opacity: 1;
            visibility: visible;
        }
    </style>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <!--header -->
    <?php
    include_once("includes/header.php");
    ?>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Skilled Instructors</h5>
                            <p>A skill instructor is a person who teaches or trains others in a specific skill or set of skills, often  hands-on methods.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Online Classes</h5>
                            <p>Online classes are courses conducted over the internet, allowing students to learn remotely using digital platforms.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Home Projects</h5>
                            <p>A home project is a task or activity completed at home, often for learning, improvement, or creativity.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Book Library</h5>
                            <p>A book library is a place where books are collected, stored, and made available for people to read, borrow, or study.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="<?php echo $about['image']; ?>" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3"><?php echo $about['subtitle']; ?></h6>
                <h1 class="mb-4"><?php echo $about['title']; ?></h1>
                <p class="mb-4"><?php echo $about['description1']; ?></p>
                <p class="mb-4"><?php echo $about['description2']; ?></p>
                <div class="row gy-2 gx-4 mb-4">
                    <?php foreach($features as $f){ ?>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo $f; ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
    <!-- Footer Start -->
    <?php
    include_once("includes/footer.php");
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- script-->
    <?php
    include_once("includes/script.php");
    ?>

    <!-- Spinner Hide Script -->
    <script>
        (function () {
            const hideSpinner = () => {
                const el = document.getElementById("spinner");
                if (el) el.classList.remove("show");
            };

            document.addEventListener("DOMContentLoaded", hideSpinner);
            window.addEventListener("load", hideSpinner);
            setTimeout(hideSpinner, 3000); // failsafe
        })();
    </script>


</body>
</html>