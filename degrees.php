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
						<td><a class="degree-name" data-nav="degrees" data-link="residential">Residential M.S.</a></td>
						<td>30 on campus</td>
						<td>$1236/credit (in-state)<br>$395/credit (out-of-state) *</td>
						<td>GRE, TOEFL/IELTS (intl.)</td>
						<td>SoP, Resume, LoR</td>
						<td>March 1</td><!-- 
						<td>OPT & CPT</td> --></tr>
					<tr>
						<td><a class="degree-name" data-nav="degrees" data-link="online">Online M.S.</a></td>
						<td>30 online</td>
						<td>$395/credit *</td>
						<td>GRE (Optional **)</td>
						<td>SoP, Resume, LoR</td>
						<td>July 15</td><!-- 
						<td>No</td> --></tr>
					<tr>
						<td><a class="degree-name" data-nav="degrees" data-link="hybrid">Hybrid M.S.</a></td>
						<td>12 online, then 18 on campus</td>
						<td>$395/credit for first 12,<br>$1236/credit for the rest 18 *</td>
						<td>GRE, TOEFL/IELTS (intl.)</td>
						<td>SoP, Resume, LoR</td>
						<td>July 15</td><!-- 
						<td>OPT</td> --></tr>
					<tr>
						<td><a class="degree-name" data-nav="degrees" data-link="certificate">Certificate</a></td>
						<td>12 online</td>
						<td>$395/credit *</td>
						<td>No</td>
						<td>SoP, Resume, LoR</td>
						<td>July 15</td><!-- <td>No</td> --></tr>
				</table>
			</div>
			<p class="content-content"><b>Note</b></p>
			<p class="content-content">* Valid for Fall 2016.</p>
			<p class="content-content">** GRE Waiver requirement people with an existing graduate degree or >5 years experience in industry can request a GRE waiver. Please contact <a href="mailto:datasci@indiana.edu">email here</a> and mention this in your SoP. Our School code is 1324.</p>
			<p class="content-content">For international students: All residential part requires valid Visa. Residential M.S. can apply CPT and OPT. Hybrid M.S. can apply OPT.</p>

</main>
    <?php
      include('sidebars.html');
    ?>
  </div>

</main>

<?php
  include('footer.html');
?>