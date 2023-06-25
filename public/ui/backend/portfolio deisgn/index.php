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
    <title>Dashboard</title>
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
    <main class="container">
        <!-- HEADINGS -->
        <h1 class="d-flex justify-content-center my-5">Hire employee very easily.</h1>
        <!-- SEARCHING OPTIONS START -->
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
                <label class="mb-2">Category</label>
                <select class="form-select" aria-label="Default select example">
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
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
                <label class="mb-2">Location</label>
                <select class="form-select" aria-label="Default select example">
                    <option value="Dhaka">Dhaka</option>
                    <option value="Faridpur">Faridpur</option>
                    <option value="Gazipur">Gazipur</option>
                    <option value="Gopalganj">Gopalganj</option>
                    <option value="Kishoreganj">Kishoreganj</option>
                    <option value="Madaripur">Madaripur</option>
                    <option value="Manikganj">Manikganj</option>
                    <option value="Munshiganj">Munshiganj</option>
                    <option value="Narayanganj">Narayanganj</option>
                    <option value="Narsingdi">Narsingdi</option>
                    <option value="Rajbari">Rajbari</option>
                    <option value="Shariatpur">Shariatpur</option>
                    <option value="Tangail">Tangail</option>
                    <option value="Barguna">Barguna</option>
                    <option value="Barishal">Barishal</option>
                    <option value="Bhola">Bhola</option>
                    <option value="Jhalokati">Jhalokati</option>
                    <option value="Patuakhali">Patuakhali</option>
                    <option value="Pirojpur">Pirojpur</option>
                    <option value="Bandarban">Bandarban</option>
                    <option value="Brahmanbaria">Brahmanbaria</option>
                    <option value="Chandpur">Chandpur</option>
                    <option value="Chattogram">Chattogram</option>
                    <option value="Cumilla">Cumilla</option>
                    <option value="Cox's Bazar">Cox's Bazar</option>
                    <option value="Feni">Feni</option>
                    <option value="Khagrachhari">Khagrachhari</option>
                    <option value="Lakshmipur">Lakshmipur</option>
                    <option value="Noakhali">Noakhali</option>
                    <option value="Rangamati">Rangamati</option>
                    <option value="Bagerhat">Bagerhat</option>
                    <option value="Chuadanga">Chuadanga</option>
                    <option value="Jashore">Jashore</option>
                    <option value="Jhenaidah">Jhenaidah</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Kushtia">Kushtia</option>
                    <option value="Magura">Magura</option>
                    <option value="Meherpur">Meherpur</option>
                    <option value="Narail">Narail</option>
                    <option value="Satkhira">Satkhira</option>
                    <option value="Jamalpur">Jamalpur</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Netrokona">Netrokona</option>
                    <option value="Sherpur">Sherpur</option>
                    <option value="Bogura">Bogura</option>
                    <option value="Joypurhat">Joypurhat</option>
                    <option value="Naogaon">Naogaon</option>
                    <option value="Natore">Natore</option>
                    <option value="Chapai Nawabganj">Chapai Nawabganj</option>
                    <option value="Pabna">Pabna</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Sirajganj">Sirajganj</option>
                    <option value="Dinajpur">Dinajpur</option>
                    <option value="Gaibandha">Gaibandha</option>
                    <option value="Kurigram">Kurigram</option>
                    <option value="Lalmonirhat">Lalmonirhat</option>
                    <option value="Nilphamari">Nilphamari</option>
                    <option value="Panchagarh">Panchagarh</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Thakurgaon">Thakurgaon</option>
                    <option value="Habiganj">Habiganj</option>
                    <option value="Moulvibazar">Moulvibazar</option>
                    <option value="Sunamganj">Sunamganj</option>
                    <option value="Sylhet">Sylhet</option>
                </select>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 mb-2">
                <label class="mb-2">Job Status</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected value="1">Full-time</option>
                    <option value="2">Half-time</option>
                </select>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 mb-2" style="padding-top: 30px !important;">
                <button type="submit" class="btn btn-outline-secondary" style="width: 100%;">Search</button>
            </div>
        </div>
        <!-- SEARCHING OPTIONS END -->

        <!-- START CONTENT OF PORTFOLIO -->
        <div class="row" style="margin-top: 80px;">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                <div class="col mt-5">
                    <h4>About Portfolio</h4>
                    <p style=" text-align: justify;">An international portfolio is a selection of stocks and other assets that focuses on foreign markets rather than domestic ones. If well designed, an international portfolio gives the investor exposure to emerging and developed markets and provides diversification.</p>
                </div>
                <div class="col mt-5">
                    <h4>Necessity of international portfolio</h4>
                    <p style=" text-align: justify;">A portfolio is a living and changing collection of records that reflect your accomplishments, skills, experiences, and attributes. It highlights and showcases samples of some of your best work, along with life experiences, values and achievements.</p>
                </div>
                <div class="col mt-5">
                    <h4>Benefits of international portfolio</h4>
                    <p style=" text-align: justify;">The main reasons to invest internationally are to capture higher expected returns and to diversify portfolios across a broader array of asset classes. This can lower the overall volatility of a portfolio and increase the likelihood of benefiting from the return premiums associated with different risk factors.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
                <div class="col mt-5">
                    <h4>About Portfolio</h4>
                    <p style=" text-align: justify;">An international portfolio is a selection of stocks and other assets that focuses on foreign markets rather than domestic ones. If well designed, an international portfolio gives the investor exposure to emerging and developed markets and provides diversification.</p>
                </div>
                <div class="col mt-5">
                    <h4>Necessity of international portfolio</h4>
                    <p style=" text-align: justify;">A portfolio is a living and changing collection of records that reflect your accomplishments, skills, experiences, and attributes. It highlights and showcases samples of some of your best work, along with life experiences, values and achievements.</p>
                </div>
                <div class="col mt-5">
                    <h4>Benefits of international portfolio</h4>
                    <p style=" text-align: justify;">The main reasons to invest internationally are to capture higher expected returns and to diversify portfolios across a broader array of asset classes. This can lower the overall volatility of a portfolio and increase the likelihood of benefiting from the return premiums associated with different risk factors.</p>
                </div>
            </div>
        </div>
        <!-- END CONTENT OF PORTFOLIO -->
    </main>
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