<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- BEGIN: Page Main-->
<div id="main">
<div class="row">
  <div class="col s12">
	<div class="container">

<!-- card stats start -->
<div class="card">
	<div class="card-content">
		<h4 class="card-title">PP | Fullz | Dead Fullz</h4>
		<p>
			Here is the information of pp, fullz, dead_fullz lists.
		</p>
		<div class="row">
			<div class="col s12 m4">
					<div class="card gradient-shadow gradient-45deg-light-blue-cyan border-radius-3  animate fadeLeft">
						<div class="card-content center">
							<h2 class="red-text text-lighten-3 lighten-4">PP</h2>
							<h5 class="white-text lighten-4" data-key="pp_remain">0</h5>
							<p class="white-text lighten-4">Total: <span  data-key="pp_total">0</span></p>
						</div>
					</div>
			</div>
			<div class="col s12 m4">
					<div class="card gradient-shadow gradient-45deg-red-pink border-radius-3  animate fadeUp">
						<div class="card-content center">
							<h2 class="green-text text-lighten-3 lighten-4">Fullz</h2>
							<h5 class="white-text lighten-4" data-key="fullz_remain">0</h5>
							<p class="white-text lighten-4">Total: <span  data-key="fullz_total">0</span></p>
						</div>
					</div>
			</div>
			<div class="col s12 m4">
					<div class="card gradient-shadow gradient-45deg-amber-amber border-radius-3  animate fadeRight">
						<div class="card-content center">
							<h2 class="blue-text text-lighten-3 lighten-4">Dead Fullz</h2>
							<h5 class="white-text lighten-4" data-key="dead_fullz_remain">0</h5>
							<p class="white-text lighten-4">Total: <span  data-key="dead_fullz_total">0</span></p>
						</div>
					</div>
			</div>
		</div>
		<div class="row" id="gradient-Analytics">
			<div class="col s12 m4 l4 card-width">
				<div class="card gradient-45deg-deep-orange-orange gradient-shadow white-text padding-4 mt-5 animate fadeLeft">
					<div class="col s3 m3">
						<i class="material-icons background-round mt-5 mb-5">attach_money</i>
						<p>Sold</p>
					</div>
					<div class="col s9 m9 right-align">
						<h5 class="mb-0 white-text">£ <span  data-key="pp_money">0</span></h5>
						<p class="no-margin">Total Sold</p>
						<p>How many pps have been sold? <span  data-key="pp_count">0</span></p>
					</div>
				</div>
			</div>
			<div class="col s12 m4 l4 card-width">
				<div class="card gradient-45deg-blue-indigo gradient-shadow white-text padding-4 mt-5 animate fadeUp">
					<div class="col s3 m3">
						<i class="material-icons background-round mt-5 mb-5">attach_money</i>
						<p>Sold</p>
					</div>
					<div class="col s9 m9 right-align">
						<h5 class="mb-0 white-text">£ <span  data-key="fullz_money">0</span></h5>
						<p class="no-margin">Total Sold</p>
						<p>How many fullz have been sold? <span  data-key="fullz_count">0</span></p>
					</div>
				</div>
			</div>
			<div class="col s12 m4 l4 card-width">
				<div class="card gradient-45deg-purple-deep-orange gradient-shadow white-text padding-4 mt-5 animate fadeRight">
					<div class="col s3 m3">
						<i class="material-icons background-round mt-5 mb-5">attach_money</i>
						<p>Sold</p>
					</div>
					<div class="col s9 m9 right-align">
						<h5 class="mb-0 white-text">£ <span  data-key="dead_fullz_money">0</span></h5>
						<p class="no-margin">Total Sold</p>
						<p>How many dead fullz have been sold? <span  data-key="dead_fullz_count">0</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="divider mt-2"></div>
<!--card stats end-->


<div class="seaction" id="materialize-chartist">
	<!--Line Chart-->
	<div class="col s12 m8 l8">
	<div id="chartjs-line-chart" class="card">
		<div class="card-content">
			<h4 class="card-title">PP | Fullz | Dead Fullz Chart</h4>
			<p class="caption">
				Here is the chart of pp, fullz, dead fullz history in a week.
			</p>
			<div class="row">
				<div class="col s12">
				<div class="sample-chart-wrapper"><canvas id="line-chart" height="400"></canvas></div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<!--Simple Pie Chart-->
	<div class="col s12 m4 l4">
	<div id="ct9-chart" class="ct-chart card">
		<div class="card-content">
			<h4 class="card-title">Total Money £<span  data-key="total_money">0</span></h4>
			<p class="caption"></p>
		</div>
	</div>
	</div>
</div>

<div class="divider mt-2"></div>


 <!-- Borderless Table -->
 <!-- <div class="row">
    <div class="col s12">
      <div id="borderless-table" class="card card-tabs">
        <div class="card-content">
			<div class="card-title">
				<div class="row">
					<div class="col s12 m12 l12">
						<h4 class="card-title">Unfinished Payments</h4>
						<p data-key="unfinished_detail">There is no unfinished payments.</p>
					</div>
				</div>
			</div>
			<div id="view-borderless-table">
				<div class="row">
					<div class="col s12">
					<table>
						<thead>
						<tr>
							<th>UIN</th>
							<th>Time</th>
							<th>Type</th>
							<th>Price</th>
						</tr>
						</thead>
						<tbody data-key="unfinished_table">
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>
</div> -->

