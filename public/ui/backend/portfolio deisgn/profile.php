<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- custom css -->
    <link rel="stylesheet" href="./css/form.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Profile</title>
</head>

<body>
    <header>
        <!-- NAVBAR START HERE -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #1A374D !important;">
            <div class="container">
                <a class="navbar-brand text-white" href="index.php"><i class="bi bi-people"></i> My Portfolio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"></ul>
                    <!-- <form class="d-flex" role="search"> -->
                    <ul class="navbar-nav navbar-nav-scroll">
                        <li class="nav-item"><a class="nav-link active text-white" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link active text-white" href="about.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link active text-white" href="help.php">Help</a></li>
                        <li class="nav-item"><a class="nav-link active text-white" href="#">Login</a></li>
                        <li class="nav-item"><a class="nav-link active text-white" href="registration.php">Create account</a></li>
                    </ul>
                    <!-- </form> -->
                </div>
            </div>
        </nav>
        <!-- NAVBAR END HERE  -->
    </header>
    <main class="container mt-5 mb-5">
        <div class="row mb-5">
            <div class="col-lg-7 col-md-6 col-sm-12 mb-2">
                <h3>Update Your Portfolio</h3>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                <a href="hired_employees.php" type="button" class="btn btn-primary" style="width: 100%;">Hired Employees</a>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 mb-2">
                <a href="profile_preview.php" type="button" class="btn btn-secondary" style="width: 100%;">Profile Preview</a>
            </div>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <!-- PROFILE START HERE  -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Profile
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="mb-3 mt-5 mx-4" style="width: 420px;">
                        <form action="">
                            <label for="name" class="form-label mb-3">Name</label>
                            <input type="text" class="form-control mb-3" id="name">

                            <label for="email" class="form-label mb-3">Email address</label>
                            <input type="email" class="form-control mb-3" id="email">

                            <label class="mb-3">Occupation</label>
                            <select class="form-select mb-3" aria-label="Default select example">
                                <option selected value="1">Managing Director</option>
                                <option value="2">Chief Executive Officer</option>
                                <option value="3">Chief Operating Officer</option>
                                <option value="4">Chief Financial Officer</option>
                                <option value="5">Chief Technology Officer</option>
                                <option value="6">Chief Legal Officer</option>
                                <option value="7">Chief Marketing Officer</option>
                                <option value="8">IT security specialist</option>
                                <option value="9">System engineer</option>
                                <option value="10">Full stack developer</option>
                                <option value="11">Development operations engineer</option>
                                <option value="12">Technical program manager</option>
                                <option value="13">Data warehouse architect</option>
                                <option value="14">Cloud engineer</option>
                                <option value="15">Mobile App developer</option>
                                <option value="16">Software Developer</option>
                                <option value="17">Network Engineer</option>
                            </select>

                            <label class="mb-3">Job Status</label>
                            <select class="form-select mb-3" aria-label="Default select example">
                                <option selected value="1">Full-time</option>
                                <option value="2">Half-time</option>
                            </select>

                            <label for="address" class="form-label mb-3">Address</label>
                            <input type="text" class="form-control mb-3" id="address">

                            <div class="row mt-5">
                                <label for="address" class="form-label">Profile Photo (jpg/png)</label>
                                <div class="col-lg-8"><input class="my-2" type="file"></div>
                                <div class="col-lg-4 d-flex justify-content-end">
                                    <!-- PROFILE PHOTO PREVIEW MODAL START HERE -->
                                    <div>
                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Preview</button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Profile Photo</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- PROFILE PHOTO PREVIEW MODAL END HERE -->
                                </div>
                            </div>

                            <div class="row mt-5">
                                <label for="address" class="form-label">Cover Photo (jpg/png)</label>
                                <div class="col-lg-8"><input class="my-2" type="file"></div>
                                <div class="col-lg-4 d-flex justify-content-end">
                                    <!-- COVER PHOTO PREVIEW MODAL START HERE -->
                                    <div>
                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModa2">Preview</button>
                                        <div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Cover Photo</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- COVER PHOTO PREVIEW MODAL END HERE -->
                                </div>
                            </div>

                            <div class="row mt-5">
                                <label for="address" class="form-label">Upload CV (PDF Only)</label>
                                <div class="col-lg-8"><input class="my-2" type="file"></div>
                                <div class="col-lg-4 d-flex justify-content-end">
                                    <!-- UPLOAD CV PREVIEW MODAL START HERE -->
                                    <div>
                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModa3">Preview</button>
                                        <div class="modal fade" id="exampleModa3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Uploaded CV</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- UPLOAD CV PREVIEW MODAL END HERE -->
                                </div>
                            </div>

                            <div class="mt-5 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary" style="width: 100%;">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- PROFILE END HERE  -->

            <!-- ABOUT START HERE  -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        About
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="mx-4 my-5">
                        <form action="">
                            <label for="email" class="form-label mb-3">About You</label>
                            <textarea class="form-control mb-3" id="about" name="about" cols="10" rows="5" style="width: 100%;" placeholder="Describe yourself......"></textarea><br>
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
            <!-- ABOUT END HERE  -->

            <!-- MY WORK START HERE -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        My Work
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <a href="work.php" class="btn btn-secondary my-5 mx-4">Add Work</a>
                </div>
            </div>
            <!-- MY WORK END HERE -->

            <!-- EDUCATION START HERE  -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Education
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                    <a href="education.php" class="btn btn-secondary my-5 mx-4">Add Education</a>
                </div>
            </div>
            <!-- EDUCATION END HERE -->

            <!-- SKILL START HERE -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        Skills
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                    <a href="skills.php" class="btn btn-secondary my-5 mx-4">Add Skills</a>
                </div>
            </div>
            <!-- SKILL END HERE -->

            <!-- EXPERIANCE START HERE -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                        Experiance
                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                    <a href="experiance.php" class="btn btn-secondary my-5 mx-4">Add Experiance</a>
                </div>
            </div>
            <!-- EXPERIANCE END HERE -->

            <!-- SOCIAL MEDIA START HERE -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                        Social Media
                    </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                    <div class="mx-4 my-5" style="width: 420px;">
                        <form>
                            <div class="mb-3">
                                <label for="skype" class="form-label">Skype</label>
                                <input type="text" class="form-control" name="skype" id="skype">
                            </div>
                            <div class="mb-3">
                                <label for="facebook" class="form-label">Facebook</label>
                                <input type="text" class="form-control" name="facebook" id="facebook">
                            </div>
                            <div class="mb-3">
                                <label for="linkedin" class="form-label">Linkedin</label>
                                <input type="text" class="form-control" name="linkedin" id="linkedin">
                            </div>
                            <div class="mb-3">
                                <label for="instagram" class="form-label">Instagram</label>
                                <input type="text" class="form-control" name="instagram" id="instagram">
                            </div>
                            <div class="mb-3">
                                <label for="twitter" class="form-label">Twitter</label>
                                <input type="text" class="form-control" name="twitter" id="twitter">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary" style="width: 100%;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- SOCIAL MEDIA END HERE -->
        </div>
    </main>
    <script src="profile_update.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<!-- FOOTER START HERE -->
<footer style="background-color: #1A374D;">
    <div class="container-fluid row">
        <div class="col-lg-4 col-md-6 col-sm-12 mt-5 text-white">
            <h5>About</h5>
            <p>MyPortfolio.com is a dynamic platform designed for individuals and businesses to showcase their talents, skills, and products. Whether you're an artist, designer, photographer, or entrepreneur, myportfolio.com provides you with an attractive and professional space to present your work and projects to the world.</p>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-12 mt-5 text-white">
            <h5>Link</h5>
            <a href="">Home</a> <br />
            <a href="">About</a> <br />
            <a href="">Help</a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-5 text-white">
            <h5>Contact</h5>
            <p>Phone: +8801317404152</p>
            <p>Email: mrisumon121@gmail.com</p>
            <p>Web Add: www.easysoft.com</p>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-12 mt-5 text-white">
            <h5>Social Media</h5>
            <a href="https://www.youtube.com/">Youtube</a> <br />
            <a href="https://www.facebook.com/">Facebook</a> <br />
            <a href="https://twitter.com/">Twitter</a> <br />
            <a href="https://www.instagram.com/">Instagram</a>
        </div>
        <p class="my-5 text-center text-white">Copyright©myportfolio.com 2023</p>
    </div>
</footer>
<!-- FOOTER END HERE -->

</html>