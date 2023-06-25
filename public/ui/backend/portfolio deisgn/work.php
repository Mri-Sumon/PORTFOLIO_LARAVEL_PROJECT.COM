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
    <title>work</title>
</head>
<!-- INTERNAL CSS START  -->
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    .container {
        display: flex;
        justify-content: center;
    }

    #registrationForm {
        width: 450px;
        border: 1px solid gray;
        border-radius: 0.6rem;
    }
</style>
<!-- INTERNAL CSS END  -->

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
        <div class="my-5">
            <h4 class="mb-4">Add previously performed work</h4>
            <div class="col-lg-4 col-md-6 col-sm-12" id="registrationForm">
                <div class="mx-4 my-4">
                    <form class="mt-4">
                        <div class="mb-3">
                            <label for="name" class="form-label">Type of Work</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected value="1">Chose one</option>
                                <option value="2">Web Design</option>
                                <option value="2">Web Development</option>
                                <option value="2">UI/UX Design</option>
                                <option value="2">Interior Design</option>
                                <option value="2">Android Developer</option>
                                <option value="2">Full Stack Developer</option>
                                <option value="2">Front End Developer</option>
                                <option value="2">Back End Developer</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="workDemo" class="form-label">Work Demo(png/jpg)</label>
                            <input type="file" class="form-control" name="workDemo" id="workDemo" required>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-secondary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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