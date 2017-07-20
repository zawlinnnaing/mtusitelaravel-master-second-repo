@extends('allviews.depertments')

@section('info')
	<div class="container">
	<div class="Introduction">
		<h1 class="is-hidden-mobile">Introduction</h1>
		<h3 class="is-hidden-desktop is-hidden-table">Introduction</h3>
		<p>
			The Department of Engineering Mathematics is one of the academic departments in Mandalay Technological University (MTU). It is located at building 7 inside the MTU compound. It is obvious that Mathematics plays in a vital role in Engineering and Applied Science. The department provides the Mathematics classes for the undergraduate courses for Bachelor of Engineering programs, and Postgraduate courses for Master of Engineering program and Doctoral programs offered by the Engineering Departments and Bio-technological Department. Moreover, the department also produces research students for Master of Science program and Doctoral program in Engineering Mathematics and Applied Mathematics
		</p>
                <img src="{{asset('/img/bicycle.png')}}" class="dep_pic" alt="Image">
	</div> 	
	<div class="mission_and_vission">
	<h1 style="font-size: 2rem !important; text-align: center; ">Mission and Vision</h1>
	<ul>
		<li>To develop and apply advanced Mathematical methods and ideas to problems arising in engineering methods, engineering science and technology.</li>
		<li>To contribute to society by providing quality education and training in diverse areas of Mathematics and their applications.</li>
	</ul>
	</div>
	<div class="history">
	<h1 style="font-size: 2rem !important">History of Depardment</h1>
	<p>The Department of Mathematics was inaugurated on 1st Nov, 1993. Since time immemorial, it was obvious that Mathematics is necessarily needed to contract a developed nation. The leader of Department and all of teachers try their best and their pupils become good engineer. So, the pride of Engineering Mathematics Department is sweet-smelling. Moreover, the gratitude of the former heads of the Department is also immemorial. The former Heads of the Department are U Yin Win Mg, Lecturer, during 1992-1994, U Myint Oo Thar,  Professor, in 1995, Daw Nu Nu, Professor, during 1996-2001,   U Aung Nyein, Associate Professor, during  2001-2004 and Dr. Cho Cho San, Associate Professor, during 2001-2004. Currently, the Head of the Department is Dr. Khaing Khaing Aye, Associate Professor since 2006.
</p>
	</div>

	<div class="courses_and_research">
		<h4 style="font-size: 2rem !important">Courses</h4>
		<p>In theDepartment of Information Technology, three types of programs are offered. They are </p>
		<ol>
			<li>Type I ( Engineering and Applied Science (Mathematics) Programs<br>
The Department offers a Doctoral program in Engineering Mathematics and Applied Mathematics, and Master program in Engineering Mathematics. 
</li>
			<li>Type II (Engineering Program)<br>The Department provides the Mathematics classes required to support the engineering and Bio-technological programs offered by the Engineering Departments and Bio-technological Department respectively.</li>

		</ol>
		<h4 style="font-size: 2rem !important">Research Facilities</h4>
		<p>In our department, during 2001-2009, we have produced 82 Post-graduate students for Doctoral program in Engineering Mathematics and Applied Mathematics, and Master program in Engineering Mathematics. </p>
		<ul>
		<li>Functional Analysis</li> 
		<li>Numerical Analysis</li>
		<li>Queuing Theory</li>
		<li>Partial Differential Equations</li>
		<li>Statistics</li>
		</ul>
		<h4 style="font-size: 2rem !important">Current Academic Research Fields</h4>
		<ul>
			<li>Space Research Applications</li>
			<li>Computer Applications</li>
			<li>Water Wave Theory</li>
			<li>Environmental Applications</li>
		</ul>

	</div>
	<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_fjords.jpg">
      <img src="{{asset('/img/bicycle.png')}}" alt="Trolltunga Norway" width="300" height="200">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_forest.jpg">
      <img src="{{asset('/img/bicycle.png')}}" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_lights.jpg">
      <img src="{{asset('/img/bicycle.png')}}" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="{{asset('/img/bicycle.png')}}" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="clearfix"></div>
	</div>
<style type="text/css">
		h1{
			text-align: center;
			word-wrap: break-word;
		}
		.courses_and_research{
			margin-top: 3rem;
		}
		li{
			color: #E040FB;
			margin-left: 1rem !important;
		}
		.dep_pic{
			margin-top:3rem !important;
		}
		.courses_and_research{
			margin-bottom: 3rem !important;
		}
		div.gallery {
    border: 1px solid #ccc;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
	</style>
@endsection
@section('side_bar')
<div class="staff_info">
	<h5>Head of Department:</h5>
	<p>Dr.Khaing Khaing Aye</p>
	<br>
	<p><strong>9 Teaching Staff Members</p>
</div>
<div class="address">
	<h5 style="text-decoration: underline;">Contact Info</h5>
	<p><strong>Email:</strong></p>
	<p>Khaingkhaingaye1267@gmail.com</p>
	<br>
	<p>Rector Office:</p>
	<p><strong>Ph:</strong>09-33064253</p>
	


</div>
<style type="text/css">
	.staff_info{
		background-color: #4FC3F7;
		padding: 1rem !important;
	}
	.address{
		word-wrap: break-word;
		background-color: #4FC3F7;
				padding: 1rem !important;
	}
</style>
@endsection
