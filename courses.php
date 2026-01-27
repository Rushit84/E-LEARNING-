<?php
session_start();
if (!isset($_SESSION['student_name'])) {
    header("Location: login.php");
    exit();
}

include_once("includes/config.php");
$catQuery = $conn->query("SELECT * FROM course_categories ORDER BY id ASC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E-learning</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Styles -->
    <?php include_once("includes/style.php"); ?>

    <!-- Custom CSS -->
    <style>
        #spinner {
            opacity: 0;
            visibility: hidden;
            transition: opacity .3s ease, visibility .3s ease;
            z-index: 2000;
        }

        #spinner.show {
            opacity: 1;
            visibility: visible;
        }

        /* FIXED COURSE IMAGE SIZE */
        .course-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <!-- Navbar Start -->
    <?php include_once("includes/header.php"); ?>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Courses</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <!-- Breadcrumb items if needed -->
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                <h1 class="mb-5">Courses Categories</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <?php while($cat = $catQuery->fetch_assoc()) { ?>
                    <div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                        <a class="position-relative d-block overflow-hidden" href="<?php echo htmlspecialchars($cat['link']); ?>">
                            <img class="img-fluid course-image" src="<?php echo htmlspecialchars($cat['image']); ?>" alt="<?php echo htmlspecialchars($cat['name']); ?>">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0"><?php echo htmlspecialchars($cat['name']); ?></h5>
                                <small class="text-primary">Courses</small>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Categories End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Students Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <!-- Testimonials -->
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Khushi Raiyani</h5>
                    <p>Software Developer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">This platform helped me upskill in web development. The video tutorials are very easy to follow!</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Abhishek Raiyani</h5>
                    <p>Data Analyst</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">I learned SQL and Python here. The hands-on examples made it much easier than textbooks.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Jeel Raiyani</h5>
                    <p>Business Student</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">The eLearning portal gave me the flexibility to study while managing my part-time job.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Mahi Raiyani</h5>
                    <p>Digital Marketing Executive</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">The marketing courses are up to date and very practical. Highly recommended!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <?php include_once("includes/footer.php"); ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- Scripts -->
    <?php include_once("includes/script.php"); ?>

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
