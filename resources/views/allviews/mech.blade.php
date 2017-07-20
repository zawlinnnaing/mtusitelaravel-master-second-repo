@extends('allviews.depertments')

@section('info')
	<div class="container">
	<!--<div class="Introduction">
		<h1 class="is-hidden-mobile">Introduction</h1>
		<h3 class="is-hidden-desktop is-hidden-table">Introduction</h3>
		<p>
			The department of civil Engineering has offered undergraduate courses since 1993. The department also offers the post-graduate programme with two specialization fields in water resources engineering and structural engineering for the master degree and Ph.D degree. The educational philosophy of the department emphasise learning the scientific fundamentals of engineering as a foundation for proficient and innovative practice. Interactive classroom lectures are augmented by hands-on laboratory sessions and design and research experience. At the both undergraduate and graduate levels, the students will have an academic advisor from whom the students can seek help in identifying opportunities to enhance their educational experience. Fora sustainable futureas well as forthe advancement of engineering teaching and research, collaboration between the department and industry can also be enjoyed in their student life. Presently, the department has highlyqualified,experienced and dedicated teaching faculty members, actively participating in research and consultancy work. Over a period of time, the department has built up a wide researchpotential. Major area of research in the department  includes; sustainable development, low cost sanitation, water treatment, application of GIS and remote sensing in water resources and environment, vulnerability assessment, seismic analysis  of structures, retrofitting, soil structure  interaction, water resource assessment and management. The department strongly believes in continuous efforts to strive for excellence by exploring new frontiers of knowledge, impacting the latest technical knowledge to the students and conducting high quality research.
		</p>
                <img src="{{asset('/img/bicycle.png')}}" class="dep_pic" alt="Image">
	</div> -->
	<div class="misson & vision">
		<h1>Mission and Vission</h1>
		<p>
			We set our eyes wide open to observe global limelight on the cutting edge technologies, but implementation is based on pertinent local needs to upgrade the industrial sectors. Our missions are
		</p>
		<ol>
			<li>Participate actively in the Asian and international academic activities and upgrade the current state of technology and education up to internationally recognized level</li>
		<li>To produce qualified engineers  with strong theoretical knowledge and analytical skills</li>
		<li>Build up skills for synergetic and practical approach to engineering problems, product design, process design, machinery diagnostics and maintenance to suit local needs </li>
		<li>Cope up with cutting edge technology in compliance with global standards</li>
		<li>Collaborate and integrate with local and international expert groups and industrial sectors for full industrialization and mechanization especially in the agricultural and manufacturing engineering and energy sectors.</li>
		</ol>
	</div>

	<div class="courses_and_research">
		<h4>Courses</h4>
		<p>Degrees offered for Engineering Programme</p>
		<ol>
			<li>Bachelor degree (Six-Year Program)</li>
			<li>Master degree (Two- Year Program)</li>
			<li>Doctoral degree (Three-Year Program)</li>
			<li>Post-graduate diploma (One -Year Program)</li>

		</ol>
		<h4>Research Facilities</h4>
		<p>To ensure that our undergraduate and graduate programs are qualified, the following facilities that have been assembled:</p>
		<ol>
			<li>Solid Mechanic</li>
			<li>Robotics</li>
			<li>Acoustics</li>
			<li>Structural Dynamic</li>
			<li>Fluid Mechanics</li>
			<li>Multiphase Flow</li>
			<li>Thermodynamic and Heat Transfer</li>
			<li>Renewable Energy</li>
			<li>Numarical computing</li>
			<li>Production Technology</li>
			<li>Engineering design</li>
		</ol>
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
	<p>Dr. Ei Ei Htwe</p>
	<br>
	<p><strong>12 Teaching Staff Members</p>
</div>
<div class="address">
	<h5 style="text-decoration: underline;">Contact Info</h5>
	<p><strong>Email:</strong></p>
	<p>eieihtwe.mdy2012@gmail</p>
	<br>
	<p>Rector Office:</p>
	<p><strong>Ph:</strong>-(95)-9-33064256
</p>
	<p><strong>FAX:</strong>
	(95)-9-57361
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
