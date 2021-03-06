<?php
  $title = 'Data Science';
  include('header.html');
?>

<main class="container">
  <p class="crumb js-crumb">
    <a href="index.php">Data Science</a> > Students Directory
  </p>
  <div class="wrap">
    <main class="content js-content">

<h1 class="content-title">Students Directory</h1>
<p class="content-content">
	To chat with current students and alumni <button class="button-content button-secondary">Join our <i class="fa fa-slack"></i>Slack!</button>
</p>


<div class="student-card">
  <img class="profile" src="http://www.soic.indiana.edu/img/spotlights/Girard-Mary_2014-12.jpeg" alt="">
  <a href class="name">Mary Girard</a>
  <p class="info">Building Skills for the Future</p>
</div>

<div class="student-card">
  <img class="profile" src="http://www.soic.indiana.edu/img/spotlights/sara-bigelow.png" alt="">
  <a href class="name">Sara Bigelow</a>
  <p class="info">Big Dreams in a Bright Field</p>
</div>

    </main>
    <?php
      include('navigation.html');
    ?>
        <aside>
          
          <a class="button-sidebar button-primary" target="_blank" href="https://sisjee.iu.edu/sisad-prd/p/Guest.do?methodToCall=start&inst=IUBLA&career=GRAD&parm1=DEGR">Apply Now!</a>
          <a class="button-sidebar button-secondary" href="degrees.php#howto">How to Apply</a>
          
          <div class="card">
            <a class="card-link" href='mailto:datasci@indiana.edu'><i class="fa fa-envelope" aria-hidden="true"></i> Email Us</a>
            <span class="tooltip">Request more information</span>
          </div>
          <div class="card">
            <a class="card-link" href='#'><i class="fa fa-slack"></i> Join Slack</a>
            <span class="tooltip">Chat with students and alumni</span>
          </div>

        </aside>
  </div>

</main>
<?php
  include('footer.html');
?>