<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/sidebar.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="full">
  <div class="sidebar">
    <a href="home.php"><i class="fa-solid fa-house"></i> Home</a>
    <a href="reporting_offense.php"><i class="fa-solid fa-pencil"></i> Report Offense</a>
    <a href="all_offense_list.php"><i class="fa-solid fa-list"></i> Challans</a>
    <a href="search_by_challandate.php"><i class="fa-solid fa-magnifying-glass"></i> Search_by_challandate</a>
    <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
  </div>


  <?php
    session_start();
 
  ?>

  <div class="main">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><h2><i class="fa-solid fa-traffic-light"></i> Traffic Violation Tracking</h2></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link profile-link" href="#" id="name"><i class="fa-regular fa-user"></i>  <span style="font-size: 20px;"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?></span></a>
            </li> 
          </ul>
        </div>
      </div>
    </nav>

  </div>
</div>

<style>
   #name{
    font-weight: bold;
    font-size: larger;
    color: white;
    margin-right: 20px;
    cursor: pointer;
   }
</style>

<!-- Profile Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="profileModalLabel">User Profile</h5>
        <button type="button" class="btn-close" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php include 'profile_logic.php'; displayUserProfile(); ?><!-- Include the PHP logic here -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript to trigger modal -->
<script>
   $(document).ready(function(){
    $('.profile-link').click(function(e){
      e.preventDefault();
      $('#profileModal').modal('show');
    });

    
    $('.modal-footer .btn-secondary').click(function(){
      $('#profileModal').modal('hide');
    });

    // Close modal on clicking close button
    $('.btn-close').click(function(){
      $('#profileModal').modal('hide');
    });

    // Close modal on clicking outside the modal
    $('#profileModal').click(function(e){
      if($(e.target).hasClass('modal')){
        $('#profileModal').modal('hide');
      }
    });
  });
</script>
</body>
</html>
