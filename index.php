<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>UiTMCK Club Management</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

<!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
</head>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-pink w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <br><img src="photo/logo.png" align="left" width="200" height="200">
    <h3 class="w3-padding-16"><b>Entrepreneurship Club Management</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Committee</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Activities</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Membership</a> 
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Achievements</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
    <a href="index2.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Administrator Login</a>
  </div>

</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-xxlarge"><b><i>Welcome to Entreprenuership Club</i></b></h1>
    <h1 class="w3-xxlarge w3-text-red"><b>Committee</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
<!-- The Band Section -->
  <div class="w3-container" id="services" style="margin-top:20px">
 
    <h2>THE COMMITTEE</h2>
    <p class="w3-justify">A committee is a team of volunteers who are elected at the club or society's Annual General Meeting (AGM) to manage the club or society on behalf of the members. An effective club or society begins with a passionate, enthusiastic, and hardworking committee. Understanding each committee's role is key. All committee members must know their roles, what jobs they have to do and work together to share the workload. </p>
    <center>
    <div class="w3-row w3-padding-16">
      <div class="w3-third">
        <p><b>NAZATUL ASHIKIN</p></b>
        <img src="photo/naza.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <b><p>HANI SYAMIMI</p></b>
        <img src="photo/mimi.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:55%">
      </div>
      <div class="w3-third">
        <p><b>ALIFAH ILYANA</p></b>
        <img src="photo/yana.png" class="w3-round" alt="Random Name" style="width:60%">
      </div>
    </div>
  </div>


  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxlarge w3-text-red"><b>Activities</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>There are some activities in the Entreprenuership Club!</p>
    <p>Entrepreneurship clubs typically engage in a variety of activities to foster a culture of innovation, collaboration, and business development among their members. These activities aim to create a dynamic and supportive community that encourages innovation, learning, and the development of entrepreneurial skills among club members.
    </p>
  </div>

<div class="container">
   
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `activity`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Designers -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxlarge w3-text-red"><b>Membership</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>The list membership of Entreprenuership Club.</p>
    <p>The membership of an entrepreneurship club is typically open to individuals who share an interest in entrepreneurship, innovation, and business development. The specific requirements for membership can vary depending on the club and the policies established by its organizers.</p> 
      <p><b>Register Now to Join the Club!!!</b>

    </p>

     <a href="add-new.php" class="btn btn-dark mb-3">Register Now</a>
  </div>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  
  <p align="center"><h3>Membership for Entreprenuership</h3></p>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Packages / Pricing Tables -->
  <div class="w3-container" id="packages" style="margin-top:75px">
    <h1 class="w3-xxlarge w3-text-red"><b>Achievement</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>The specific achievements of an entrepreneurship club will depend on its mission, vision, and the efforts of its members and leaders. Regularly evaluating and celebrating these achievements can help motivate members and sustain the positive momentum of the club.</p>
  </div>
<div class="w3-container w3-content w3-center w3-padding-16" style="max-width:800px" id="band">
   <div class="w3-row w3-padding-16">
      <div class="w3-third">
        <img src="photo/1.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <img src="photo/2.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
    </div>
  </div>

 
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxlarge w3-text-red"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Do you want us to style your home? Fill out the form and fill me in with the details :) We love meeting new people!</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
    </form>  
  </div>


   <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Academic Purpose Only</p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
