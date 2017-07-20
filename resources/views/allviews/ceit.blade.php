@extends('allviews.depertments')

@section('info')
	<div class="container">
	<div class="Introduction">
		<h1 class="is-hidden-mobile">Introduction</h1>
		<h3 class="is-hidden-desktop is-hidden-table">Introduction</h3>
		<p>
		IT is the branch of engineering that deals with designing, development and management of computer-based information systems. Every IT products can be software programs, hardware equipments or combination of these. IT has become a human enterprise as well as a corporate one. IT is all around us, in everything we do. From watching cable TV to sending an email, IT and its products have permeated our culture and our economy. In a rapidly changing technological world, we need experts that make it simple for individuals, business and companies to get the job done without having to wonder how it is done.

		</p>
                <img src="{{asset('/img/bicycle.png')}}" class="dep_pic" alt="Image">
	</div> 	
	<div class="misson & vision">
		<h1 style="font-size: 2rem !important">Mission and Vission</h1>
		<p>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our mission is to train and teach the students to be engineers who can work in real world with their own research works. 
		</p>
		<p>To produce experts of various ICT related fields such as computer programming, computer architecture and design, networking technology, and mobile computing.<br/>
  			To train the students to educate the future leaders of computing and related professions in the private companies or governmental organizations.
 </p>
	</div>
	<div class="history">
	<h1 style="font-size: 2rem !important">History of Depardment</h1>
	<p>In 2002, Mandalay Technological University became the first university in Upper Myanmar to offer a complete degree program in Information Technology. Today, the Department of Information Technology continues keeping pace with the continuously changing world of computer and Internet-based technologies, providing an innovative mix of modern programs and courses.
</p>
	</div>

	<div class="courses_and_research">
		<h4 style="font-size: 2rem !important">Courses</h4>
		<p>In theDepartment of Information Technology, three types of programs are offered. They are </p>
		<ol>
			<li>Bachelor of Engineering (Six-Year Program)</li>
			<li>Master degree (Two- Year Program)</li>
			<li>Doctoral degree (Three-Year Program)</li>

		</ol>
		<h4 style="font-size: 2rem !important">Research Facilities</h4>
		<p>To ensure that our undergraduate and graduate programs are qualified, the following facilities that have been assembled:</p>
		<ol>
		<li>Research laboratory provides designing, implementing and testing of departmental research, master degree research and Ph.D. degree research.</li> 
		<li>Computer room in which the students can learn the simulation and modeling of their system./li>
		<li>Departmental library where the students can extend their knowledge regarding the various subjects.</li>
		<li>Seminar room which is used to hold the seminars of the research students</li>
		</ol>
		<h4 style="font-size: 2rem !important">Current Academic Research Fields</h4>
		<ul>
			<li>Networking</li>
			<li>Image Processing</li>
			<li>Computing</li>
			<li>Database Management System</li>
			<li>Information Security</li>
			<li>Distributed System</li>
			<li>Data Mining</li>
			<li>Digital Signal Processing</li>
			<li>Natural Language Processing</li>
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
	<p>Dr.Nan Aye Aye Htwe</p>
	<br>
	<p><strong>9 Teaching Staff Members</p>
</div>
<div class="address">
	<h5 style="text-decoration: underline;">Contact Info</h5>
	<p><strong>Email:</strong></p>
	<p>informationtechnology.mtu@gmail.com</p>
	<br>
	<p>Rector Office:</p>
	<p><strong>Ph:</strong>+95-9-330-64248

</p>
	<p><strong>FAX:</strong>+95-9-330-64248

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
