<?php
  $title = 'Data Science';
  include('header.html');
?>

<main class="container">
  <p class="crumb js-crumb">
    <a href="index.php">Data Science</a> > Graduate Degrees
  </p>
  <div class="wrap">
    <main class="content js-content">

<h1 class="content-title">Degrees and Certificate</h1>
<h2 class="content-heading">Education with Options</h2>
<p class="content-content">The 30-credit program is available on campus, online, or in a blended version with online and in-residence components.</p>
<img src="image/degrees.png" alt="" class="full-width">
<h2 class="content-heading">Detail Comparison of Degrees</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<tr>
			<th></th>
			<th>credit</th>
			<th>cost</th>
			<th>exams required</th>
			<th>application materials</th>
			<th>application deadline</th>
			<!-- <th>working authorization for intl.</th>
			 --></tr>
		<tr>
			<td><a class="degree-name" href="residential.php">Residential M.S.</a></td>
			<td>30 on campus</td>
			<td>$1236/credit (in-state)<br>$395/credit (out-of-state) *</td>
			<td>GRE, TOEFL/IELTS (intl.)</td>
			<td>SoP, Resume, LoR</td>
			<td>March 1</td><!-- 
			<td>OPT & CPT</td> --></tr>
		<tr>
			<td><a class="degree-name" href="online.php">Online M.S.</a></td>
			<td>30 online</td>
			<td>$395/credit *</td>
			<td>GRE (Optional **)</td>
			<td>SoP, Resume, LoR</td>
			<td>July 15</td><!-- 
			<td>No</td> --></tr>
		<tr>
			<td><a class="degree-name" href="hybrid.php">Hybrid M.S.</a></td>
			<td>12 online, then 18 on campus</td>
			<td>$395/credit for first 12,<br>$1236/credit for the rest 18 *</td>
			<td>GRE, TOEFL/IELTS (intl.)</td>
			<td>SoP, Resume, LoR</td>
			<td>July 15</td><!-- 
			<td>OPT</td> --></tr>
		<tr>
			<td><a class="degree-name" href="certificate.php">Certificate</a></td>
			<td>12 online</td>
			<td>$395/credit *</td>
			<td>No</td>
			<td>SoP, Resume, LoR</td>
			<td>July 15</td><!-- <td>No</td> --></tr>
	</table>
</div>
<p class="content-content"><b>Note</b></p>
<p class="content-content">* Valid for Fall 2016.</p>
<p class="content-content">** The GRE is required for the MS in Data Science degree programs. Applicants who have completed another graduate degree, and/or have relevant work experience can apply to waive the GRE requirement. To apply for the waiver, please email dsadvise@indiana.edu. Include a copy of your resume/CV and scans of your transcripts for consideration. Our School code is 1324.</p>
<p class="content-content">For international students: All residential part requires valid Visa. Residential M.S. can apply CPT and OPT. Hybrid M.S. can apply OPT.</p>
<h2 id="howto" class="content-heading">How to Apply</h2>
<ul>
	<li><a href="residential.php#howto">Residential M.S</a></li>
	<li><a href="online.php#howto">Online M.S.</a></li>
	<li><a href="hybrid.php#howto">Hybrid M.S</a></li>
	<li><a href="certificate.php#howto">Certificate</a></li>
</ul>


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