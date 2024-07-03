<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./img/ane-logo.svg" type="image/x-icon" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

    <!-- Data AOS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- Owl Carousel-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Serif:opsz,wght@8..144,500&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Serif+4:opsz,wght@8..60,600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap"
      rel="stylesheet"
    />
    <title>ANE</title>
  </head>
  <body>
    <!-- Fixed Mobile Bar -->
    <div class="fixedbottom fs-14 d-lg-none d-flex justify-content-between">
      <a
        href="#"
        target="_blank"
        class="phone py-1 text-white text-decoration-none"
      >
        <i class="fa-solid fa-headset fa-lg text-center text-white me-2"></i
        >Support</a
      >
      <a
        href="tel:1300711389"
        target="_blank"
        class="phone py-1 text-white text-decoration-none"
      >
        <i class="fas fa-phone-alt fa-lg text-center text-white me-2"></i>Apply
        Now</a
      >
      <a
        href="mailto:sydney.campus@ane.edu.au"
        target="_blank"
        class="text-white text-decoration-none"
        ><i
          class="fa-solid fa-envelope fa-lg text-center text-white border-right border-white me-2"
        ></i>
        Contact Us Sure This is test</a
      >
    </div>
    <header>
      <!-- Top Bar -->
      <div class="bg-color">
        <div class="container">
          <div
            class="d-lg-flex d-none justify-content-end align-items-center gap-3 py-2"
          >
            <div class="fonts-top">
              <a href="about-us.html" class="text-decoration-none text-dark">
                About ANE
              </a>
            </div>

            <div class="fonts-top">
              <a
                href="under-construction.html"
                class="text-decoration-none text-dark"
              >
                Enrol Now
              </a>
            </div>
            <div class="fonts-top">
              <a
                href="student-service.html"
                class="text-decoration-none text-dark"
              >
                Student Service</a
              >
            </div>
            <div class="fonts-top">
              <a
                href="business-partner.html"
                class="text-decoration-none text-dark"
              >
                Agent/Business Portal</a
              >
            </div>
            <div class="fonts-top">
              <a
                href="under-construction.html"
                class="text-decoration-none text-dark"
              >
                ANE Login</a
              >
            </div>

            <div class="fonts-top">
              <a class="cta_header" href="#">
                Download Course Guide<i
                  class="fa fa-angle-double-right ms-2 seccolor"
                ></i
              ></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Navigation Bar -->

      <div class="d-flex justify-content-around align-items-center stickymenu">
        <div class="">
          <img
            src="./img/ane-logo.svg"
            class="ane-logo"
            alt="ane logo"
            loading="lazy"
          />
        </div>
        <div class="d-flex gap-5 align-items-start justify-content-start">
          <div class="course d-lg-flex d-none justify-content-end">
            <div class="course-sub me-4">
              <div class="dropdowns">
                <div
                  class="dropdown"
                  type="button"
                  aria-expanded="false"
                  role="button"
                >
                  <div class="d-flex align-items-center justify-content-center">
                    <a
                      class="text-decoration-none text-dark"
                      href="course.html"
                    >
                      <h3 class="underline fonts">Courses</h3></a
                    >
                    <i class="fas fa-chevron-down fa-sm ms-1 mb-2"></i>
                  </div>
                </div>
                <ul class="dropdown-menu third-bgcolor">
                  <li>
                    <a class="dropdown-item my-2" href="hospitality.html"
                      >Hospitality</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item mb-2" href="health-services.html"
                      >Health Services</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item mb-2" href="technology.html"
                      >Information Technology</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item mb-2" href="child-care.html"
                      >Early Childhood Education</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item mb-2" href="leadership.html"
                      >Leadership</a
                    >
                  </li>

                  <li>
                    <a class="menu-btn ms-2" href="#"
                      >Download Course Guide<i
                        class="fa fa-angle-double-right ms-2 text-white"
                      ></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="mx-4 course-sub">
              <div class="dropdowns">
                <div
                  class="dropdown"
                  type="button"
                  aria-expanded="false"
                  role="button"
                >
                  <div class="d-flex align-items-center justify-content-center">
                    <a
                      class="text-decoration-none text-dark"
                      href="study-with-us.html"
                    >
                      <h3 class="underline fonts">Study with us</h3></a
                    >
                    <i class="fas fa-chevron-down fa-sm ms-1 mb-2"></i>
                  </div>
                </div>
                <ul class="dropdown-menu third-bgcolor">
                  <div class="d-flex">
                    <div>
                      <li>
                        <a class="dropdown-item mb-2" href="about-us.html"
                          >Why study with us</a
                        >
                      </li>
                      <li>
                        <a
                          class="dropdown-item mb-2"
                          href="international-student.html"
                          >International Students</a
                        >
                      </li>
                      <li>
                        <a
                          class="dropdown-item mb-2"
                          href="under-construction.html"
                          >Campus Life</a
                        >
                      </li>
                      <li>
                        <a
                          class="dropdown-item mb-2"
                          href="under-construction.html"
                          >Student Support</a
                        >
                      </li>

                      <li>
                        <a class="menu-btn mx-2" href="#"
                          >Hear From Our Current Students<i
                            class="fa fa-angle-double-right ms-2 text-white"
                          ></i>
                        </a>
                      </li>
                    </div>
                  </div>
                </ul>
              </div>
            </div>
            <div class="mx-4 course-sub">
              <div class="dropdowns">
                <div
                  id="hey"
                  class="dropdown"
                  type="button"
                  aria-expanded="false"
                  role="button"
                >
                  <div class="d-flex align-items-center justify-content-center">
                    <a
                      class="text-decoration-none text-dark"
                      href="how-to-apply.html"
                    >
                      <h3 class="underline fonts">How to apply</h3></a
                    >

                    <i class="fas fa-chevron-down fa-sm ms-1 mb-2"></i>
                  </div>
                </div>
                <ul class="dropdown-menu third-bgcolor">
                  <div class="d-flex">
                    <div>
                      <li>
                        <a class="dropdown-item my-2" href="key-dates.html"
                          >Key Dates</a
                        >
                      </li>
                      <li>
                        <a class="dropdown-item mb-2" href="fees.html">Fees</a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item mb-2"
                          href="under-construction.html"
                          >Admission Criteria</a
                        >
                      </li>

                      <li>
                        <a class="menu-btn ms-2" href="#"
                          >Download Admission Pack<i
                            class="fa fa-angle-double-right ms-2 text-white"
                          ></i>
                        </a>
                      </li>
                    </div>
                  </div>
                </ul>
              </div>
            </div>
            <div class="mx-4 course-sub">
              <div class="dropdowns">
                <div
                  class="dropdown"
                  type="button"
                  aria-expanded="false"
                  role="button"
                >
                  <div class="d-flex align-items-center justify-content-center">
                    <a
                      class="text-decoration-none text-dark"
                      href="whats-on.html"
                      ><h3 class="underline fonts">What's on</h3></a
                    >
                    <i class="fas fa-chevron-down fa-sm ms-1 mb-2"></i>
                  </div>
                </div>
                <ul class="dropdown-menu third-bgcolor">
                  <div>
                    <li>
                      <a class="dropdown-item mb-2" href="event-detail.html">
                        Events</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item mb-2" href="campus-tour.html">
                        Virtual Campus Tour</a
                      >
                    </li>

                    <li>
                      <a
                        class="dropdown-item mb-2"
                        href="under-construction.html"
                        >Graduation</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item mb-2"
                        href="under-construction.html"
                        >Blogs</a
                      >
                    </li>

                    <li>
                      <a class="menu-btn ms-2" href="#"
                        >Join a Free Event<i
                          class="fa fa-angle-double-right ms-2 text-white"
                        ></i>
                      </a>
                    </li>
                  </div>
                </ul>
              </div>
            </div>
            <div class="mx-4 course-sub">
              <div class="dropdowns">
                <div
                  class="dropdown"
                  type="button"
                  aria-expanded="false"
                  role="button"
                >
                  <div class="d-flex align-items-center justify-content-center">
                    <a
                      href="contact-us.html"
                      class="text-decoration-none text-dark"
                      ><h3 class="underline fonts">Contact</h3></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-lg-block d-none">
          <i class="fa fa-search me-1"></i>
        </div>
        <div
          class="d-lg-none d-flex align-items-center justify-content-between mx-3"
        >
          <div
            class="text-dark"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasRight"
            aria-controls="offcanvasRight"
          >
            <!-- <i class="fas fa-bars mx-2 fa-2xl"></i> -->
            <div class="menu">
              <input type="checkbox" />
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>

          <div
            class="offcanvas offcanvas-end w-100 topmargin"
            tabindex="-1"
            id="offcanvasRight"
          >
            <div class="offcanvas-body">
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button
                      class="accordion-button collapsed fw-bold border-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseOne"
                      aria-expanded="false"
                      aria-controls="flush-collapseOne"
                    >
                      Courses
                    </button>
                  </h2>
                  <div
                    id="flush-collapseOne"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      <a
                        class="text-decoration-none text-dark"
                        href="hospitality.html"
                        ><h6 class="">Hospitality</h6></a
                      >
                      <a
                        class="text-decoration-none text-dark"
                        href="health-services.html"
                        ><h6 class="">Health Services</h6></a
                      >
                      <a
                        class="text-decoration-none text-dark"
                        href="technology.html"
                        ><h6 class="">Information Technology</h6></a
                      >
                      <a
                        class="text-decoration-none text-dark"
                        href="child-care.html"
                        ><h6 class="">Early Childhood Education</h6></a
                      >

                      <a
                        class="text-decoration-none text-dark"
                        href="leadership.html"
                        ><h6 class="">Leadership</h6></a
                      >
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button
                      class="accordion-button collapsed fw-bold border-top border-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseTwo"
                      aria-expanded="false"
                      aria-controls="flush-collapseTwo"
                    >
                      Study With Us
                    </button>
                  </h2>
                  <div
                    id="flush-collapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      <a
                        class="text-decoration-none text-dark"
                        href="about-us.html"
                        ><h6 class="">Why Study with us?</h6></a
                      >
                      <a
                        class="text-decoration-none text-dark"
                        href="international-student.html"
                        ><h6 class="">International Students</h6></a
                      >
                      <a
                        class="text-decoration-none text-dark"
                        href="under-construction.html"
                        ><h6 class="">Campus Life</h6></a
                      >
                      <a
                        class="text-decoration-none text-dark"
                        href="under-construction.html"
                        ><h6 class="">Student Support</h6></a
                      >
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button
                      class="accordion-button collapsed fw-bold border-top border-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseThree"
                      aria-expanded="false"
                      aria-controls="flush-collapseThree"
                    >
                      How To Apply
                    </button>
                  </h2>
                  <div
                    id="flush-collapseThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      <a
                        class="text-decoration-none text-dark"
                        href="key-dates.html"
                        ><h6 class="">Key Dates</h6></a
                      >
                      <a class="text-decoration-none text-dark" href="fees.html"
                        ><h6 class="">Fees</h6></a
                      >
                      <a
                        class="text-decoration-none text-dark"
                        href="under-construction.html"
                        ><h6 class="">Admission Criteria</h6></a
                      >
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingFour">
                    <button
                      class="accordion-button collapsed fw-bold border-top border-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseFour"
                      aria-expanded="false"
                      aria-controls="flush-collapseThree"
                    >
                      What's on
                    </button>
                  </h2>
                  <div
                    id="flush-collapseFour"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingFour"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      <a
                        class="text-decoration-none text-dark"
                        href="event-detail.html"
                        ><h6 class="">Events</h6></a
                      >
                      <a
                        class="text-decoration-none text-dark"
                        href="campus-tour.html"
                        ><h6 class="">Virtual Campus Tour</h6></a
                      >

                      <a
                        class="text-decoration-none text-dark"
                        href="under-construction.html"
                        ><h6 class="">Graduation</h6></a
                      >
                      <a
                        class="text-decoration-none text-dark"
                        href="under-construction.html"
                        ><h6 class="">Blogs</h6></a
                      >
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingfour">
                    <button
                      class="accordion-button collapsed fw-bold border-top border-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapsefour"
                      aria-expanded="false"
                      aria-controls="flush-collapsefour"
                    >
                      Contact
                    </button>
                  </h2>
                  <div
                    id="flush-collapsefour"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingfour"
                    data-bs-parent="#accordionFlushExample"
                  >
                    <div class="accordion-body">
                      <a
                        class="text-decoration-none text-dark"
                        href="contact-us.html"
                        ><h6 class="">Contact Us</h6></a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Slider Bar -->
    <section>
      <div class="position-relative sliderbar">
        <div class="dark-overlay">
          <div class="slidebar-content">
            <div>
              <h1 class="text-center fw-bold">The Future Begins Here</h1>
              <h3 class="text-center mt-4 serif-font">
                Choose the field of study
              </h3>
              <div class="text-center mt-3 d-lg-block d-none">
                <a class="text-decoration-none" href="hospitality.html"
                  ><button class="btn btn-outline-warning rounded-pill">
                    Hospitality
                  </button>
                </a>
                <a class="text-decoration-none" href="technology.html"
                  ><button class="btn btn-outline-warning rounded-pill">
                    Information Technology
                  </button>
                </a>
                <a class="text-decoration-none" href="health-services.html">
                  <button class="btn btn-outline-warning rounded-pill">
                    Health Services
                  </button>
                </a>
              </div>
              <!-- Tablet Version -->
              <div class="text-center mt-3 d-lg-none d-md-block d-none">
                <a class="text-decoration-none" href="hospitality.html">
                  <button class="btn btn-outline-light rounded-pill">
                    Hospitality
                  </button></a
                >
                <a class="text-decoration-none" href="technology.html">
                  <button class="btn btn-outline-light rounded-pill">
                    Information Technology
                  </button>
                </a>
                <a class="text-decoration-none" href="health-services.html">
                  <button class="btn btn-outline-light rounded-pill">
                    Health Services
                  </button>
                </a>
              </div>
              <!-- Mobile Version -->
              <div class="text-center d-lg-none d-md-none d-block mt-3">
                <a class="text-decoration-none" href="hospitality.html">
                  <button class="btn btn-outline-light rounded-pill">
                    Hospitality
                  </button>
                </a>
                <a class="text-decoration-none" href="technology.html">
                  <button class="btn btn-outline-light rounded-pill">
                    Information Technology
                  </button>
                </a>
              </div>
              <div class="text-center d-lg-none d-md-none d-block">
                <a class="text-decoration-none" href="health-services.html">
                  <button
                    class="btn btn-outline-light rounded-pill mt-lg-0 mt-3"
                  >
                    Health Services
                  </button>
                </a>
                <a class="text-decoration-none" href="leadership.html">
                  <button
                    class="btn btn-outline-light rounded-pill mt-lg-0 mt-3"
                  >
                    Leadership
                  </button>
                </a>
              </div>

              <div class="mt-3 text-center d-lg-block d-none">
                <a class="text-decoration-none" href="child-care.html">
                  <button class="btn btn-outline-warning rounded-pill">
                    Early Childhood Education
                  </button>
                </a>
                <a class="text-decoration-none" href="leadership.html">
                  <button class="btn btn-outline-warning rounded-pill">
                    Leadership
                  </button>
                </a>
              </div>
              <!-- Tablet Version -->
              <div class="text-center mt-3 d-lg-none d-md-block d-none">
                <a class="text-decoration-none" href="leadership.html">
                  <button class="btn btn-outline-light rounded-pill">
                    Leadership
                  </button>
                </a>

                <a class="text-decoration-none" href="child-care.html">
                  <button class="btn btn-outline-light rounded-pill">
                    Early Childhood Education
                  </button>
                </a>
              </div>
              <!-- Mobile Version -->
              <div class="mt-3 text-center d-lg-none d-md-none d-block">
                <a class="text-decoration-none" href="">
                  <button class="btn btn-outline-light rounded-pill">
                    Early Childhood Education
                  </button>
                </a>
              </div>

              <!-- <div class="text-center mt-4">
                <a
                  class="text-decoration-none fw-bold explore-font"
                  href="course.html"
                  >Explore More</a
                >
              </div> -->
            </div>
          </div>
        </div>
      </div>
      <!-- Slider Below Section -->
      <div class="border-bottom">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center py-4">
            <div class="text-center community fw-bold">
              <img
                src="./img/college.png"
                style="width: 45px; height: auto"
                class="d-block mx-auto"
                alt="college"
              />College Life
            </div>
            <div class="text-center community">
              <img
                src="./img/student.png"
                style="width: 45px; height: auto"
                class="d-block mx-auto"
                alt="community"
              />Our Students
            </div>
            <div class="text-center community">
              <i class="fa fa-xl fa-line-chart mb-4 mt-3 d-block"></i>Career Hub
            </div>
            <div class="text-center community">
              <img
                src="./img/community.png"
                style="width: 40px; height: auto"
                class="d-block mx-auto"
                alt="community"
              />College Life
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Us Section-->
    <section class="top-padding aboutus">
      <div class="container">
        <div class="d-flex align-items-center gap-2">
          <div class="sectionheader d-block fw-bold">About Us</div>
          <span class="sectionstyle"></span>
        </div>
        <div>
          <h4
            class="my-3 contentheader"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            We are here to turn your aspirations into reality
          </h4>
          <p class="contentbody">
            Welcome to ANE College, your gateway to a transformative educational
            experience. Here, we are deeply committed to providing you with the
            highest quality vocational education and training, all within a warm
            and inviting atmosphere. Our mission is to guide you in unlocking
            your true potential, crafting a training experience tailored
            specifically to your individual requirements. At ANE, your journey
            is our priority, and we're excited to accompany you on this path to
            success.
          </p>
          <!-- <a
            href="about-us.html"
            class="mt-2 text-decoration-none primarycolor readmore"
            >Read More<i class="ms-1 fa fa-caret-right primarycolor"></i
          ></a> -->
          <div class="mt-4 row gy-3 gy-md-4">
            <div
              class="col-lg-3 col-md-6"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="card border-0 h-100">
                <div class="card-body">
                  <img
                    src="./img/icon-one.png"
                    class="p-3 rounded-2 iconfonts"
                    alt="iconone"
                  />
                  <h5 class="card-title fw-bold mt-3">Student Counselling</h5>

                  <p class="card-text">
                    Let our enrollment team guide you on which course is best
                    for your long and short term goals They will help advise on
                    course suitability, payment plans and career pathways
                  </p>
                </div>
              </div>
            </div>
            <div
              class="col-lg-3 col-md-6"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="card border-0 h-100">
                <div class="card-body">
                  <img
                    src="./img/icon-two.png"
                    class="p-3 rounded-2 iconfonts"
                    alt="icontwo"
                  />
                  <h5 class="card-title fw-bold mt-3">Student Support</h5>

                  <p class="card-text">
                    From academic advising and career counseling to wellness
                    programs and community engagement opportunities, we are
                    committed to empowering every student to reach their full
                    potential.
                  </p>
                </div>
              </div>
            </div>
            <div
              class="col-lg-3 col-md-6"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="card border-0 h-100">
                <div class="card-body">
                  <img
                    src="./img/icon-three.png"
                    class="p-3 rounded-2 iconfonts"
                    alt="iconthree"
                  />
                  <h5 class="card-title fw-bold mt-3">Career Hub</h5>

                  <p class="card-text">
                    In additional to our annual job fair We offer a variety of
                    positions within our network of employers as well as skill
                    recommendations, training to help you achieve your dream job
                  </p>
                </div>
              </div>
            </div>
            <div
              class="col-lg-3 col-md-6"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <div class="card border-0 h-100">
                <div class="card-body">
                  <img
                    src="./img/icon-four.png"
                    class="p-3 rounded-2 iconfonts"
                    alt="iconfour"
                  />
                  <h5 class="card-title fw-bold mt-3">Community</h5>

                  <p class="card-text">
                    To help you adjust and settle in as you begin your studies
                    You are invited to join our frequent student events,
                    including graduation, Christmas party, celebrations and
                    more!
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Courses Section-->
    <section class="top-padding">
      <div class="py-5 bg-color">
        <div class="container">
          <div class="row">
            <div class="d-flex align-items-center gap-2 justify-content-center">
              <span class="sectionstyle"></span>
              <div class="sectionheader d-block fw-bold">Our Courses</div>
              <span class="sectionstyle"></span>
            </div>
            <h4
              class="my-3 contentheader text-center"
              data-aos="zoom-in"
              data-aos-delay="100"
            >
              Choose Your Course
            </h4>
            <!-- Course Tabbar-->
            <div class="d-flex justify-content-center">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link active text-dark"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-course"
                    type="button"
                    role="tab"
                  >
                    All Courses
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link text-dark"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-child"
                    type="button"
                    role="tab"
                  >
                    Early Childhood Education
                  </button>
                </li>

                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link text-dark"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-health"
                    type="button"
                    role="tab"
                  >
                    Health Services
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link text-dark"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-it"
                    type="button"
                    role="tab"
                  >
                    Information Technology
                  </button>
                </li>

                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link text-dark"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-hospitality"
                    type="button"
                    role="tab"
                  >
                    Hospitality
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link text-dark"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-leadership"
                    type="button"
                    role="tab"
                  >
                    Leadership
                  </button>
                </li>
              </ul>
            </div>
            <!-- Content Tabbar-->
            <div class="tab-content mt-3" id="pills-tabContent">
              <div
                class="tab-pane fade show active"
                id="pills-course"
                role="tabpanel"
              >
                <!-- All Course-->
                <div class="row gy-3 gy-md-4">
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">
                            Technology
                          </button></span
                        >
                        <img
                          src="./img/course-one.png"
                          class="card-img-top courseimage"
                          alt="course"
                          loading="lazy"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Diploma of Information Technology
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                        <a
                          href="diploma-of-information.html"
                          class="mt-2 underline primarycolor fullcourse"
                          >Full Course<i
                            class="ms-2 fa-solid fa-arrow-right-long primarycolor align-middle"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">
                            Hospitality
                          </button></span
                        >
                        <img
                          src="./img/course-two.png"
                          class="card-img-top courseimage"
                          alt="course"
                          loading="lazy"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Diploma of Hospitality Management
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                        <a
                          href="diploma-of-hospitality.html"
                          class="mt-2 underline primarycolor fullcourse"
                          >Full Course<i
                            class="ms-2 fa-solid fa-arrow-right-long primarycolor align-middle"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">
                            Child Care
                          </button></span
                        >
                        <img
                          src="./img/child-care.jpg"
                          class="card-img-top courseimage"
                          alt="course"
                          loading="lazy"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Diploma of Early Childhood Education and Care
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                        <a
                          href="under-construction.html"
                          class="mt-2 underline primarycolor fullcourse"
                          >Full Course<i
                            class="ms-2 fa-solid fa-arrow-right-long primarycolor align-middle"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">
                            Leadership
                          </button></span
                        >
                        <img
                          src="./img/leadership-mgmt.jpg"
                          class="card-img-top courseimage"
                          alt="course"
                          loading="lazy"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Diploma of Leadership and Management
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                        <a
                          href="under-construction.html"
                          class="mt-2 underline primarycolor fullcourse"
                          >Full Course<i
                            class="ms-2 fa-solid fa-arrow-right-long primarycolor align-middle"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">Health</button></span
                        >
                        <img
                          src="./img/individual-support.jpg"
                          class="card-img-top courseimage"
                          alt="course"
                          loading="lazy"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Certificate III in Individual Support
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                        <a
                          href="certificate-III-individual.html"
                          class="mt-2 underline primarycolor fullcourse"
                          >Full Course<i
                            class="ms-2 fa-solid fa-arrow-right-long primarycolor align-middle"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">
                            Community
                          </button></span
                        >
                        <img
                          src="./img/course-three.svg"
                          class="card-img-top"
                          alt="course"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Diploma of Community Services
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">
                            Disability
                          </button></span
                        >
                        <img
                          src="./img/course-three.svg"
                          class="card-img-top"
                          alt="course"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Certificate IV in Disability Suppport
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">
                            Leadership
                          </button></span
                        >
                        <img
                          src="./img/course-three.svg"
                          class="card-img-top"
                          alt="course"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Diploma of Leadership and Management
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">
                            Leadership
                          </button></span
                        >
                        <img
                          src="./img/course-three.svg"
                          class="card-img-top"
                          alt="course"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Graduate Diploma of Management (Learning)
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">
                            Child Care
                          </button></span
                        >
                        <img
                          src="./img/course-three.svg"
                          class="card-img-top"
                          alt="course"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Certificate III in Early Childhood Education and Care
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">
                            Support
                          </button></span
                        >
                        <img
                          src="./img/course-three.svg"
                          class="card-img-top"
                          alt="course"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Certificate IV in Ageing Support
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">
                            Technology
                          </button></span
                        >
                        <img
                          src="./img/course-three.svg"
                          class="card-img-top"
                          alt="course"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Certificate IV in Information Technology (Networking)
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">
                            Child Care
                          </button></span
                        >
                        <img
                          src="./img/course-three.svg"
                          class="card-img-top"
                          alt="course"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Diploma of Early Childhood Education and Care
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">
                            Support
                          </button></span
                        >
                        <img
                          src="./img/course-three.svg"
                          class="card-img-top"
                          alt="course"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Certificate III in Individual Support
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
              <div class="tab-pane fade" id="pills-hospitality" role="tabpanel">
                <!-- Hospitality-->
                <div class="row gy-3 gy-md-4">
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">
                            Hospitality
                          </button></span
                        >
                        <img
                          src="./img/course-three.png"
                          class="card-img-top courseimage"
                          alt="course"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Certificate IV in Kitchen Management
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                        <a
                          href="certfifcate-IV-kitchen.html"
                          class="mt-2 underline primarycolor fullcourse"
                          >Full Course<i
                            class="ms-2 fa-solid fa-arrow-right-long primarycolor align-middle"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">
                            Hospitality
                          </button></span
                        >
                        <img
                          src="./img/course-two.png"
                          class="card-img-top courseimage"
                          alt="course"
                          loading="lazy"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Diploma of Hospitality Management
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                        <a
                          href="diploma-of-hospitality.html"
                          class="mt-2 underline primarycolor fullcourse"
                          >Full Course<i
                            class="ms-2 fa-solid fa-arrow-right-long primarycolor align-middle"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-health" role="tabpanel">
                <!-- Health-->
                <div class="row gy-3 gy-md-4">
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">Health</button></span
                        >
                        <img
                          src="./img/individual-support.jpg"
                          class="card-img-top courseimage"
                          alt="course"
                          loading="lazy"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Certificate III in Individual Support
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                        <a
                          href="certificate-III-individual.html"
                          class="mt-2 underline primarycolor fullcourse"
                          >Full Course<i
                            class="ms-2 fa-solid fa-arrow-right-long primarycolor align-middle"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">Health</button></span
                        >
                        <img
                          src="./img/ageing.jpg"
                          class="card-img-top courseimage"
                          alt="course"
                          loading="lazy"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Certificate IV in Ageing Support
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                        <a
                          href="certificate-IV-ageing.html"
                          class="mt-2 underline primarycolor fullcourse"
                          >Full Course<i
                            class="ms-2 fa-solid fa-arrow-right-long primarycolor align-middle"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">Health</button></span
                        >
                        <img
                          src="./img/course-three.png"
                          class="card-img-top courseimage"
                          alt="course"
                          loading="lazy"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Diploma of Community Services
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                        <a
                          href="diploma-of-community.html"
                          class="mt-2 underline primarycolor fullcourse"
                          >Full Course<i
                            class="ms-2 fa-solid fa-arrow-right-long primarycolor align-middle"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-it" role="tabpanel">
                <!-- Information Technology-->
                <div class="row gy-3 gy-md-4">
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">
                            Technology
                          </button></span
                        >
                        <img
                          src="./img/course-one.png"
                          class="card-img-top courseimage"
                          alt="course"
                          loading="lazy"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Diploma of Information Technology
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                        <a
                          href="diploma-of-information.html"
                          class="mt-2 underline primarycolor fullcourse"
                          >Full Course<i
                            class="ms-2 fa-solid fa-arrow-right-long primarycolor align-middle"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">
                            Technology
                          </button></span
                        >
                        <img
                          src="./img/information-technology.png"
                          class="card-img-top courseimage"
                          alt="course"
                          loading="lazy"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Certificate IV in Information Technology
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                        <a
                          href="certificate-IV-information.html"
                          class="mt-2 underline primarycolor fullcourse"
                          >Full Course<i
                            class="ms-2 fa-solid fa-arrow-right-long primarycolor align-middle"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-child" role="tabpanel">
                <!-- Child Care-->
                <div class="row gy-3 gy-md-4">
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">
                            Child Care
                          </button></span
                        >
                        <img
                          src="./img/child-care.jpg"
                          class="card-img-top courseimage"
                          alt="course"
                          loading="lazy"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Diploma of Early Childhood Education and Care
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                        <a
                          href="under-construction.html"
                          class="mt-2 underline primarycolor fullcourse"
                          >Full Course<i
                            class="ms-2 fa-solid fa-arrow-right-long primarycolor align-middle"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">
                            Child Care
                          </button></span
                        >
                        <img
                          src="./img/care-two.jpg"
                          class="card-img-top courseimage"
                          alt="course"
                          loading="lazy"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Certificate III in Early Childhood Education and Care
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                        <a
                          href="under-construction.html"
                          class="mt-2 underline primarycolor fullcourse"
                          >Full Course<i
                            class="ms-2 fa-solid fa-arrow-right-long primarycolor align-middle"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-leadership" role="tabpanel">
                <!--Leadership-->
                <div class="row gy-3 gy-md-4">
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">
                            Leadership
                          </button></span
                        >
                        <img
                          src="./img/leadership-mgmt.jpg"
                          class="card-img-top courseimage"
                          alt="course"
                          loading="lazy"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Diploma of Leadership and Management
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                        <a
                          href="under-construction.html"
                          class="mt-2 underline primarycolor fullcourse"
                          >Full Course<i
                            class="ms-2 fa-solid fa-arrow-right-long primarycolor align-middle"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                      <div class="position-relative">
                        <span class="course-badge"
                          ><button class="btn btn-warning">
                            Leadership
                          </button></span
                        >
                        <img
                          src="./img/leadership-mgmt.jpg"
                          class="card-img-top courseimage"
                          alt="course"
                          loading="lazy"
                        />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title fw-bold">
                          Graduate Diploma of Management (Learning)
                        </h5>
                        <p class="card-text">
                          This is the foundational course that teaches you
                          technical competence builds your ability to translate
                          technical knowledge into business insights.
                        </p>
                        <a
                          href="under-construction.html"
                          class="mt-2 underline primarycolor fullcourse"
                          >Full Course<i
                            class="ms-2 fa-solid fa-arrow-right-long primarycolor align-middle"
                          ></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Course Download-->
            <div class="container">
              <div
                class="text-center mt-5 primarybg d-lg-flex justify-content-between align-items-center p-4 rounded-2"
              >
                <h5 class="fw-bold text-white">
                  Not sure which course is right for you?
                </h5>
                <span class="text-white"
                  >Download our free course guide and toolkit</span
                >
                <div>
                  <button
                    class="btn btn-light rounded-pill mt-2 mt-lg-0"
                    data-bs-toggle="modal"
                    data-bs-target="#"
                  >
                    Download Course Guide
                    <i class="fa fa-angle-double-right ms-2 text-dark"></i>
                  </button>
                  <!-- Form Modals -->
                  <div
                    id="myModal"
                    class="modal fade"
                    tabindex="-1"
                    aria-labelledby="myModalLabel"
                    aria-hidden="true"
                    style="display: none"
                  >
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title fw-bold" id="myModalLabel">
                            Course Guide
                          </h5>
                          <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group mb-3">
                              <input
                                type="text"
                                class="form-control"
                                id="firstName"
                                placeholder="First Name"
                              />
                            </div>
                            <div class="form-group mb-3">
                              <input
                                type="text"
                                class="form-control"
                                id="lastName"
                                placeholder="Last Name"
                              />
                            </div>

                            <div class="form-group mb-3">
                              <input
                                type="email"
                                class="form-control"
                                id="email"
                                placeholder="Email"
                              />
                            </div>
                            <div class="form-group">
                              <input
                                type="tel"
                                class="form-control intl-tel-input"
                                id="phone"
                                placeholder="Phone Number"
                              />
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button
                            type="button"
                            class="btn btn-light"
                            data-bs-dismiss="modal"
                          >
                            Close
                          </button>
                          <button type="button" class="btn btn-primary">
                            Submit
                          </button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Academic Journey Section-->
    <section class="top-padding academic">
      <div class="container">
        <div class="d-flex align-items-center gap-2 justify-content-center">
          <span class="sectionstyle"></span>
          <div class="sectionheader d-block fw-bold">Our Journey</div>
          <span class="sectionstyle"></span>
        </div>
        <h4
          class="my-3 contentheader text-center"
          data-aos="zoom-in"
          data-aos-delay="100"
        >
          Academic Journey with ANE
        </h4>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="d-flex justify-content-center d-lg-block">
              <img
                src="./img/academic.png"
                alt="academic"
                class="d-block journey"
                loading="lazy"
              />
            </div>
          </div>
          <div class="col-lg-6 mt-lg-0 mt-3 col-md-6">
            <p>
              ANE College offers a wide range of services to international
              students. Study with us and gain different skills and experiences
              that will be helpful for your future and will help you accomplish
              your dreams and goals.
            </p>
            <img
              src="./img/process.svg"
              alt="academic-process"
              class="svg-auto"
              data-aos="fade-up"
              data-aos-delay="100"
              loading="lazy"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Blog Section-->
    <section class="top-padding blog">
      <div class="py-4 bg-color">
        <div class="container">
          <div class="d-flex align-items-center gap-2 justify-content-center">
            <span class="sectionstyle"></span>
            <div class="sectionheader d-block fw-bold">Latest News & Blogs</div>
            <span class="sectionstyle"></span>
          </div>
          <h4
            class="my-3 contentheader text-center"
            data-aos="zoom-in"
            data-aos-delay="100"
          >
            Get Every Single Updates
          </h4>
          <div class="owl-carousel">
            <!-- Carousel Item One-->
            <div class="item">
              <div class="row">
                <div
                  class="col-lg-6 col-md-6 order-lg-2 order-md-2 d-flex align-items-center"
                >
                  <img
                    src="./img/blog-one.png"
                    loading="lazy"
                    alt="blog"
                    class="d-block"
                  />
                </div>
                <div
                  class="col-lg-6 col-md-6 order-lg-1 order-md-2"
                  data-aos="fade-up"
                  data-aos-delay="100"
                >
                  <div class="p-3 bg-white shadow mt-lg-5">
                    <h6 class="lato-font fw-bold thirdcolor">26 Feb 2023</h6>
                    <h5 class="lato-font fw-bold">
                      Genuine Temporary Entrant Statement (GTE): How it’s
                      assessed, requirements and more
                    </h5>
                    <p>
                      We are drawing closer to that peak time of year when
                      students’ visas expire, and they look to extend their
                      Students who are going to extend their student visa need
                      to start preparing the..
                    </p>
                    <a
                      href="under-construction.html"
                      class="mt-2 text-decoration-none primarycolor readmore"
                      >Read More<i
                        class="ms-1 fa fa-caret-right primarycolor"
                      ></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Carousel Item Two-->
            <div class="item">
              <div class="row">
                <div
                  class="col-lg-6 col-md-6 order-lg-2 order-md-2 d-flex align-items-center"
                >
                  <img
                    src="./img/blog-one.png"
                    loading="lazy"
                    alt="blog"
                    class="d-block"
                  />
                </div>
                <div class="col-lg-6 col-md-6 order-lg-1 order-md-2">
                  <div class="p-3 bg-white shadow mt-lg-5">
                    <h6 class="lato-font fw-bold thirdcolor">26 Feb 2023</h6>
                    <h5 class="lato-font fw-bold">
                      Genuine Temporary Entrant Statement (GTE): How it’s
                      assessed, requirements and more
                    </h5>
                    <p>
                      We are drawing closer to that peak time of year when
                      students’ visas expire, and they look to extend their
                      Students who are going to extend their student visa need
                      to start preparing the..
                    </p>
                    <a
                      href="under-construction.html"
                      class="mt-2 text-decoration-none primarycolor readmore"
                      >Read More<i
                        class="ms-1 fa fa-caret-right primarycolor"
                      ></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
      ></script>
      <script
        src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
      ></script>
      <script>
        $(".owl-carousel").owlCarousel({
          loop: true,
          margin: 10,
          dots: true,
          autoplay: false,
          nav: true,
          navText: [
            '<i class="fas fa-arrow-left"></i>',
            '<i class="fas fa-arrow-right"></i>',
          ],
          responsive: {
            0: {
              items: 1,
            },
            600: {
              items: 1,
            },
            1000: {
              items: 1,
            },
          },
        });
      </script>
    </section>

    <!-- Featured Events Section-->
    <section class="blog top-padding">
      <div class="container">
        <!-- <div class="d-flex align-items-center gap-2 justify-content-center">
          <span class="sectionstyle"></span>
          <div class="sectionheader d-block fw-bold">Features Events</div>
          <span class="sectionstyle"></span>
        </div>
        <h4
          class="my-3 contentheader text-center"
          data-aos="zoom-in"
          data-aos-delay="100"
        >
          Our Event Bulletin
        </h4>
        <div class="row">
          <div class="owl-carousel">
            <div class="mb-2">
              <div class="card border-0 shadow h-100">
                <img
                  src="./img/event-one.svg"
                  class="card-img-top"
                  alt="course"
                  loading="lazy"
                />
                <div class="card-body">
                  <p class="text-muted fw-bold">Convocation</p>
                  <h6 class="card-title fw-bold border-bottom pb-3">
                    How to become an Entrepreneur & Self Dependent
                  </h6>
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <span>10:00 A.M</span>
                    <a
                      href="event-detail.html"
                      class="mt-2 d-block text-decoration-none primarycolor readmore"
                      >View Event Detail<i
                        class="ms-1 fa fa-caret-right primarycolor"
                      ></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="">
              <div class="card border-0 shadow h-100">
                <img
                  src="./img/event-two.svg"
                  class="card-img-top"
                  alt="course"
                  loading="lazy"
                />
                <div class="card-body">
                  <p class="text-muted fw-bold">Convocation</p>
                  <h6 class="card-title fw-bold pb-3 border-bottom">
                    How to become an Entrepreneur & Self Dependent
                  </h6>
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <span>10:00 A.M</span>
                    <a
                      href="event-detail.html"
                      class="mt-2 d-block text-decoration-none primarycolor readmore"
                      >View Event Detail<i
                        class="ms-1 fa fa-caret-right primarycolor"
                      ></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="">
              <div class="card border-0 shadow h-100">
                <img
                  src="./img/event-one.svg"
                  class="card-img-top"
                  alt="course"
                  loading="lazy"
                />
                <div class="card-body">
                  <p class="text-muted fw-bold">Convocation</p>
                  <h6 class="card-title fw-bold pb-3 border-bottom">
                    How to become an Entrepreneur & Self Dependent
                  </h6>
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <span>10:00 A.M</span>
                    <a
                      href="event-detail.html"
                      class="mt-2 d-block text-decoration-none primarycolor readmore"
                      >View Event Detail<i
                        class="ms-1 fa fa-caret-right primarycolor"
                      ></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <!-- <script>
          $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: false,
            autoplay: true,

            responsive: {
              0: {
                items: 1,
              },
              600: {
                items: 2,
              },
              1000: {
                items: 3,
              },
            },
          });
        </script> -->
        <!-- Admission Section-->
        <div class="d-lg-flex">
          <div class="d-lg-block d-none">
            <img
              class="primarybg"
              src="./img/admission.png"
              loading="lazy"
              alt="admission"
            />
          </div>
          <div class="w-100 primarybg">
            <div class="text-white p-4">
              <h5>ADMISSION GOING ON</h5>
              <h2 class="admssion-font">
                Are you eligible for a partial schoarship?
              </h2>
              <p>
                Take the first step towards your academic journey. Don't miss
                out on this chance to pursue your dreams. Apply today and embark
                on a path to success
              </p>

              <form class="row mt-2">
                <div class="form-groups col-lg-4">
                  <input
                    type="text"
                    class="form-controls primarybg text-white"
                    placeholder=""
                    id="full-name-input"
                    oninput="checkForm()"
                  />
                  <label for="full-name-input">Full Name</label>
                </div>
                <div class="form-groups col-lg-4">
                  <input
                    type="email"
                    class="form-controls primarybg text-white"
                    placeholder=""
                    id="email-input"
                    oninput="checkForm()"
                  />
                  <label for="email-input">Email Address</label>
                </div>
                <div class="form-groups col-lg-4">
                  <input
                    type="text"
                    class="form-controls primarybg text-white"
                    placeholder=""
                    id="course-name-input"
                    oninput="checkForm()"
                  />
                  <label for="course-name-input">Course Name</label>
                </div>
              </form>
              <button
                class="btn btn-light rounded-pill"
                id="download-button"
                disabled
              >
                Download Course Guide
                <i class="fa fa-angle-double-right ms-2 text-dark"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Alumini Section-->
    <section class="top-padding">
      <div class="bg-color py-lg-5 py-4">
        <div class="container">
          <div class="d-flex align-items-center gap-2 justify-content-center">
            <span class="sectionstyle"></span>
            <div class="sectionheader d-block fw-bold">Alumini</div>
            <span class="sectionstyle"></span>
          </div>
          <h4
            class="my-3 contentheader text-center"
            data-aos="zoom-in"
            data-aos-delay="100"
          >
            Hear From Our Students
          </h4>

          <div class="">
            <div class="owl-carousel">
              <div class="">
                <div class="row shadow p-4 bg-white h-100">
                  <div class="">
                    <p
                      class="alumini-font mt-lg-3 mt-md-0 mt-3"
                      style="height: 67px; overflow-y: scroll"
                    >
                      ANE College offers a fantastic learning environment. The
                      classrooms were modern and equipped with cutting-edge
                      technology, which enhanced our learning experience. The
                      teaching style was dynamic and interactive, with
                      instructors who were passionate about their subjects and
                      always willing to help anytime.
                    </p>
                    <div class="d-flex gap-3 align-items-center">
                      <div class="col-6">
                        <img
                          class=""
                          src="./img/student-testimonial.jpg"
                          alt="alumini"
                          loading="lazy"
                        />
                      </div>
                      <div>
                        <h5 class="primarycolor admssion-font fw-bold">
                          James Dale
                        </h5>
                        <p class="admssion-font my-0 py-0">Batch 2020-2021</p>
                        <p class="admssion-font my-0 py-0">
                          Diploma of Hospitality Management
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="">
                <div class="row shadow p-4 bg-white h-100">
                  <div class="">
                    <p
                      class="alumini-font mt-lg-3 mt-md-0 mt-3"
                      style="height: 67px; overflow-y: scroll"
                    >
                      ANE College's Diploma of Information Technology program
                      exceeded my expectations. The curriculum was robust, the
                      instructors were knowledgeable, and the hands-on
                      experience was invaluable. I feel well-equipped for a
                      career in IT. ANE College offers a fantastic learning
                      environment. The classrooms were modern and equipped with
                      cutting-edge technology, which enhanced our learning
                      experience. The teaching style was dynamic and
                      interactive, with instructors who were passionate about
                      their subjects and always willing to help anytime.
                    </p>
                    <div class="d-flex gap-3 align-items-center">
                      <div class="col-6">
                        <img
                          class=""
                          src="./img/testimonial-two.jpg"
                          alt="alumini"
                          loading="lazy"
                        />
                      </div>
                      <div>
                        <h5 class="primarycolor admssion-font fw-bold">
                          Robert Carlos
                        </h5>
                        <p class="admssion-font my-0 py-0">Batch 2020-2021</p>
                        <p class="admssion-font my-0 py-0">
                          Diploma of Information Technology
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <script>
              $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 40,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayTimeout: 6000,

                responsive: {
                  0: {
                    items: 1,
                  },
                  600: {
                    items: 2,
                  },
                  1000: {
                    items: 3,
                  },
                },
              });
            </script>
          </div>
        </div>
        <div class="text-center mt-lg-5 mt-4">
          <a href="under-construction.html" class="custom-button">
            View More Alumini<i
              class="fa fa-angle-double-right ms-2 text-white"
            ></i
          ></a>
        </div>
      </div>
    </section>

    <!-- Gallery Section-->
    <section class="top-padding">
      <div class="container">
        <div class="d-flex align-items-center gap-2 justify-content-center">
          <span class="sectionstyle"></span>
          <div class="sectionheader d-block fw-bold">Frames of Experience</div>
          <span class="sectionstyle"></span>
        </div>
        <h4
          class="my-3 contentheader text-center"
          data-aos="zoom-in"
          data-aos-delay="100"
        >
          Life at ANE
        </h4>
        <div class="text-center">
          <div class="owl-carousel">
            <img
              src="./img/gallery-one.jpg"
              class="gallery"
              loading="lazy"
              alt="gallery"
            />
            <img
              class="mt-lg-5 gallery"
              src="./img/gallery-two.jpg"
              loading="lazy"
              alt="gallery"
            />
            <img
              src="./img/gallery-three.jpg"
              class="gallery"
              alt="gallery"
              loading="lazy"
            />
            <img
              class="mt-lg-5 gallery"
              src="./img/gallery-four.jpg"
              loading="lazy"
              alt="gallery"
            />
          </div>
        </div>
        <script>
          $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: false,
            autoplay: true,

            responsive: {
              0: {
                items: 2,
              },
              600: {
                items: 3,
              },
              1000: {
                items: 4,
              },
            },
          });
        </script>
      </div>
    </section>

    <!--Discover Section-->
    <section class="top-padding">
      <div class="container">
        <div></div>
      </div>
    </section>

    <!--Footer Section-->
    <footer class="mt-5 bg-color pt-4 d-none d-lg-block">
      <div class="container">
        <!-- Top Footer Section-->
        <div
          class="d-lg-flex justify-content-between border-bottom border-2 border-warning pb-3"
        >
          <div class="col-lg-3">
            <img
              class="mx-auto d-block"
              src="./img/ane-logo.svg"
              loading="lazy"
              alt="logo"
            />
            <p class="fs-14 py-0 my-0">
              ANE College, a learning community that aspires to grow in
              knowledge, envisions the comprehensive development of the students
            </p>
            <div class="py-0 my-0">
              <span class="fs-12 primarycolor"><b>ABN:</b> 18 634 728 466</span>
              <span class="fs-12 primarycolor"><b>CRICOS:</b> 03859B</span>
              <span class="fs-12 primarycolor"><b>RTO:</b> 45624</span>
            </div>
          </div>
          <div>
            <h6 class="fw-bold">SYDNEY CAMPUS</h6>
            <span class="lato-font">
              <i class="fa-solid fa-location-dot me-2 align-middle"></i
              >Directions</span
            >
            <a
              href="https://www.google.com/maps/place/6%2F136+Chalmers+St,+Surry+Hills+NSW+2010,+Australia/@-33.8871749,151.2069209,17z/data=!3m1!4b1!4m6!3m5!1s0x6b12ae20f3852d0b:0x340af78d56578901!8m2!3d-33.8871749!4d151.2069209!16s%2Fg%2F11qpknw2bq?entry=ttu"
              class="text-decoration-none"
            >
              <p class="fs-14i primarycolor ms-4">
                Level 6, 136 Chalmers Street Surry Hills,<br />
                NSW, Australia 2010
              </p></a
            >
            <span class="lato-font">
              <i class="fa-solid fa-phone me-2 align-middle"></i>Phone</span
            >
            <a href="tel:1300711389" class="text-decoration-none"
              ><p class="fs-14i primarycolor ms-4">1300 711 389 | Ext 100</p></a
            >
          </div>
          <div>
            <h6 class="fw-bold">CANBERRA CAMPUS</h6>
            <span class="lato-font">
              <i class="fa-solid fa-location-dot me-2 align-middle"></i
              >Directions</span
            >
            <a
              href="https://www.google.com/maps/place/8+Chandler+St,+Belconnen+ACT+2617,+Australia/@-35.2378796,149.0686882,17z/data=!3m1!4b1!4m6!3m5!1s0x6b17ad71c4b9ea21:0x455b5d58d1bd5550!8m2!3d-35.2378796!4d149.0686882!16s%2Fg%2F11bw3fc0h5?entry=ttu"
              class="text-decoration-none"
            >
              <p class="fs-14i primarycolor ms-4">
                8 Chandler Street, BELCONNEN,<br />
                ACT 2617, Australia
              </p></a
            >
            <span class="lato-font">
              <i class="fa-solid fa-phone me-2 align-middle"></i>Phone</span
            >
            <a href="tel:1300711389" class="text-decoration-none"
              ><p class="fs-14i primarycolor ms-4">1300 711 389 | Ext 101</p></a
            >
          </div>
          <div class="">
            <h6 class="fw-bold">FOR MORE INFO</h6>
            <div>
              <a
                href="mailto:sydney.campus@ane.edu.au"
                class="text-decoration-none"
                ><p class="fs-14i primarycolor">
                  <i
                    class="fa-solid fa-envelope text-dark me-2 align-middle"
                  ></i>
                  sydney.campus@ane.edu.au
                </p></a
              >
            </div>
            <a href="https://ane.edu.au/" class="text-decoration-none"
              ><p class="fs-14i primarycolor">
                <i class="fa-solid fa-globe text-dark me-2 align-middle"></i>
                www.ane.edu.au
              </p></a
            >
            <div class="">
              <a href="https://www.facebook.com/anecollege/" target="_blank">
                <i
                  class="fa-brands fa-lg fa-facebook-f me-3 primarycolor"
                ></i></a
              ><a
                href="https://www.instagram.com/anecollege.edu.au/"
                target="_blank"
              >
                <i
                  class="fa-brands fa-lg fa-instagram me-3 primarycolor"
                ></i></a
              ><a
                href="https://au.linkedin.com/company/australian-national-education-college"
                target="_blank"
                ><i
                  class="fa-brands fa-lg fa-linkedin-in me-3 primarycolor"
                ></i></a
              ><a href="#" target="_blank"
                ><i class="fa-brands fa-lg fa-x-twitter primarycolor"></i
              ></a>
            </div>
          </div>
        </div>

        <!-- Marketed  Section-->
        <div class="d-flex justify-content-between align-items-center pb-2">
          <div class="col-5 d-flex gap-2 align-items-center mt-2">
            <div class="my-0 py-0">
              <img
                src="./img/footer-two.svg"
                class="mb-2"
                loading="lazy"
                alt="footer-one"
              />
              <img src="./img/footer-one.svg" alt="footer-one" loading="lazy" />
            </div>
            <p class="fs-12 my-0 py-0">
              ANE acknowledges and pays respect to the past and present
              Traditional Custodians and Elders of this nationand the
              continuation of cultural, spiritual and educational practices of
              Aboriginal and Torres Strait Islander peoples.
            </p>
          </div>
          <div class="lato-font fs-13">
            <a href="" class="text-decoration-none text-dark">Privacy Policy</a>
            |
            <a href="" class="text-decoration-none text-dark"
              >Terms and Conditions</a
            >
            | <a href="" class="text-decoration-none text-dark">Sitemap</a> |<a
              href=""
              class="text-decoration-none text-dark"
            >
              Accessibility</a
            >
          </div>
          <div class="lato-font fs-13">
            Marketing Agency
            <a
              href="https://support.tekgro.com.au/"
              target="_blank"
              class="text-decoration-none"
              ><img src="./img/tekgro.svg" alt="tekgro" loading="lazy"
            /></a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Separate Mobile Footer-->
    <footer class="mt-5 bg-color pt-4 d-lg-none d-block">
      <div class="container">
        <!-- Top Footer Section-->
        <div
          class="d-lg-flex justify-content-between border-bottom border-2 border-warning pb-3"
        >
          <div class="col-lg-3">
            <img
              class="mx-auto d-block"
              src="./img/ane-logo.svg"
              alt="logo"
              loading="lazy"
            />
            <p class="fs-14 py-0 my-0 text-center">
              ANE College, a learning community that aspires to grow in
              knowledge, envisions the comprehensive development of the students
            </p>
            <div class="py-0 my-0 text-center">
              <span class="fs-12 primarycolor"><b>ABN:</b> 18 634 728 466</span>
              <span class="fs-12 primarycolor"><b>CRICOS:</b> 03859B</span>
              <span class="fs-12 primarycolor"><b>RTO:</b> 45624</span>
            </div>
          </div>
          <div class="row mt-3">
            <div class="text-left col-6">
              <h6 class="fw-bold">SYDNEY CAMPUS</h6>
              <span class="lato-font">
                <i class="fa-solid fa-location-dot me-2 align-middle"></i
                >Directions</span
              >
              <a
                href="https://www.google.com/maps/place/6%2F136+Chalmers+St,+Surry+Hills+NSW+2010,+Australia/@-33.8871749,151.2069209,17z/data=!3m1!4b1!4m6!3m5!1s0x6b12ae20f3852d0b:0x340af78d56578901!8m2!3d-33.8871749!4d151.2069209!16s%2Fg%2F11qpknw2bq?entry=ttu"
                class="text-decoration-none"
              >
                <p class="fs-14i primarycolor ms-4">
                  Level 6, 136 Chalmers Street Surry Hills,<br />
                  NSW, Australia 2010
                </p></a
              >
              <span class="lato-font">
                <i class="fa-solid fa-phone me-2 align-middle"></i>Phone</span
              >
              <a href="tel:1300711389" class="text-decoration-none"
                ><p class="fs-14i primarycolor ms-4">
                  1300 711 389 | Ext 100
                </p></a
              >
            </div>
            <div class="text-left col-6">
              <h6 class="fw-bold">CANBERRA CAMPUS</h6>
              <span class="lato-font">
                <i class="fa-solid fa-location-dot me-2 align-middle"></i
                >Directions</span
              >
              <a
                href="https://www.google.com/maps/place/8+Chandler+St,+Belconnen+ACT+2617,+Australia/@-35.2378796,149.0686882,17z/data=!3m1!4b1!4m6!3m5!1s0x6b17ad71c4b9ea21:0x455b5d58d1bd5550!8m2!3d-35.2378796!4d149.0686882!16s%2Fg%2F11bw3fc0h5?entry=ttu"
                class="text-decoration-none"
              >
                <p class="fs-14i primarycolor ms-4">
                  8 Chandler Street, BELCONNEN,<br />
                  ACT 2617, Australia
                </p></a
              >
              <span class="lato-font">
                <i class="fa-solid fa-phone me-2 align-middle"></i>Phone</span
              >
              <a href="tel:1300711389" class="text-decoration-none"
                ><p class="fs-14i primarycolor ms-4">
                  1300 711 389 | Ext 101
                </p></a
              >
            </div>
          </div>
          <div class="text-center">
            <h6 class="fw-bold">FOR MORE INFO</h6>
            <span class="lato-font">
              <i class="fa-solid fa-envelope me-2 align-middle"></i>Email</span
            >
            <a
              href="mailto:sydney.campus@ane.edu.au"
              class="text-decoration-none"
              ><p class="fs-14i primarycolor ms-4">
                sydney.campus@ane.edu.au
              </p></a
            >
            <div class="ms-4">
              <a href="https://www.facebook.com/anecollege/" target="_blank">
                <i
                  class="fa-brands fa-lg fa-facebook-f me-3 primarycolor"
                ></i></a
              ><a
                href="https://www.instagram.com/anecollege.edu.au/"
                target="_blank"
              >
                <i
                  class="fa-brands fa-lg fa-instagram me-3 primarycolor"
                ></i></a
              ><a
                href="https://au.linkedin.com/company/australian-national-education-college"
                target="_blank"
                ><i
                  class="fa-brands fa-lg fa-linkedin-in me-3 primarycolor"
                ></i></a
              ><a href="#" target="_blank"
                ><i class="fa-brands fa-lg fa-x-twitter primarycolor"></i
              ></a>
            </div>
          </div>
        </div>

        <!-- Marketed  Section-->
        <div class="mt-3 pb-2 text-center">
          <div class="lato-font fs-13 mb-3">
            <a href="" class="text-decoration-none text-dark">Privacy Policy</a>
            |
            <a href="" class="text-decoration-none text-dark"
              >Terms and Conditions</a
            >
            | <a href="" class="text-decoration-none text-dark">Sitemap</a> |<a
              href=""
              class="text-decoration-none text-dark"
            >
              Accessibility</a
            >
          </div>
          <div class="text-center">
            <p class="fs-12 my-0 py-0">
              ANE acknowledges and pays respect to the past and present
              Traditional Custodians and Elders of this nationand the
              continuation of cultural, spiritual and educational practices of
              Aboriginal and Torres Strait Islander peoples.
            </p>
            <div class="my-2 py-0">
              <img src="./img/footer-one.svg" alt="footer-one" loading="lazy" />
              <img src="./img/footer-two.svg" alt="footer-one" loading="lazy" />
            </div>
          </div>

          <div class="lato-font fs-13 mb-5 text-center">
            Marketing Agency
            <a
              href="https://support.tekgro.com.au/"
              class="text-decoration-none"
            >
              <img
                class="w-25"
                src="./img/tekgro.svg"
                alt="tekgro"
                loading="lazy"
            /></a>
          </div>
        </div>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script>
      function checkForm() {
        var fullName = document.getElementById("full-name-input").value.trim();
        var email = document.getElementById("email-input").value.trim();
        var courseName = document
          .getElementById("course-name-input")
          .value.trim();
        var downloadButton = document.getElementById("download-button");

        if (fullName !== "" && email !== "" && courseName !== "") {
          downloadButton.removeAttribute("disabled");
        } else {
          downloadButton.setAttribute("disabled", "disabled");
        }
      }
    </script>
    <script>
      const stickymenu = document.querySelector(".stickymenu");
      const stickyOffset = stickymenu.offsetTop;

      function handleScroll() {
        if (window.pageYOffset > stickyOffset) {
          stickymenu.classList.add("sticky");
        } else {
          stickymenu.classList.remove("sticky");
        }
      }
      window.addEventListener("scroll", handleScroll);
    </script>
    <script>
      document
        .getElementById("ane-login")
        .addEventListener("click", function () {
          var dropdowns = document.getElementById("dropdowns");
          if (dropdowns.style.display === "none") {
            dropdowns.style.display = "block";
          } else {
            dropdowns.style.display = "none";
          }
        });
    </script>
  </body>
</html>
