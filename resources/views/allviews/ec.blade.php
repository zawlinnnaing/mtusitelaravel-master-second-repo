@extends('allviews.depertments')

@section('info')
	<div class="container">
	<div class="Introduction">
		<h1 class="is-hidden-mobile">Introduction</h1>
		<h3 class="is-hidden-desktop is-hidden-table">Introduction</h3>
		<p>
		Department of Electronic Engineering is a brilliant rainbow of young minds from all over the country, with the Students coming from the competitive pool and the staff members, who have good reputation for their work ethics. The Department offers sound technical and practical training in state-of-the-art equipment. The Department is backed by a good requirement of industries and research establishments. The Department belongs to many experienced and knowledgeable staffs /students who can make their contributions in several research domains ranged from control engineering, communication engineering, microelectronics, and computer engineering, and signal processing. Department of Electronic Engineering, MTU is very keen to send our strongest candidates to cooperate with other partners for the best outcome of the research and development. This will benefit a creation multidisciplinary research environment which is identified as a primary objective of this R&amp;D. 

		</p>
                <img src="{{asset('/img/bicycle.png')}}" class="dep_pic" alt="Image">
	</div> 	
	<div class="misson & vision">
		<h1 style="font-size: 2rem !important">Mission and Vission</h1>
		<p>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To serve as a centre of excellence in teaching and research in the fields of Electronic Engineering with a view to providing trained manpower for national development and to help improve the quality of life of the people by creating public awareness on the use of appropriate scientific and technological development.

		</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To impart knowledge in Electronic Science and Technology to meet the international standards and make the Electronic Engineering ethically and emotionally strong enough to meet the technological challenges for the well being of this country in the coming years.
 </p>
	</div>
	<div class="history">
	<h1 style="font-size: 2rem !important">History of Depardment</h1>
	<p>In 1991, the Department of Electronic and Communication was pursued undergraduate courses under Mandalay Institute of Technology, Patheingyi Township of the Mandalay Division.
In 1997, Department of Electronic and Communication was renamed Department of Electronic Engineering under Mandalay Technological University. 
In 2000, the Department was located in its own building (Block 11) within the Campus of Mandalay Technological University. The Department has proceeded to increase and develop to meet the requirement of Electronic Science and Technology.
In 2014, the Department was renovated to fulfill the requirements of Advance Electronic Science and Technology. Within this building, six laboratories with state-of-the-art facilities are being developed for teaching and research.
</p>
	</div>

	<div class="courses_and_research">
		<h4 style="font-size: 2rem !important">Courses</h4>
		<p>In theDepartment of Mechatronic Engineering, three types of programs are offered. They are </p>
		<ol>
			<li>Bachelor of Engineering (Six-Year Program)</li>
			<li>Master degree (Two- Year Program)</li>
			<li>Doctoral degree (Three-Year Program)</li>

		</ol>
		<h4 style="font-size: 2rem !important">Research Facilities</h4>
		<p>The Department aims at research which addresses technological problems in the country and promotes joint international research./p>
		<ol>
		<li>1000W Modified Sine Wave Inverter Design (2009/2010)</li> 
		<li>Performance Evaluation and Control System of Micro Quardrotor for UAV (2010/2011) </li>
		<li>mplementation of e-Medical Education and e-Health Care System Based on Heterogeneous Wireless Network (2011/2012)
</li>
		<li>Smart Faculty Design (2012/2013)</li>
		<li>Wireless Weather Station (2012/2013)</li>
		<li>Control System Design and Stability Analysis of Quardrotor (2013/2014)</li>

		</ol>
		<h4 style="font-size: 2rem !important">Current Academic Research Fields</h4>
		<p style="text-decoration: underline;"><strong>Division of Control Engineering</strong></p>
		<ul style="padding-bottom: 1.5rem !important">
			<li>Conventional Control System Design</li>
			<li>Digital Control System Design</li>
			<li>Fuzzy Control System Design</li>
			<li>Supervisory Control And Data Acquisition</li>
			<li>Distributed Control System</li>
			<li>Microcontroller-Based Applications</li>
		</ul>
		<p style="text-decoration: underline;"><strong>Division of Communication Engineering</strong></p>
		<ul style="padding-bottom: 1.5rem !important">
			<li>RADAR Communication System</li>
			<li>Optical Fiber Communication System</li>
			<li>Microwave Engineering</li>
			<li>Radio Frequency Communication System</li>
			<li>Satellite Communication System</li>
			<li>RFID Technology</li>
			<li>Telecommunication System</li>
			<li>Digital Communication</li>
		</ul>
		<p style="text-decoration: underline;"><strong>Division of Signal Processing Engineering</strong></p>
		<ul style="padding-bottom: 1.5rem !important">
			<li>Digital Signal Processing</li>
			<li>Image Processing</li>
			<li>Biomedical Signal Processing
</li>
			<li>ECG Signal Processing
</li>
			<li>Array Signal Processing</li>
		</ul>
		<p style="text-decoration: underline;"><strong>Division of Computer Network Engineering</strong></p>
		<ul style="padding-bottom: 1.5rem !important">
			<li>Networked Control System
</li>
			<li>Computer Network Design</li>
			<li>Microwave Engineering</li>
			<li>Network Planning and Performance </li>
			<li>Ad-hoc Wireless Network</li>
			<li>Wireless Sensor Network Design
</li>
			<li>Wireless Body Area Network Design
</li>
			<li>Heterogeneous Wireless Network
</li>
			<li>Zig-bee Wireless Technology</li>
			<li>Bluetooth Wireless Technology</li>
		</ul>
		<p style="text-decoration: underline;"><strong>Division of Microelectronics and Embedded Technology</strong></p>
		<ul style="padding-bottom: 1.5rem !important">
			<li>Analog Electronics System Design
</li>
			<li>Digital Electronics System Design</li>
			<li>Microwave Engineering</li>
			<li>Electronic Circuit Electronics System Design
</li>
			<li>Embedded System Design
</li>
			<li>Microelectronics System Design</li>
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
	<p>Dr.Hla Myo Htun</p>
	<br>
	<p><strong>12 Teaching Staff Members</p>
</div>
<div class="address">
	<h5 style="text-decoration: underline;">Contact Info</h5>
	<p><strong>Email:</strong></p>
	<p> ee.mtu.mdy@gmail</p>
	<p>hod.ee.mtu@gmail</p>
	<br>
	<p>Rector Office:</p>
	<p><strong>Ph:</strong>+95933064260

</p>
	<p><strong>FAX:</strong>+95257361

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
