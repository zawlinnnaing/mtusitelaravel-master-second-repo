@extends('allviews.depertments')

@section('info')
	<div class="container">
	<div class="Introduction">
		<h1 class="is-hidden-mobile">Introduction</h1>
		<h3 class="is-hidden-desktop is-hidden-table">Introduction</h3>
		<p>
		The Department of Architecture is located in Mandalay Technological University. There are permanently four teachers and eleven Honorable Prof. The heads of Department and all teachers try their best and their pupils to become good Architects. So, the pride of Architecture Department is sweet-smelling. Moreover, the gratitude of the former heads of the Department is also immemorial.
		</p>
                <img src="{{asset('/img/bicycle.png')}}" class="dep_pic" alt="Image">
	</div> 	
	<div class="mission_and_vission">
	<h1 style="font-size: 2rem !important; text-align: center; ">Mission and Vision</h1>
	<Strong style="font-size: 1.5rem !important">Mission</strong>
	<ol style="padding-left: 3rem !important">
		<li>Participation in Documentation of Shwe Nandaw Kyaung (Golden Palace Monastery) conservation project in Mandalay collaborated with Ministry of Culture.</li>
		<li>Data Collection Project of Future Zoning Plan Of Mandalay collaborated with Mandalay City Development Committee.</li>
		<li>Planning for mapping in ancient Pyu cities projects by application of Geographic information system (GIS).</li>
	</ol>
	<Strong style="font-size: 1.5rem !important">Vision</strong>
	<ol style="padding-left: 3rem !important">
	<li>Water front development in Mandalay City</li>
	<li>Defining Urban built Heritage in Mandalay City</li>
	<li>Streetscape Development in Mandalay City</li>
	<li>Urban development in historic city, case study; Mandalay City</li>
	</ol>
	</div>
	<div class="history">
	<h1 style="font-size: 2rem !important">History of Depardment</h1>
	<p>The Department of Architecture was inaugurated in 1993. The department is temporally closed from December, 2011 to Nov, 2012 and reopened in December, 2012 in Mandalay Technological University. Up to now 2014, Department of Architecture has produced over hundred promising Architects in ten years duration (i.e. 1993-2003). The first post graduate in Master of Architecture from the Mandalay Technological was offered into the profession in 2004, and seven nos. of Master Degree holders have been produced up to 2010. The first doctorate in Ph. D in Architecture & Planning passed out into the profession in year 2006, eleven in 2007, nineteen in 2008, and one in 2010, three in 2011; altogether 34 nos. of Ph.D holders.
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
		<ul>
		<li>Drawing room with adjustable drawing boards</li> 
		<li>Departmental Library</li>
		<li>Multi-media Room</li>
		</ul>
		<h4 style="font-size: 2rem !important">Current Academic Research Fields</h4>
		<ul>
			<li>Architecture and Heritage Conservation</li>
			<li>Architectural and Design Science</li>
			<li>Urban Design  </li>
			<li>Urban planning and urban design</li>
			<li>Heritage Conservation</li>
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
	<p>Dr.Su Su</p>
	<br>
	<p><strong>4 Teaching Staff Members</p>
</div>
<div class="address">
	<h5 style="text-decoration: underline;">Contact Info</h5>
	<p><strong>Email:</strong></p>
	<p>susulay21@gmail.com</p>
	<br>
	<p>Rector Office:</p>
	<p><strong>Ph:</strong>+95933064249

</p>
	<p><strong>FAX:</strong>+95-2-57361

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
