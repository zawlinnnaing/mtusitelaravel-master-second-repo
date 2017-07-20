@extends('allviews.depertments')

@section('info')
	<div class="container">
	<div class="Introduction">
		<h1 class="is-hidden-mobile">Introduction</h1>
		<h3 class="is-hidden-desktop is-hidden-table">Introduction</h3>
		<p>
		The science of "Chemistry" is an extremely broad subject, with implication from applications in the laboratory, industry, medicine, and agriculture, through innumerable uses in our daily lives, to the challenging intellectual exercise of making sense of such a wide subject. After thorough studying some ideas and ways in which "Chemistry" views the material world, apply these concepts to form a prosperous environment for every mankind. 
		</p>
                <img src="{{asset('/img/bicycle.png')}}" class="dep_pic" alt="Image">
	</div> 	
	<div class="misson & vision">
		<h1 style="font-size: 2rem !important">Mission and Vission</h1>
		<p>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Department of Engineering Chemistry provide, through well designed studies of experimental and practical science and through an emphasis on the understanding and application of scientific concepts and principles, a worthwhile educational experience for all students (engineers) to enable them to acquire sufficient understanding and knowledge to                                                                                                                             
 
		</p>
		<ol>
			<li>become confident citizens in a technological world, and </li>
			<li>recognize the usefulness of “Chemistry” and to appreciate its applicability in other disciplines and in everyday life</li>
		</ol>
	</div>
	<div class="history">
	<h1 style="font-size: 2rem !important">History of Depardment</h1>
	<p>The Department of Engineering Chemistry is started in 1992 along with the establishment of the Mandalay Technological University, formerly known as Mandalay Institute of Technology</p>
	</div>

	<div class="courses_and_research">
		<h4 style="font-size: 2rem !important">Courses</h4>
		<P>The Department of Engineering Chemistry at Mandalay Technological University offered postgraduate programs up to 2005. For example, in the year 2003, the number of students who have graduated with Master of Science (Engineering Chemistry) was 13 and the number of students who have graduated with Ph.D.  (Engineering Chemistry) was 5. For engineering students, the subject “Engineering Chemistry” is the compulsory subject for every first year students. For Chemical Engineering Students, they have to take 2-year courses</P>

		<h4 style="font-size: 2rem !important">Research Facilities</h4>
		<p>To ensure that our undergraduate and graduate programs are qualified, the following facilities that have been assembled:</p>
		<ol>
		<li>Volumetric Analytical Lab</li> 
		<li>Semimicro Analytical Lab</li>
		<li>Computer and Seminar Room</li>
		<li>Departmental Library</li>
		</ol>
		<h4 style="font-size: 2rem !important">Current Academic Research Fields</h4>
		<ul>
			<li>Field (1) Organic Chemistry</li>
			<li>Field (2) Medicinal Plant Chemistry</li>
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
	<p>Dr.Tin Myint Htwe</p>
	<br>
	<p><strong>4 Teaching Staff Members</p>
</div>
<div class="address">
	<h5 style="text-decoration: underline;">Contact Info</h5>
	<p><strong>Email:</strong></p>
	<p>Tinmyinhtwe09@gmail.com</p>
	<br>
	<p>Rector Office:</p>
	<p><strong>Ph:</strong>+95-9-330 64 262</p>
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
