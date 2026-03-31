<?php
// Enable PHP error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Load Composer autoloader
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect form data safely
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $project = htmlspecialchars($_POST['project'] ?? '');
    $subject = htmlspecialchars($_POST['subject'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'upadhyayraj739@gmail.com'; // your Gmail
        $mail->Password   = 'egubtuqbflljgfij';        // Gmail App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Sender and recipient
        $mail->setFrom('upadhyayraj739@gmail.com', 'Website Contact');
        $mail->addAddress('upadhyayraj739@gmail.com');

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Message: $subject";
        $mail->Body    = "
            <h3>New Contact Form Submission</h3>
            <p><b>Name:</b> {$name}</p>
            <p><b>Email:</b> {$email}</p>
            <p><b>Phone:</b> {$phone}</p>
            <p><b>Project:</b> {$project}</p>
            <p><b>Subject:</b> {$subject}</p>
            <p><b>Message:</b><br>{$message}</p>
        ";

        $mail->send();
        echo "<script>alert('✅ Message Sent Successfully!'); window.location.href='contact.php';</script>";

    } catch (Exception $e) {
        echo "<script>alert('❌ Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
    }
}

?>


<?php include 'header.php'; ?>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h1>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                <li class="breadcrumb-item active text-secondary">Contact</li>
            </ol>
    </div>
</div>
<!-- Header End -->

<!-- Contact Start -->
<div class="container-fluid contact overflow-hidden py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary pe-3">Quick Contact</h5>
                </div>
                <h1 class="display-5 mb-4">Have Questions? We’re Here to Help</h1>
                <p class="mb-5">Whether you need help understanding visa requirements, preparing documents, or choosing
                    the right visa category, our team is ready to assist you with clear and reliable support.</p>
                <div class="d-flex border-bottom mb-4 pb-4">
                    <i class="fas fa-map-marked-alt fa-4x text-primary bg-light p-3 rounded"></i>
                    <div class="ps-3">
                        <h5>Location</h5>
                        <p>B-37, 1st FLOOR, -Sector 2 Noida, 201301</p>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-xl-6">
                        <div class="d-flex">
                            <i class="fas fa-tty fa-3x text-primary"></i>
                            <div class="ps-3">
                                <h5 class="mb-3">Quick Contact</h5>
                                <div class="mb-3">
                                    <h6 class="mb-0">Phone:</h6>
                                    <a href="#" class="fs-5 text-primary"> 892 992 2525</a>
                                </div>
                                <div class="mb-3">
                                    <h6 class="mb-0">Email:</h6>
                                    <a href="#" class="fs-5 text-primary">info@overseaseducationlane.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="d-flex">
                            <i class="fas fa-clone fa-3x text-primary"></i>
                            <div class="ps-3">
                                <h5 class="mb-3">Opening Hrs</h5>
                                <div class="mb-3">
                                    <h6 class="mb-0">Mon - Saturday:</h6>
                                    <a href="#" class="fs-5 text-primary">09.30 AM to 06.30 PM</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center pt-3">
                    <div class="me-4">
                        <div class="bg-light d-flex align-items-center justify-content-center"
                            style="width: 90px; height: 90px; border-radius: 10px;"><i
                                class="fas fa-share fa-3x text-primary"></i></div>
                    </div>
                    <div class="d-flex">
                        <a class="btn btn-secondary border-secondary me-2 p-0"
                            href="https://www.facebook.com/profile.php?id=61587479755747">facebook <i
                                class="fas fa-chevron-circle-right"></i></a>
                        <a class="btn btn-secondary border-secondary mx-2 p-0"
                            href="https://www.linkedin.com/company/ekon-visa-services/">linkedin <i
                                class="fas fa-chevron-circle-right"></i></a>
                        <a class="btn btn-secondary border-secondary mx-2 p-0"
                            href="https://www.instagram.com/ekonvisaservices/">instagram <i
                                class="fas fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3">
                <div class="sub-style">
                    <h5 class="sub-title text-primary pe-3">Get in Touch</h5>
                </div>
                <h1 class="display-5 mb-4">Connect With Our Team</h1>
                <h4 class="lh-base mb-4">Reach out to us for professional visa assistance and guidance tailored to your
                    travel needs.</h4>
                <form id="contactForm" action="contact.php" method="POST">
                    <div class="row g-4">

                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" name="name" class="form-control" placeholder="Your Name">
                                <label>Your Name</label>
                            </div>
                        </div>

                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control" placeholder="Your Email">
                                <label>Your Email</label>
                            </div>
                        </div>

                        <!-- <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" name="phone" class="form-control" placeholder="Phone">
                                <label>Your Phone</label>
                            </div>
                        </div> -->

                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" name="phone" class="form-control" placeholder="Phone">
                                <label>Your Phone</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" name="subject" class="form-control" placeholder="Subject">
                                <label>Subject</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <textarea name="message" class="form-control" style="height: 160px"></textarea>
                                <label>Message</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100 py-3">
                                Send Message
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
<?php include 'footer.php'; ?>