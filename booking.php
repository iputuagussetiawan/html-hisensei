<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Free Trial | Hisensei</title>
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/pages/booking.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" /> -->
</head>

<body>
    <div class="page-warpper">
        <?php
        include('header-simple.php');
        ?>
        <main>
            <section class="booking-free section-padding--top">
                <div class="container">
                    <h1 class="sr-only">Hisensei Booking Form</h1>
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-lg-8 col-xl-7">
                            <div class="card-form">
                                <h3 class="card-form__title">Book FREE Trial</h3>
                                <nav>
                                    <div class="nav nav-tabs nav-pills nav-justified" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-parent-tab" data-bs-toggle="tab" data-bs-target="#nav-parent" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                            <span class="card-form__nav-tab-text">I’m a Parent</span>
                                            <span class="card-form__image-container">
                                                <img src="images/pages/booking/parents.png" alt="parent">
                                            </span>
                                        </button>
                                        <button class="nav-link" id="nav-student-tab" data-bs-toggle="tab" data-bs-target="#nav-student" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                            <span class="card-form__nav-tab-text">I’m a Student</span>
                                            <span class="card-form__image-container">
                                                <img src="images/pages/booking/student.png" alt="parent">
                                            </span>
                                        </button>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-parent" role="tabpanel" aria-labelledby=nav-parent-tab">
                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <form class="frm-parent" action="<?php echo $config['base_url']; ?>thankyou.php">
                                                    <div class="form-group mb-3 row">
                                                        <label for="inputEmail" class="col-sm-12 col-md-3 col-form-label">Parent’s Name *</label>
                                                        <div class="col-4 col-md-3 col-lg-2">
                                                            <select id="parentSufix" name="parentSufix" class="select2-nosearch" required>
                                                                <option value="mr">Mr.</option>
                                                                <option value="mrs">Mrs.</option>
                                                                <option value="ms">Ms.</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-8 col-md-6 col-lg-7">
                                                            <input type="text" class="form-control form-control-costum " name="parentName" id="parentName" placeholder="" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3 row">
                                                        <label for="inputEmail" class="col-sm-12 col-md-3 col-form-label">Contact Number *</label>
                                                        <div class="col-4 col-md-3 col-lg-2">
                                                            <select name="phoneCode" id="phoneCode" class="select2Phone" required>

                                                            </select>
                                                        </div>
                                                        <div class="col-8 col-md-6 col-lg-7">
                                                            <input type="text" class="form-control form-control-costum " name="phoneNumber" id="phoneNumber" placeholder="" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3 row">
                                                        <label for="inputEmail" class="col-sm-12 col-md-3 col-form-label">Email</label>
                                                        <div class="col-sm-12 col-md-9">
                                                            <input type="email" class="form-control form-control-costum " name="emailAddress" id="emailAddress" placeholder="">
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group mb-3 row">
                                                        <label for="studentName" class="col-sm-12 col-md-3 col-form-label">Student Name *</label>
                                                        <div class="col-sm-12 col-md-9">
                                                            <input type="text" class="form-control form-control-costum " name="studentName" id="studentName" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 row">
                                                        <label for="studentGrade2" class="col-sm-12 col-md-3 col-form-label">Student Grade *</label>
                                                        <div class="col-sm-12 col-md-9">
                                                            <select name="studentGrade22" id="studentGrade22" class="form-control select2Default">
                                                                <option>Select Grade</option>
                                                                <optgroup label="Elementary school">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                </optgroup>
                                                                <optgroup label="Junior High School">
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                </optgroup>
                                                                <optgroup label="High School">
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 row">
                                                        <label for="studentSubject" class="col-sm-12 col-md-3 col-form-label">Subject *</label>
                                                        <div class="col-sm-12 col-md-9">
                                                            <select name="studentSubject2" id="studentSubject2" class="form-control select2Default" required>
                                                                <option>Select Subject</option>
                                                                <option>English</option>
                                                                <option>Mathematics</option>
                                                                <option>Science</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 text-center card-form__note">
                                                            <p>By registering here, I agree to Hisensei <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a> </p>
                                                        </div>
                                                    </div>
                                                    <div class="btn-wrapper text-center">
                                                        <button type="submit" class="btn btn-primary"><span>Submit</span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-student" role="tabpanel" aria-labelledby="nav-student-tab">
                                        <div class="row">
                                            <div class="col-md-12 mt-4">
                                                <form class="frm-siswa" action="<?php echo $config['base_url']; ?>thankyou.php">
                                                    <div class="form-group mb-3 row">
                                                        <label for="studentName" class="col-sm-12 col-md-3 col-form-label">Student Name *</label>
                                                        <div class="col-sm-12 col-md-9">
                                                            <input type="text" class="form-control form-control-costum " name="studentName" id="studentName" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 row">
                                                        <label for="inputEmail" class="col-sm-12 col-md-3 col-form-label">Contact Number *</label>
                                                        <div class="col-4 col-md-3 col-lg-2">
                                                            <select name="phoneCode2" id="phoneCode2" class="select2Phone" required>
                                                            </select>
                                                        </div>
                                                        <div class="col-8 col-md-6 col-lg-7">
                                                            <input type="text" class="form-control form-control-costum " name="phoneNumber" id="phoneNumber" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 row">
                                                        <label for="inputEmail" class="col-sm-12 col-md-3 col-form-label">Email</label>
                                                        <div class="col-sm-9">
                                                            <input type="email" class="form-control form-control-costum " name="emailAddress" id="emailAddress" placeholder="">
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3 row">
                                                        <label for="studentGrade2" class="col-sm-12 col-md-3 col-form-label">Student Grade *</label>
                                                        <div class="col-sm-9">
                                                            <select name="studentGrade" id="studentGrade" class="form-control select2Default">
                                                                <option>Select Grade</option>
                                                                <optgroup label="Elementary school">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                </optgroup>
                                                                <optgroup label="Junior High School">
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                </optgroup>
                                                                <optgroup label="High School">
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 row">
                                                        <label for="studentSubject" class="col-sm-12 col-md-3 col-form-label">Subject *</label>
                                                        <div class="col-sm-9">
                                                            <select name="studentSubject" id="studentSubject" class="form-control select2Default" required>
                                                                <option>Select Subject</option>
                                                                <option>English</option>
                                                                <option>Mathematics</option>
                                                                <option>Science</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 text-center card-form__note">
                                                            <p>By registering here, I agree to Hisensei <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a> </p>
                                                        </div>
                                                    </div>
                                                    <div class="btn-wrapper text-center">
                                                        <button type="submit" class="btn btn-primary"><span>Submit</span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php
        include('footer-simple.php');
        ?>
    </div>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/gsap.min.js"></script>
    <script src="js/main.js"></script>
    <script type="module" src="js/pages/booking.js"></script>
</body>

</html>