<!DOCTYPE html>
<html lang="en">

<head>
    <title>Facilities</title>
    <meta name="author" content="Jed Pagtakhan">

    <?php include ('templates/head.php'); ?>
</head>

<body>
    <section class="hero-section hero-blur">
    </section>
    
    <?php include ('components/header-nav.inc.php'); ?>
    
    <!-- Cards section start -->
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="card-container">
        <div id="facility" class="card">
            <h2>Facility Management</h2>
            <img src="pic/facility_management.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Facility</h5>
                <p class="card-text">Facility management involves overseeing maintenance, safety, resource allocation,
                    room availabilities,
                    room details and healthcare coordination to ensure elderly residents live comfortably and receive
                    the support they need.</p><br>
                <a href="#" class="btn btn-primary">Manage</a>
            </div>
        </div>

        <div id="inventory" class="card">
            <h2>Inventory Management</h2>
            <img src="pic/inventory_management.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Inventory</h5>
                <p class="card-text">Inventory management involves sourcing, storing, distributing, and monitoring
                    supplies like medical equipment, medications, and personal care items. It includes tracking
                    inventory levels,
                    reordering when necessary, ensuring quality control, and managing costs efficiently.</p>
                <a href="#" class="btn btn-primary">Manage</a>
            </div>
        </div>

        <div id="scheduling" class="card">
            <h2>Scheduling Management</h2>
            <img src="pic/scheduling_management.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Scheduling</h5>
                <p class="card-text">Scheduling management in aged care involves organizing and coordinating staff
                    shifts and
                    resident activities to ensure efficient and effective care delivery.</p><br><br><br>
                <a href="#" class="btn btn-primary">Manage</a>
            </div>
        </div>

    </div>

    <!-- Cards Section End -->

    <?php include ('components/footer.inc.php'); ?>
    <?php include ('templates/script.php'); ?>
</body>

</html>