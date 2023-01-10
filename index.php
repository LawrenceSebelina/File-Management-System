<?php
include('header.php');
//Start session
unset($_SESSION['id']);
?>
<body>
    <div class="wrapper">
        <?php include('navHead.php'); ?>
        <main>
            <div class="cvsu-banner">
                
            </div>

            <div class="container-fluid">   
                <section class="cvsu-history" id="history-content">
                    <!-- History Title Header  -->
                    <div class="card text-center mb-3 mt-3" id="History">
                        <div class="card-header bg-success text-light">
                            <b>History of Cavite State University</b> 
                        </div>
                    </div>
                    <!-- History Title Header  -->

                    <!-- History Content -->
                    <div class="card mb-3 bg-success bg-opacity-25" style="max-width: 100%;">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div id="carouselExampleDark" class="carousel slide carousel-history" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>

                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <img src="images/carousel-bg1.jpg" class="img-fluid" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="images/carousel-bg2.jpg" class="img-fluid" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/carousel-bg3.jpg" class="img-fluid" alt="...">
                                        </div>
                                    </div>

                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-4 card-history">
                                <div class="card-body text-history">
                                    <div class="alert bg-success text-white d-flex align-items-center justify-content-center" role="alert">
                                        <h3>Cavite State University</h2>
                                    </div>
                                    <div class="card-text">
                                        <br/>
                                        <p>
                                            The Cavite State University (CvSU) has its humble beginnings in 1906 as the Indang Intermediate School with the American Thomasites as the first teachers. Several transformations in the name of the school took place; Indang Farm School in 1918, Indang Rural High School in 1927, and Don Severino National Agriculture School in 1958. In 1964, the school was converted into a State College by virtue of Republic Act 3917 and became known as Don Severino Agricultural College (DSAC).
                                        </p>
                                    </div>
                                    <!-- Button trigger modal -->
                                    <div class="history-sm d-flex justify-content-center">
                                        <a type="button" class="btn fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Read More
                                        </a>
                                    </div>
                                    <!-- Button trigger modal -->
                                </div>
                            </div>
                            
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable"><!-- border border-success border-2 -->
                                    <div class="modal-content border-success border-5">
                                        
                                        <div class="modal-body bg-success bg-opacity-10">

                                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                                <i class="fa-solid fa-clock-rotate-left fa-xl me-2"></i>
                                                <div>
                                                    <strong>History of Cavite State University</strong>
                                                </div>
                                            </div>

                                            <div class="card-text text-justify">
                                                <p>
                                                    The Cavite State University (CvSU) has its humble beginnings in 1906 as the Indang Intermediate School with the American Thomasites as the first teachers. Several transformations in the name of the school took place; Indang Farm School in 1918, Indang Rural High School in 1927, and Don Severino National Agriculture School in 1958. In 1964, the school was converted into a State College by virtue of Republic Act 3917 and became known as Don Severino Agricultural College (DSAC).
                                                </p>
                                                <p>
                                                    On January 22, 1998, by virtue of Republic Act No.8468, DSAC was converted into Cavite State University. In 2001, Cavite College of Fisheries (CACOF) in Naic, Cavite and Cavite College of Arts and Trade (CCAT) in Rosario, Cavite, were integrated to the University by virtue of CHED Memo No. 27 s. 2000. Since then, additional campuses in the province were established through memoranda of agreement with the LGUs. At present, CvSU has 11 campuses in the province. The main campus, approximately 70 hectares in land area and named as Don Severino delas Alas Campus, is in Indang, Cavite.
                                                </p>
                                                <p>
                                                    CvSU is mandated “to provide excellent, equitable and relevant educational opportunities in the arts, sciences and technology through quality instruction, and responsive research and development activities. It shall produce professional, skilled and morally upright individuals for global competitiveness.”
                                                </p>
                                                <p>
                                                    The University is offering close to 100 curricular programs in the undergraduate and graduate levels. It has more than 25,000 students and 1,200 faculty and staff from all campuses. The University is also authorized to certify and confer appropriate academic degrees in accordance with the Expanded Tertiary Education and Accreditation Program (ETEEAP). It has been accredited by TESDA as Trade and Testing Venue, and designated by the Department of Agriculture as the National Center for Research and Development for Coffee and Urban Agriculture. It also hosts the Southern Tagalog Agriculture Research and Development Consortium (STARDEC), the Affiliated Renewable Energy Center for Region IV-A, and the Regional ICT Center for Region IV-A.
                                                </p>
                                                <p>
                                                    CvSU adheres to its commitment to Truth, Excellence and Service as it aims to be the “premier University in historic Cavite recognized for excellence in the development of globally competitive and morally upright individuals”.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="modal-footer bg-success bg-opacity-25">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-ban"></i>&nbsp<strong>&nbsp&nbspClose&nbsp&nbsp</strong></button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                        </div>
                    </div>
                    <!-- History Content  -->
                </section>

                <section id="missionvision-content">
                    <!-- Mission & Vision Title Header  -->
                    <div class="card text-center mb-3" id="Mission">
                        <div class="card-header bg-success text-light">
                            <b>Mission & Vision</b> 
                        </div>
                    </div>
                    <!-- Mission & Vision Title Header -->
                    
                    <!-- Mission & Vision Content -->
                    <div class="card-group mb-3">
                        <div class="card card-qp-cv">
                            <img src="images/cvsu_carmona.png" alt="">
                            <div class="card-body text-qp-cv">
                                <h5 class="card-title">Quality Policy</h5>
                                <p class="card-text">We Commit to the highest standards of education, value our stakeholders, Strive for continual improvement of our products and services, and Uphold the University’s tenets of Truth, Excellence, and Service to produce globally competitive and morally upright individuals.</p>
                                
                                <h5 class="card-title">Core Values</h5>
                                <p class="text-center mt-4" style="word-spacing: 50px;"><b>Truth Excellence Service</b></p>
                            </div>
                        </div>
                        <div class="card card-mission">
                            <img src="images/cvsu_mission.png" alt="">
                            <div class="card-body text-mission">
                                <h5 class="card-title">Mission</h5>
                                <p class="card-text">Cavite State University shall provide excellent, equitable and relevant educational opportunities in the arts, sciences and technology through quality instruction and responsive research and development activities. It shall produce professional, skilled and morally upright individuals for global competitiveness.</p> 
                            </div>
                        </div>
                        <div class="card card-vision">
                            <img src="images/cvsu_vision.png" alt="">
                            <div class="card-body text-vision">
                                    <h5 class="card-title">Vision</h5>
                                    <p class="card-text">The premier university in historic Cavite recognized for excellence in the development of globally competitive and morally upright individuals.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Mission & Vision Content -->
                </section>

                <section id="contactus-content">
                    <!-- Cantact Us Title Header  -->
                    <div class="card text-center mb-3 mt-3" id="Contact">
                        <div class="card-header bg-success text-light">
                            <b>History of Cavite State University</b> 
                        </div>
                    </div>
                    <!-- Cantact Us Title Header  -->

                    <!-- Contact Us Content -->
                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="row g-0">
                            
                            <div class="col-md-8 location">
                                
                            </div>

                            <div class="col-md-4 card-history">
                                <div class="card-body text-history">
                                    <div class="alert bg-success text-white d-flex align-items-center justify-content-center" role="alert">
                                        <h3>Contact Us</h2>
                                    </div>
                                        
                                    <div class="d-flex justify-content-center mt-5">
                                        <img class="rounded-circle" src="images/facebook_logo.png" alt="">
                                    </div>
                                    <div class="text-center">
                                        <a href="https://www.facebook.com/CvSUCarmona" target="_blank">https://www.facebook.com/CvSUCarmona</a>
                                    </div>

                                    <div class="d-flex justify-content-center mt-3">
                                        <img class="rounded-circle" src="images/website_logo.png" alt="">
                                    </div>
                                    <div class="text-center">
                                        <a href="http://www.cvsu.edu.ph/" target="_blank">http://www.cvsu.edu.ph/</a>
                                    </div>

                                    <div class="d-flex justify-content-center mt-3">
                                        <img class="rounded-circle" src="images/gmail_logo.png" alt="">
                                    </div>
                                    <div class="text-center">
                                        <a href="https://cvsu.carmonacampus@gmail.com" target="_blank">https://cvsu.carmonacampus@gmail.com</a>
                                    </div>

                                    <div class="d-flex justify-content-center mt-3">
                                        <img class="rounded-circle" src="images/telephone_logo.png" alt="">
                                    </div>
                                    <div class="text-center">
                                        <h2>(046) 430 2610</h2>
                                    </div>    

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Us Content  -->
                </section>

            </div>
        </main>
        <?php include('footer.php'); ?>
    </div>  
    <?php include('allJavaScripts.php'); ?>
</body>



