@extends('allviews.depertments')

@section('info')
	<div class="container">
	<div class="Introduction">
		<h1 class="is-hidden-mobile">Introduction</h1>
		<h3 class="is-hidden-desktop is-hidden-table">Introduction</h3>
		<p>
		All of the current teaching staffs in the department of engineering physics are keen on research work besides their main teaching responsibilities. They promote excellence in a wide range of areas such as condensed matter physics, material science, electronic control systems, atomic physics and semiconductor physics. 
		</p>
                <img src="{{asset('/img/bicycle.png')}}" class="dep_pic" alt="Image">
	</div> 	
	<div class="misson & vision">
		<h1 style="font-size: 2rem !important">Mission and Vission</h1>
		<ol>
			<li>To train a qualified manpower needed by Myanmar to acquire and develop an economy based on high technology.</li>
			<li>To play a key role in the advancement of engineering students with applying the knowledge of physics</li>
		</ol>
	</div>
	<div class="history">
	<h1 style="font-size: 2rem !important">History of Depardment</h1>
	<p>The Department of Engineering Physics previously offered two full-time post-graduate degree programs: (i) Master of Science (MS) in Physics, and (ii) Doctor of Philosophy (PhD) in Physics with concentration in Applied Physics. This program offered opportunities for study and research leading to the MS and PhD degrees in physics. The department offered six Doctorate degree Holders so far during the year 2001 to 2007. Moreover the department also offered, between the year 2002 and 2003, a total numbers of 18 candidates in Master of Science (MS) degree. 
</p>
	</div>

	<div class="courses_and_research">
		<h4 style="font-size: 2rem !important">Research Facilities</h4>
		<p>The department has a strong scientific experimental laboratory especially intending for first year undergraduate engineering students. The laboratory can be conducted more than (20) types of experiments relating to Mechanics, electricity, magnetism, heat, optics etc. Thus our laboratory allows students to perform experiments to approve their individual theoretical knowledge in accordance with their career aspirations</p>

		<h4 style="font-size: 2rem !important">Current Academic Research Fields</h4>
		<p>Currently, all of the teaching staffs are actively involved in their primary teaching duties so the department does not carry out research work</p>
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
	<p>Khup Za Thang</p>
	<br>
	<p><strong>4 Teaching Staff Members</p>
</div>
<div class="address">
	<h5 style="text-decoration: underline;">Contact Info</h5>
	<p><strong>Email:</strong></p>
	<p> Physics.mtu@gmail.com</p>
	<br>
	<p>Rector Office:</p>
	<p><strong>Ph:</strong>+95-9-33064263</p>
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
