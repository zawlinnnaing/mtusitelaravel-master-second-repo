@extends('allviews.depertments')

@section('info')
	<div class="container">
	<div class="Introduction">
		<h1 class="is-hidden-mobile">Introduction</h1>
		<h3 class="is-hidden-desktop is-hidden-table">Introduction</h3>
		<p>
		The Department of English is one of the supporting departments at MTU. There are thirteen teaching staff at the Department. They are two Associate Professors, four Lecturers and six Assistant Lecturers. And there is a lab technician.
		<br/>
	As English has become a must_ an essential tool in this living world, it is taught as a compulsory subject from BE First Year level to PhD at MTU.

		</p>
                <img src="{{asset('/img/bicycle.png')}}" class="dep_pic" alt="Image">
	</div> 	
	<div class="mission_and_vission">
	<h1 style="font-size: 2rem !important; text-align: center; ">Mission and Vision</h1>
	<Strong style="font-size: 1.5rem !important">Mission</strong>
	<p>	The mission is to provide quality English language instruction to individuals from MTU. It is also committed to excellence at every step in the development and delivery of its English language teaching programmes.
	</p>
	<Strong style="font-size: 1.5rem !important">Vision</strong>
		<p>The vision of the English Department is to provide excellence in English language teaching through constant adherence to quality and to create a sustainable learning society to help achieve the Myanmar’s educational vision</p>
	</div>
	<div class="history">
	<h1 style="font-size: 2rem !important">Main Responsibilities</h1>
	<p>With the aim of upgrading English proficiency for the youth who are studying at MTU, teachers of the English Department (MTU) have been making utmost efforts in discharging teaching duties. The main responsibilities of teaching staff at English Department (MTU) are as follows:</p>
	<ol style="padding-left: 2rem !important">
		<li>Teaching DESPandMESP trainees who are teacher trainees from different Technological Universities and Computer Universities in Myanmar</li>
		<li>Supervising in doing theses of MESP candidates</li>
		<li>Teaching Engineering English Text and IELTS Text books which are prescribed to the students of BE level, ME level and PhD.</li>
		<li>Correcting the answer scripts of Qualifying Exams of State Scholarship Programmes and contributing of interviewing 4 skills and speaking module of the candidates.</li>
		<li>Assessing and correcting the International Papers written by ME and PhD candidates</li>
		<li>Translating the project papers and research papers which are occasionally sent by the respective Engineering Departments into English version.</li>
		<li>Checking and marking the State Scholarship Selection Examination papers and conducting the Interview and Speaking Sub-tests for them.</li>
	</ol>
	</div>

	<!--<div class="courses_and_research">
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

	</div> -->
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
	div .history{
		margin-bottom: 3rem !important; 
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
	<p>U Tin Soe</p>
	<br>
	<p><strong>12 Teaching Staff Members</p>
</div>
<div class="address">
	<h5 style="text-decoration: underline;">Contact Info</h5>
	<p><strong>Email:</strong></p>
	<p>tinsoe.eng@gmail.com</p>
	<br>
	<p>Rector Office:</p>
	<p><strong>Ph:</strong>09-33064244

</p>	


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
