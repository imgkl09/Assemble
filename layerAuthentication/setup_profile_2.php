<?php
  session_start();
  if(!isset($_SESSION['uname'])){
      echo "NOT VIEWABLE";
  }else{
  include 'config.php';
    $uname=$_SESSION['uname'];
?>

<!DOCTYPE html>
<!-- profile setup 1 | only for first time Login into acc untill the fields are filled-->
<html>
<!-- if this setup is done, redirect to setup_profile_2.html -->
<head>
  <meta charset="utf-8">
  <title>Setup(2/2)</title>
  <meta name="viewpoint" content="width=device-width;initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="../layerUser/dashboardd.css">
  <script>
    function datacheck() {

    }
  </script>
</head>

<body>

<div class="headerrr">
  <p class="header_textt glow">ASSEMBLE</p>
</div>

<div class="bs-example">
  <nav class="navbar navbar-expand-md droop navbar-dark">

    <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
      <div class="navbar-nav; style:bottom">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>

    <div class="navbar-nav">
      <a href="../layerAuthentication/logout.html"><input type="button" class="outbtn" value="Logout"></a>
    </div>
  </nav>
</div>

<div class="container" id="sidebar">
  <div class="row">
    <ul>
      <div class="d-flex justify-content-center" style="padding:20px 0px 10px 0px;">
        <div class="brand_logo_container">
          <img src="../layerUser/img2/avatar.png">
        </div>
      </div>

      <p class="uname_box" style="height:31px; width:220px; margin-bottom: 12px;">
        @<?php echo $uname;?>
      </p>
      <br>
    </ul>
  </div>
</div>

<div>

      <form action="auth_setup_profile_2.php" style="padding:12px 30px 0px 30px; margin-top: 18px;  height: 540px;" class="editform" method="POST">
          <h1>The important part - your skills!</h1>
        <div class="scroll">


          <div class="txtb">Interest: <!-- CSS - work on apprearance-->
            <select name="interest" id="interest" required>
              <option value="Programming">Programming</option>
              <option value="Music">Music</option>
              <option value="Sports">Sports</option>
              <option value="COVID-19">COVID-19</option>
              <option value="Electrical">Electrical</option>
              <option value="Electronic">Electronic</option>
              <option value="Mechanical">Mechanical</option>
              <option value="Dance">Dance</option>
              <option value="DigitalArt">DigitalArt</option>
              <option value="Cooking">Cooking</option>
              <option value="ContentCreation">ContentCreation</option>
              <option value="Marketing">Marketing</option>
              <option value="Craft">Craft</option>
              <option value="Artwork">Artwork</option>

            </select>
          </div>

          <div class="txtb">Skills:<br>
            <textarea maxlength=100 id="skills" name="skills" rows="3" cols="10" wrap="hard" placeholder="Your expertise in the field" ></textarea><!-- CSS - placeholder text isnt visible by default-->
          </div>

          <div class="txtb">Experience:
            <textarea maxlength=100 id="experience" name="experience" rows="3" cols="10" wrap="hard" placeholder="Tell us about your niche!" ></textarea>
          </div>

          <div class="txtb">Project links/description:
            <textarea maxlength=100 id="works" name="works" rows="3" cols="10" wrap="hard" placeholder="Help others find your works!" ></textarea>
          </div>
</div>
        <input type="submit" class="logbtn" onclick='dataCheck()' value="Submit">
        <!--cancel button works if window.alert is in func orelse it works as submit which still kinda works-->
      </form>

    </div>


<div class="container" id="sidebar-right" style="width:250px;">
  <div class="row">
    <div class="cardd-r" style="width:213px; margin-top:70px;">

      <div style="padding-left: 95px; margin-top: -5px;">
        <i class="fas fa-info-circle" style="font-size:25px;"></i>
      </div>

      <div class="alert info">
        <span class="closebtn">&times;</span>
        <strong>Skills:</strong> Detailed skill description makes it easy to form team with desired skillset.
      </div>

      <div class="alert warning">
        <span class="closebtn">&times;</span>
        <strong>Experience:</strong> Your expertise level in each topic of your skillset.
      </div>

      <div class="alert success">
        <span class="closebtn">&times;</span>
        <strong>Project Links:</strong> Helps others find your works.
      </div>

      <script>
        var close = document.getElementsByClassName("closebtn");
        var i;

        for (i = 0; i < close.length; i++) {
          close[i].onclick = function() {
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function() {
              div.style.display = "none";
            }, 600);
            document.getElementsByClassName("cardd-r").style.height = "10px";
          }
        }
      </script>
    </div>
  </div>
</div>

</body>

</html>

<?php
}
?>
