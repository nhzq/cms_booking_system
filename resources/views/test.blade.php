<!DOCTYPE html>
<html>
<head>
	<style>
		h1, h2, h3, h4, h5, h6 {
		  margin-top: 0;
		  margin-bottom: 1rem;
		  font-weight: 300; }
		h1 { font-size: 4.0rem; line-height: 1;  letter-spacing: -.1rem;}
		h2 { font-size: 3.6rem; line-height: 1; letter-spacing: -.1rem; }
		h3 { font-size: 3.0rem; line-height: 1;  letter-spacing: -.1rem; }
		h4 { font-size: 2.4rem; line-height: 1; letter-spacing: -.08rem; }
		h5 { font-size: 1.8rem; line-height: 1;  letter-spacing: -.05rem; }
		h6 { font-size: 1.5rem; line-height: 1;  letter-spacing: 0; }

		.container {
			position: relative;
			width: 100%;
			max-width: 960px;
			margin: 0 auto;
			padding: 0 20px;
			box-sizing: border-box; 
		}

		.container:after,
		.row:after,
		.u-cf {
		  content: "";
		  display: table;
		  clear: both; 
		}

		.column,
		.columns {
			margin-left: 4%; }
		.column:first-child,
		.columns:first-child {
			margin-left: 0; }

		.one.column,
		.one.columns                    { width: 4.66666666667%; }
		.two.columns                    { width: 13.3333333333%; }
		.three.columns                  { width: 22%;            }
		.four.columns                   { width: 30.6666666667%; }
		.five.columns                   { width: 39.3333333333%; }
		.six.columns                    { width: 48%;            }
		.seven.columns                  { width: 56.6666666667%; }
		.eight.columns                  { width: 65.3333333333%; }
		.nine.columns                   { width: 74.0%;          }
		.ten.columns                    { width: 82.6666666667%; }
		.eleven.columns                 { width: 91.3333333333%; }
		.twelve.columns                 { width: 100%; margin-left: 0; }

		.one-third.column               { width: 30.6666666667%; }
		.two-thirds.column              { width: 65.3333333333%; }

		.one-half.column                { width: 48%; }

		.offset-by-four.columns         { margin-left: 34.6666666667%; }

		.text-center {
			text-align: center;
		}

		th,
		td {
		  padding: 12px 15px;
		  text-align: left;}
		th:first-child,
		td:first-child {
		  padding-left: 5; }
		th:last-child,
		td:last-child {
		  padding-right: 5; }

		table {
		    border-collapse: collapse;
		}

		table, th, td {
		    border: 1px solid black;
		    padding:10px;
		}

		.u-full-width {
		  width: 100%;
		  box-sizing: border-box; }

	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="text-center">
				<img src="{{ asset('img/compImage/icon-login.png') }}">

				<p style="font-size: 10px;"><b>QUALITY TRAINING CENTRE</b><br>
				No 5-2, Jalan Selasih K U12/K, Seksyen U12,<br>
				Cahaya Alam, 40170, Shah Alam<br>
				Selangor Darul Ehsan.</p>
			</div>
		</div>
		<br>
		<br>
		<div class="row">
			<h6>Client: event</h6>
			<table class="u-full-width">
				<tr>
					<th class="three columns">Training Name</th>
					<td></td>
				</tr>
				<tr>
					<th class="three columns">Venue</th>
					<td></td>
				</tr>
				<tr>
					<th class="three columns">Venue</th>
					<td></td>
				</tr>
			</table>
		</div>
		<br>
		<br>
		<div class="row">
			<h6>Company Details</h6>
			<table class="u-full-width">
				<tr>
					<th class="three columns">Company's Name</th>
					<td></td>
				</tr>
				<tr>
					<th class="three columns">Address</th>
					<td></td>
				</tr>
				<tr>
					<th class="three columns">Reg. No</th>
					<td></td>
				</tr>
				<tr>
					<th class="three columns">Person In Charge</th>
					<td></td>
				</tr>
				<tr>
					<th class="three columns">Position</th>
					<td></td>
				</tr>
				<tr>
					<th class="three columns">Telephone</th>
					<td></td>
				</tr>
				<tr>
					<th class="three columns">Emel</th>
					<td></td>
				</tr>
				<tr>
					<th class="three columns">Website</th>
					<td></td>
				</tr>
			</table>
		</div>
		<br>
		<br>
		<div class="row">
			<h6>Participants</h6>
			<table class="u-full-width">
				<thead>
					<tr>
						<th>No</th>
						<th>Name</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>