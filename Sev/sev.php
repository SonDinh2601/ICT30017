<head>
    <meta charset="UTF-8">
    <title>Service Management</title>

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <link href="sev.css" rel="stylesheet">

</head>
<?php include('components/header.inc.php'); ?>
  <div class="service-management">
    <div class="container-header">
      <div class="container-18">
        <button class="btn btn-back">
          <div class="arrow-2"></div>
          <span class="back-to-dashboard">Back to dashboard</span>
        </button>
      </div>
      <div class="container-11">
        <span class="search-services">
          <input type="text" class="form-control" placeholder="Search Services..." />
        </span>
      </div>
    </div>
    <div class="container-4">
      <div class="service-box">
        <span class="service-title">Personal Care</span>
        <div class="image-6" style="background-image: url('pic/image_6.png');"></div>
        <div class="service-description">
          Personal care staff provide essential assistance with daily tasks like bathing, dressing, and grooming. With empathy and respect, they ensure residents' comfort and dignity while fostering independence and meaningful connections.
        </div>
        <button class="btn btn-manage">
          <div class="rectangle-32"></div>
          <span class="manage-2">Manage</span>
        </button>
      </div>
      <div class="service-box">
        <span class="service-title">In-Home Care</span>
        <div class="image-14" style="background-image: url('image_141.png');"></div>
        <div class="service-description">
          In home care offers personalized assistance with daily tasks like bathing and meal prep, allowing individuals to stay independent at home while receiving practical and emotional support.
        </div>
        <button class="btn btn-manage">
          <span class="manage-1">Manage</span>
        </button>
      </div>
      <div class="service-box">
        <span class="service-title">Client transportation</span>
        <div class="image-20" style="background-image: url('pic/image_201.png');"></div>
        <div class="service-description">
          Aged care transportation ensures seniors have safe rides to medical appointments and outings, promoting their access to healthcare and social activities.
        </div>
        <button class="btn btn-manage">
          <span class="manage">Manage</span>
        </button>
      </div>
    </div>

    <div class="container-5">
      <div class="service-box">
        <span class="service-title">Physiotherapy</span>
        <div class="image-6" style="background-image: url('pic/image_15.png');"></div>
        <div class="service-description">
          Our experienced physiotherapists provide personalized treatment plans to help individuals recover from injuries, manage chronic conditions, and improve mobility and overall well-being.
        </div>
        <button class="btn btn-manage">
          <div class="rectangle-32"></div>
          <span class="manage-2">Manage</span>
        </button>
      </div>
      <div class="service-box">
        <span class="service-title">Housekeeping</span>
        <div class="image-14" style="background-image: url('pic/image_16.png');"></div>
        <div class="service-description">
          Our housekeeping team ensures a clean, safe, and welcoming environment for residents, providing thorough cleaning services and maintaining the highest standards of hygiene.
        </div>
        <button class="btn btn-manage">
          <span class="manage-1">Manage</span>
        </button>
      </div>
      <div class="service-box">
        <span class="service-title">Family Visits</span>
        <div class="image-20" style="background-image: url('pic/image_17.png');"></div>
        <div class="service-description">
          We welcome and encourage family visits, creating a warm and supportive environment where residents can maintain meaningful connections with their loved ones.
        </div>
        <button class="btn btn-manage">
          <span class="manage">Manage</span>
        </button>
    </div>
  </div>
<?php include('components/footer.inc.php'); ?>