<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Star Hotels</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Afacad&family=Lora:ital,wght@1,600&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="CSS/common.css">
  <style>
    .availability-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width: 575px) {
      .availability-form {
        margin-top: 25px;
        padding: 0 35px;
      }
    }
  </style>
</head>

<body class="bg-light">

  <!-- Navigation Bar -->

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Star Hotels</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Villas</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Rooms
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Sinlge Room</a></li>
              <li><a class="dropdown-item" href="#">Double Room</a></li>
            </ul>
          </li>
        </ul>
        <div class="d-flex" role="search">
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal"
            data-bs-target="#loginModal">
            Login
          </button>
          <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal"
            data-bs-target="#registerModal">
            Register
          </button>
        </div>
      </div>
    </div>
  </nav>

  <!-- LoginModal -->

  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="">
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-circle fs-3 me-2"></i>
              User Login
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none" />
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none" />
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <button type="submit" class="btn btn-dark shadow-none">
                Log In
              </button>
              <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forget Password?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- RegisterModal -->

  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form action="">
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-add fs-3 me-2"></i>
              User Registration
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span class="badge rounded-pill bg-light text-dark mb-3 lh-base text-wrap">
              Note : Register with your goverment issued ID details only
              during check-in.
            </span>
            <div class="container-fluid">
              <div class="row d-flex align-items-center">
                <div class="col-md-5 ps-0 mb-3">
                  <label class="form-label">First Name</label>
                  <input type="text" class="form-control shadow-none" />
                </div>
                <div class="col-md-5 ps-0 mb-3">
                  <label class="form-label">Last Name</label>
                  <input type="text" class="form-control shadow-none" />
                </div>
                <div class="col-md-5 ps-0 mb-3">
                  <label class="form-label">Email Address</label>
                  <input type="email" class="form-control shadow-none" />
                </div>
                <div class="col-md-5 ps-0 mb-3">
                  <label class="form-label">Phone Number</label>
                  <input type="number" class="form-control shadow-none" />
                </div>
                <div class="col-md-12 ps-0 mb-3">
                  <label class="form-label">Address</label>
                  <textarea class="form-control shadow-none" rows="1"></textarea>
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Set Photo</label>
                  <input type="file" class="form-control shadow-none" />
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control shadow-none" />
                </div>
                <div class="d-flex align-items-center mt-2">
                  <button type="submit" class="btn btn-dark shadow-none me-3">
                    Register Now
                  </button>
                  <button type="reset" class="btn btn-outline-dark shadow-none">
                    Reset
                  </button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Swiper JS Carousel -->

  <div class="container-fluid px-lg-2 mt-4">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide overflow-auto">
          <img src="images/img1.jpg" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/img2.jpg" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/img3.jpg" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/img4.jpg" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/img5.jpg" class="w-100 d-block" />
        </div>
      </div>
    </div>
  </div>

  <!-- Check Availability -->

  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-2 mt-4 rounded">
        <h5 class="mb-4">Check Booking Availability</h5>
        <form>
          <div class="row align-items-center">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Check In</label>
              <input type="date" class="form-control shadow-none" />
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Check Out</label>
              <input type="date" class="form-control shadow-none" />
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight: 500;">Adults</label>
              <select class="form-select shadow-none">
                <option selected>Select</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight: 500;">Children</label>
              <select class="form-select shadow-none">
                <option selected>Select</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2 mt-2">
              <button type="submit" class="btn text-white shadow-none custom-bg">Book Now</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Our Rooms -->

  <h2 class="mt-3 mb-3 pt-4 text-center fw-bold h-font">Our Rooms</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">

        <div class="card shadow border-0 mb-5" style="max-width: 350px; margin: auto;">
          <img class="card-img-top" src="images/room_images/img1">

          <div class="card-body">
            <h5 class="card-title">Room 1</h5>
            <h6 class="mb-4">$ 150/Night</h6>
            <div class="features">
              <h6>Features</h6>
              <span class="badge rounded-pill bg-light text-dark mb-3 lh-base text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 lh-base text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 lh-base text-wrap">
                Balcony
              </span>
            </div>
            <div class="facilities">
              <h6>Facilities</h6>

              <span class="badge rounded-pill bg-light text-dark mb-3 lh-base text-wrap">
                <i class="bi bi-wifi p-1"></i>Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 lh-base text-wrap">
                <i class="bi bi-tv p-1"></i>Televison
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 lh-base text-wrap">
                <i class="bi bi-ev-front p-1"></i>EV Charging
              </span>
            </div>
            <div class="rating mb-2">
              <h5>Rating</h5>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-half text-warning"></i>
                <!-- <i class="bi bi-star"></i> -->
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm custom-bg text-white shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card shadow border-0 mb-5" style="max-width: 350px; margin: auto;">
          <img class="card-img-top" src="images/room_images/img1" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Room 2</h5>
            <h6 class="mb-4">$ 360/Night</h6>
            <div class="features">
              <h6>Features</h6>
              <span class="badge rounded-pill bg-light text-dark mb-3 lh-base text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 lh-base text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 lh-base text-wrap">
                Balcony
              </span>
            </div>
            <div class="facilities">
              <h6>Facilities</h6>

              <span class="badge rounded-pill bg-light text-dark mb-3 lh-base text-wrap">
                <i class="bi bi-wifi p-1"></i>Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 lh-base text-wrap">
                <i class="bi bi-tv p-1"></i>Televison
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 lh-base text-wrap">
                <i class="bi bi-ev-front p-1"></i>EV Charging
              </span>
            </div>
            <div class="rating mb-2">
              <h5>Rating</h5>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-half text-warning"></i>
                <!-- <i class="bi bi-star"></i> -->
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm custom-bg text-white shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card shadow border-0" style="max-width: 350px; margin: auto;">
          <img class="card-img-top" src="images/room_images/img2" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Room 3</h5>
            <h6 class="mb-4">$ 550/Night</h6>
            <div class="features">
              <h6>Features</h6>
              <span class="badge rounded-pill bg-light text-dark mb-3 lh-base text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 lh-base text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 lh-base text-wrap">
                Balcony
              </span>
            </div>
            <div class="facilities">
              <h6>Facilities</h6>

              <span class="badge rounded-pill bg-light text-dark mb-3 lh-base text-wrap">
                <i class="bi bi-wifi p-1"></i>Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 lh-base text-wrap">
                <i class="bi bi-tv p-1"></i>Televison
              </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 lh-base text-wrap">
                <i class="bi bi-ev-front p-1"></i>EV Charging
              </span>
            </div>
            <div class="rating mb-2">
              <h5>Rating</h5>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-half text-warning"></i>
                <!-- <i class="bi bi-star"></i> -->
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm custom-bg text-white shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 text-center mt-5 mb-4">
        <a href="#" class="btn btn-sm btn-outline-dark fw-bold rounded-0 shadow-none">More Rooms >></a>
      </div>

    </div>
  </div>

  <!-- Our Facilities -->

  <h2 class="mt-3 mb-3 pt-4 text-center fw-bold h-font">Our Facilities</h2>
  <div class="container">
    <div class="row justify-content-evenly">
      <div class="col-lg-2 col-md-2 rounded-4 shadow text-center my-3 py-4">
        <img src="images/facilities/img1.png" alt="">
            <h6>Poolside Bar</h6>
      </div>
      <div class="col-lg-2 col-md-2 rounded-4 shadow text-center my-3 py-4">
        <img src="images/facilities/img5.png" alt="">
            <h6>WiFi</h6>
      </div>
      <div class="col-lg-2 col-md-2 rounded-4 shadow text-center my-3 py-4">
        <img src="images/facilities/img3.png" alt="">
            <h6>Italian Cuisine</h6>
      </div>
      <div class="col-lg-2 col-md-2 rounded-4 shadow text-center my-3 py-4">
        <img src="images/facilities/img4.png" alt="">
            <h6 class="mt-2">Skilled Staff</h6>
      </div>
      <div class="col-lg-2 col-md-2 rounded-4 shadow text-center my-3 py-4">
        <img src="images/facilities/img2.png" alt="">
            <h6>Rated 4 Star</h6>
      </div>
      </div>
    </div>
  </div>

  <i data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="slide-right"
    class="fas fa-car-side fa-3x"></i>
  </div>

  <!-- Testimonials -->

  <h2 class="mt-3 mb-3 pt-4 text-center fw-bold h-font">Testimonials</h2>
  

  <div class="container mt-5">
    <div class="row">
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide">
          <div class="profile align-items-center p-4 d-flex">
            <img src="testimonials/img2.jpg" width="100px" class="rounded-5">
            <h6 class="ms-2 m-0">User 1</h6>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate ad quo, error 
            aut amet animi eius at voluptates! Neque nemo quis eveniet mollitia perspiciatis 
            quos cupiditate, dolore inventore qui laborum!</p>
        <div class="ratings">
          <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-half text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="profile align-items-center p-4 d-flex">
          <img src="testimonials/img3.jpg" width="100px" class="rounded-5">
          <h6 class="ms-2 m-0">User 2</h6>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate ad quo, error 
          aut amet animi eius at voluptates! Neque nemo quis eveniet mollitia perspiciatis 
          quos cupiditate, dolore inventore qui laborum!</p>
      <div class="ratings">
        <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-half text-warning"></i>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="profile align-items-center p-4 d-flex">
        <img src="testimonials/img4.jpg" width="100px" class="rounded-5">
        <h6 class="ms-2 m-0">User 3</h6>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate ad quo, error 
        aut amet animi eius at voluptates! Neque nemo quis eveniet mollitia perspiciatis 
        quos cupiditate, dolore inventore qui laborum!</p>
    <div class="ratings">
      <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-half text-warning"></i>
    </div>
  </div>
      <div class="swiper-pagination"></div>
    </div>
    <!-- <div class="col-lg-12 text-center mt-5"></div> -->
  </div>

  <!-- Reach US -->

  <h2 class="mt-3 mb-3 pt-4 text-center fw-bold h-font">Reach US</h2>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 rounded bg-white">
        <iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3018.9376120515576!2d-115.76280399999999!3d40.829333999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80a607341a964f1d%3A0xdaf33a7118ef9d79!2sThe%20Star%20Hotel%20Basque%20Dining!5e0!3m2!1sen!2sin!4v1705055981973!5m2!1sen!2sin" height="320px" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 mb-4 rounded">
          <h5>Call Us</h5>
          <i class="bi bi-telephone-fill"></i>
          <a href="tel: +1 212-456-7890" class="d-inline-block text-decoration-none text-dark mb-2">
            +1 212-456-7890</a>
            <br>
            <i class="bi bi-telephone-fill"></i>
          <a href="tel: +1 212-456-7890" class="d-inline-block text-decoration-none text-dark mb-2">
            +1 212-456-7890</a>
        </div>
        <div class="bg-white p-4 mb-4 rounded">
          <h5>Email</h5>
          <i class="bi bi-envelope p-1"></i>
          <a href="email: booking@starhotels.com" class="d-inline-block text-decoration-none text-dark mb-2">
            booking@starhotels.com</a>
            <br>
            <i class="bi bi-envelope p-1"></i>
          <a href="email: booking@starhotels.com" class="d-inline-block text-decoration-none text-dark mb-2">
            contact@starhotels.com</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Section -->

  <div class="container-fluid bg-white mt-5">
    <div class="row">
      <div class="col-lg-4">
        <h1 class="h-font fw-bold fs-3 mb-2">Star Hotels</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates aliquam 
          maiores atque quas iusto, nisi earum exercitationem sapiente? Cupiditate, 
          officia.</p>
      </div>
      <div class="col-lg-4">
        <h5 class="mb-3">Links</h5>
        <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Home</a><br>
        <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Rooms</a><br>
        <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Villas</a><br>
      </div>
      <div class="col-lg-4">
        <h5>Follow us</h5>
        <i class="bi bi-twitter-x p-1"></i>
        <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Twitter</a><br>
        <i class="bi bi-facebook p-1"></i>
        <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Facebook</a><br>
        <i class="bi bi-instagram p-1"></i>
        <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">Instagram</a>
      </div>
    </div>
  </div>

  <h6 class="text-center bg-dark text-white p-2 mt-2 m-0">Designed and Developed By : Nikhil Sorari

  </h6>

    <!-- BootStratp CDN -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>

    <!-- SwiperJS CDN -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- SwiperCaraousel JS -->

    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        }
      });
    </script>

    <!-- Testimonials JS -->

    <script>
      var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        loop: true,
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        autoplay:{
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints:{
          320:{
            slidesPerView: 1,
          },
          640:{
            slidesPerView: 1,
          },
          768:{
            slidesPerView: 2,
          },
          1024:{
            slidesPerView: 3,
          },
        }
      });
    </script>

</body>

</html>
