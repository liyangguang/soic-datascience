<?php
  $title = 'Data Science';
  include('header.html');
?>

<main class="container">
  <p class="crumb js-crumb">
    <a href="index.php">Data Science</a> > Tuition and Fees
  </p>
  <div class="wrap">
    <main class="content js-content">

<h1 class="content-title">Tuition and Fees</h1>
<p class="content-heading">Tuition & Fee Rates</p>
<p class="content-content">Indiana University is committed to keeping its degrees affordable for in-state and out-of-state students. We encourage you to review the Office of the Bursar's listing of Tuition & Fees and Mandatory Fees. To determine approximate enrollment costs, use the Tuition Estimator by selecting the term, residency, level, program and number of hours to estimate the cost of tuition and associated fees. For international students, the Office of International Services outlines the tuition & Fees for international students.</p>
<p class="content-heading">University Graduate School Fellowships & Awards</p>
<p class="content-content">The University Graduate School offers several internal and external Fellowships and Awards. The application process and deadlines vary by Fellowship and Award, so be sure to read the requirements carefully. If you are interested being nominated for an internal Fellowship and Award, email datasci@indiana.edu to make it clear you are interested in being nominated.</p>

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