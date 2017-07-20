@extends('allviews.depertments')

@section('info')
	<div class="container">
	<div class="Introduction">
		<h1 class="is-hidden-mobile">Introduction</h1>
		<h3 class="is-hidden-desktop is-hidden-table">Introduction</h3>
		<p>
		Electrical Power Department is situated at near “Mathematical Department”. In front of this department, “Chemistry Department” is located. Our department is combined with “Physics Department”. Our department is located at the South side of the MTU. In this department, the laboratory room including two apartment/rooms. The first one is containing PIC modeling machine for giving training the students. Another one is mini-lab room. Our head of department room is beside the testing room. In this department seminar room is also included. There are two teaching for Master Degree students and Ph.D students. There are (17) teachers, (9) Associate Professor and (8) Lecturer, for lecture. In this department, three staffs are also included for helping in documentary and statistics.

		</p>
                <img src="{{asset('/img/bicycle.png')}}" class="dep_pic" alt="Image">
	</div> 	
	<div class="misson & vision">
		<h1 style="font-size: 2rem !important">Mission and Vission</h1>
		<p>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To educate students who are capable of taking a leadership affecting the broad aspects of the electrical engineering discipline, power engineering industry, and society.
	To develop the electrical power engineering department as a centre of excellence in Power System Engineering, Power Electronics and Industrial Drives, Renewable Energies and other related areas of research.

		</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To impart knowledge in electrical technology to meet the international standards and make the electrical engineering ethically and emotionally strong enough to meet the technological challengers for the well being of our country in coming years </p>
	</div>
	<div class="history">
	<h1 style="font-size: 2rem !important">History of Depardment</h1>
	<p>Mandalay Institute of Technology (MIT) was founded at 1st October, in 1991. It initially pursued undergraduate courses conducted by six departments such as Civil, Mechanical, Electronics, Electrical Power, Chemical and Architecture</p>
	</div>

	<div class="courses_and_research">
		<h4 style="font-size: 2rem !important">Courses</h4>
		<p>In theDepartment of Electrical Power Engineering, three types of programs are offered. They are </p>
		<ol>
			<li>Bachelor of Engineering (Six-Year Program)</li>
			<li>Master degree (Two- Year Program)</li>
			<li>Doctoral degree (Three-Year Program)</li>

		</ol>
		<h4 style="font-size: 2rem !important">Research Facilities</h4>
		<p>To ensure that our undergraduate and graduate programs are qualified, the following facilities that have been assembled:</p>
		<ol>
		<li>Computer room </li> 
		<li>Hardware Lab</li>
		</ol>
		<h4 style="font-size: 2rem !important">Current Academic Research Fields</h4>
		<ul>
			<li>Renewable Energy</li>
			<li>Electrical Machine</li>
			<li>Power System</li>
			<li>Power Electronics</li>
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
	<p>Dr.Khin Thuzar Soe</p>
	<br>
	<p><strong>17 Teaching Staff Members</p>
</div>
<div class="address">
	<h5 style="text-decoration: underline;">Contact Info</h5>
	<p><strong>Email:</strong></p>
	<p>-</p>
	<br>
	<p>Rector Office:</p>
	<p><strong>Ph:</strong>09-33064240
</p>
	<p><strong>FAX:</strong>-

</p>
	<br>
	


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
