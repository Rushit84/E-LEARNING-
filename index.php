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

    <!-- style -->
    <?php include_once("includes/style.php"); ?>

    <!-- Spinner CSS Fix + Image Uniformity -->
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

        /* Ensures all course/category images have same height and cropping */
        .course-image {
            width: 100%;
            height: 220px; /* You can adjust this height as desired */
            object-fit: cover;
            display: block;
        }
    </style>
</head>

<body>
    <!-- header -->
    <?php include_once("includes/header.php"); ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <video class="img-fluid w-100 h-100" autoplay muted loop playsinline>
                    <source src="banvid.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Online Courses</h5>
                                <h1 class="display-3 text-white animated slideInDown">Welcome to E-Learning point</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Skilled Instructors</h5>
                            <p>A skill instructor is a person who teaches or trains others in a specific skill or set of skills, often hands-on methods.</p>
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

    <!-- Categories / Courses Start -->
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
                            <img class="img-fluid course-image"
                                 src="<?php echo htmlspecialchars($cat['image']); ?>"
                                 alt="<?php echo htmlspecialchars($cat['name']); ?>">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                 style="margin: 1px;">
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
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg"
                         style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Khushi Raiyani</h5>
                    <p>Software Developer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">This platform helped me upskill in web development. The video tutorials are very easy to follow!</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg"
                         style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Abhishek Raiyani</h5>
                    <p>Data Analyst</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">I learned SQL and Python here. The hands-on examples made it much easier than textbooks.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg"
                         style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Jeel Raiyani</h5>
                    <p>Business Student</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">The eLearning portal gave me the flexibility to study while managing my part-time job.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg"
                         style="width: 80px; height: 80px;">
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

    <!-- Footer -->
    <?php include_once("includes/footer.php"); ?>

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
