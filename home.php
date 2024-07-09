<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARDHAS SCHOOL</title>
    <link rel="stylesheet" href="style.css">

</head>
<style>

.carousel-caption {
    top: 250px;
    bottom: auto;
}



.categories{
  padding-top: 40px;
    text-align: center;

  }
  .cat h3{
    font-size:80px;
    font-weight: 900;
    color: #e1e1e9;
    line-height: 1em;
    opacity: .6;
    margin: 0;
    position: relative;
    z-index: -1;}
  .cat p{
    font-size: 30px;
    margin-top: -40px;
    font-weight: 600;
    line-height: 1.4em;
    padding-bottom: 10px;
  }
  .mes-caption p{
    color: #7a7778;
    padding-bottom: 30px;
  }


.image{
    height:250px;
    width:100%;
    display: block;
}
.thumbnail {
            margin-bottom: 20px; 
        }
        .img-container {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
        }
       
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.5); 
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .caption {
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .img-container:hover .overlay {
            opacity: 1; 
        }
        .card {
            border: none;
            background-color: #fff;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }
        .card-text {
            font-size: 1.1rem;
            color: #666;
        }


    </style>

<body>
    
    <?php 
    include("header.php");

     ?>


<!-- courosel -->
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/carousel3cam.png" class="d-block w-100" alt="..." style="max-height: 720px;">
      <div class="carousel-caption d-none d-md-block">
      <h1 class="mt-5 front-content">Your <span style="color: #ffff;font-weight: bolder;font-size:50px">Inspiration</span><br><span style="font-weight: lighter;"> Partner for </span><span>Growth.</span></h1>
      <button type="button" class="btn btn-primary btn-lg">Admission Opens</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/carousel1can.png" class="d-block w-100" alt="..." style="max-height: 720px;"> 
      <div class="carousel-caption d-none d-md-block">
      <h1 class=" front-content">Your <span style="color: red;font-weight: lighter;">Inspiration</span><br><span style="font-weight: lighter;"> Partner for </span><span>Growth.</span></h1>
      <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/carousel3.png" class="d-block w-100" alt="..." style="max-height: 720px;">
      <div class="carousel-caption d-none d-md-block">
      <h1 class="front-content">Your <span style="color: red;font-weight: lighter;">Inspiration</span><br><span style="font-weight: lighter;"> Partner for </span><span>Growth.</span></h1>
      <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>








<!-- body content -->

<!-- our services -->
<div class="categories text-black">
  <div class="catergories-name">
   <div class="cat"><h3>SERVICES</h3>
   <p>What we do?</p></div>
  </div>
  <div class="mes-caption"><p>Explore from the best choosen for your children</p></div>
</div>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="thumbnail">
                <div class="img-container">
                    <img src="assets/images/academics.png" alt="Academics" class="image">
                    <div class="overlay">
                        <p class="caption">Academics</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="thumbnail">
                <div class="img-container">
                    <img src="assets/images/achievements.png" alt="Achievements" class="image">
                    <div class="overlay">
                        <p class="caption">Achievements</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="thumbnail">
                <div class="img-container">
                    <img src="assets/images/bus.png" alt="Bus" class="image">
                    <div class="overlay">
                        <p class="caption">Bus</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="thumbnail">
                <div class="img-container">
                    <img src="assets/images/canteen.png" alt="Canteen" class="image">
                    <div class="overlay">
                        <p class="caption">Canteen</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="thumbnail">
                <div class="img-container">
                    <img src="assets/images/clubs.png" alt="Clubs" class="image">
                    <div class="overlay">
                        <p class="caption">Clubs</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="thumbnail">
                <div class="img-container">
                    <img src="assets/images/learningportal.png" alt="Learning Portal" class="image">
                    <div class="overlay">
                        <p class="caption">Learning Portal</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="thumbnail">
                <div class="img-container">
                    <img src="assets/images/news.png" alt="News" class="image">
                    <div class="overlay">
                        <p class="caption">News</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="thumbnail">
                <div class="img-container">
                    <img src="assets/images/sports.png" alt="Sports" class="image">
                    <div class="overlay">
                        <p class="caption">Sports</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="thumbnail">
                <div class="img-container">
                    <img src="assets/images/events.png" alt="Sports" class="image">
                    <div class="overlay">
                        <p class="caption">Events</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- why us -->

<div class="categories text-black">
  <div class="catergories-name">
   <div class="cat"><h3>ABOUT</h3>
   <p>What us?</p></div>
  </div>
  <div class="mes-caption"><p>Explore what we assure for your children</p></div>
</div>


<div class="container">
    <h1 class="text-center mb-4">School Portal</h1>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card h-100 shadow">
                <div class="card-body">
                    <h5 class="card-title border-bottom">Vision</h5>
                    <p class="card-text">
                        <p>"The Ardhas School prepares students to understand, contribute to, and succeed in
                             a rapidly changing society, thus making the world a better and more just place.
                              We will ensure that our students develop both the skills that a sound 
                              education provides and the competencies essential for success and leadership 
                              in the emerging creative economy. We will also lead in generating practical 
                              and theoretical knowledge that enables people to better understand our world
                               and improve conditions for local and global communities."</p>
                    </p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 shadow">
                <div class="card-body">
                    <h5 class="card-title border-bottom">Mission</h5>
                    <p class="card-text ">
                        <p>"The mission of our school is to cultivate academic excellence, nurturing each student's intellectual curiosity and preparing
                             them for future academic pursuits and careers. We are committed to fostering personal growth by 
                             supporting the holistic development of our students—intellectually, socially, emotionally, and
                              physically—instilling values of honesty, integrity, respect, and responsibility. Embracing diversity 
                              and inclusion, we strive to create a welcoming community that celebrates differences and promotes 
                              equity for all."</p>
                </p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 shadow">
                <div class="card-body">
                    <h5 class="card-title border-bottom">Values</h5>
                    <p class="card-text">
                        <p>"At our school, we cherish values that shape our community and guide our actions every day.
                             Excellence is at the core of our mission, driving us to achieve high academic standards and nurture 
                             personal growth in every student. Integrity forms the foundation of our interactions, emphasizing
                              honesty, ethical conduct, and accountability in all endeavors. We value respect, celebrating 
                              diversity and
                             creating a supportive environment where everyone is valued and included." </p>
                    </p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 shadow">
                <div class="card-body">
                    <h5 class="card-title border-bottom">History</h5>
                    <p class="card-text">
                        <p>"Our school was founded in 1997 with a vision to provide quality education .Over the years,
                             it grew steadily, expanding its facilities, curriculum offerings, and student body.Throughout its history, our 
                             school has been committed to core values, aiming to foster academic excellence, 
                             personal growth, and community engagement among its students.Today, our school continues to 
                             uphold its legacy of values and mission." </p>
                    </p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 shadow">
                <div class="card-body">
                    <h5 class="card-title border-bottom">Achievements</h5>
                    <p class="card-text">
                        <p>"Throughout its history, our school has celebrated numerous achievements that reflect 
                            our commitment to excellence and community. Academically, our students consistently achieve
                             high honors in national competitions and exams, showcasing their dedication to learning and mastery
                              of subjects. Our sports teams have garnered multiple championships 
                            in various leagues, demonstrating teamwork, discipline, and sportsmanship."</p>
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- gallery -->
 <div class="slider">
    
 </div>

<!-- footer file -->
<?php 
    include("footer.php");
?>
</body>
</html>









