<html>

  <head>
    <meta charset="UTF-8">
    <title>Services</title>

    <?php include "templates/head.php"; ?>

    <link href="sev.css" rel="stylesheet">
  
  </head>

  <body>
    <section class="hero-section hero-blur">
    </section>

    <?php include ('components/header-nav.inc.php'); ?>

    <div class="service-management">
      
      <div class="container-header">
         
        <!-- Back to dashboard button -->
        <!-- <div>
          <a class="btn btn-back" href="index.php">
            <div class="arrow-2"></div>
            <span class="back-to-dashboard">Back to dashboard</span>
          </a>
        </div> -->

        <!-- Search input -->
        <div>
          <span class="search-services">
            <input type="text" class="form-control" placeholder="Search Services..." />
          </span>
        </div>
      </div>
      
      <div class="container-4">
        <div class="service-box">
          <div class="service-title">
            <h4>Personal Care</h4>
          </div>
          <div class="image" style="background-image: url('pic/image_6.png');"></div>
          <div class="service-description">
            Personal care staff provide essential assistance with daily tasks like bathing, dressing, and grooming. With
            empathy and respect, they ensure residents' comfort and dignity while fostering independence and meaningful
            connections.
          </div>
          <button class="btn btn-primary btn-manage">
            <span class="manage">Manage</span>
          </button>
        </div>
        
        <div class="service-box">
          <div class="service-title">
            <h4>In-Home Care</h4>
          </div>
          <div class="image" style="background-image: url('pic/image_141.png');"></div>
          <div class="service-description">
            In home care offers personalized assistance with daily tasks like bathing and meal prep, allowing individuals to
            stay independent at home while receiving practical and emotional support.
          </div>
          <button class="btn btn-primary btn-manage">
            <span class="manage">Manage</span>
          </button>
        </div>
        
        <div class="service-box">
          <div class="service-title">
            <h4>Client Transportation</h4>
          </div>
          <div class="image" style="background-image: url('pic/image_201.png');"></div>
          <div class="service-description">
            Aged care transportation ensures seniors have safe rides to medical appointments and outings, promoting their
            access to healthcare and social activities.
          </div>
          <button class="btn btn-primary btn-manage">
            <span class="manage">Manage</span>
          </button>
        </div>
      
      </div>
    
      <div class="container-5">
        <div class="service-box">
          <div class="service-title">
            <h4>Physiotherapy</h4>
          </div>
          <div class="image" style="background-image: url('pic/image_15.png');"></div>
          <div class="service-description">
            Our experienced physiotherapists provide personalized treatment plans to help individuals recover from injuries,
            manage chronic conditions, and improve mobility and overall well-being.
          </div>
          <button class="btn btn-primary btn-manage">
            <span class="manage">Manage</span>
          </button>
        </div>
        
        <div class="service-box">
          <div class="service-title">
            <h4>Housekeeping</h4>
          </div>
          <div class="image" style="background-image: url('pic/image_16.png');"></div>
          <div class="service-description">
            Our housekeeping team ensures a clean, safe, and welcoming environment for residents, providing thorough
            cleaning services and maintaining the highest standards of hygiene.
          </div>
          <button class="btn btn-primary btn-manage">
            <span class="manage">Manage</span>
          </button>
        </div>
        
        <div class="service-box">
          <div class="service-title">
            <h4>Family Visits</h4>
          </div>
          <div class="image" style="background-image: url('pic/image_17.png');"></div>
          <div class="service-description">
            We welcome and encourage family visits, creating a warm and supportive environment where residents can maintain
            meaningful connections with their loved ones.
          </div>
          <button class="btn btn-primary btn-manage">
            <span class="manage">Manage</span>
          </button>
        </div>
      
      </div>
    
    </div>
    <?php include "templates/script.php";?>

  </body>
</html>