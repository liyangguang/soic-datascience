<?php
  $title = 'Data Science';
  include('header.html');
?>

<main class="container">
  <p class="crumb js-crumb">
    <a href="index.php">Data Science</a> > Administration
  </p>
  <div class="wrap">
    <main class="content js-content">

<h1 class="content-title">Administration</h1>
<img class="full-width" src="image/administration.png" alt="" />

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