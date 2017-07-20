@extends('allviews.depertments')

@section('info')
	<div class="container">
	<div class="Introduction">
		<h1 class="is-hidden-mobile">Introduction</h1>
		<h3 class="is-hidden-desktop is-hidden-table">Introduction</h3>
		<p>
			The department of civil Engineering has offered undergraduate courses since 1993. The department also offers the post-graduate programme with two specialization fields in water resources engineering and structural engineering for the master degree and Ph.D degree. The educational philosophy of the department emphasise learning the scientific fundamentals of engineering as a foundation for proficient and innovative practice. Interactive classroom lectures are augmented by hands-on laboratory sessions and design and research experience. At the both undergraduate and graduate levels, the students will have an academic advisor from whom the students can seek help in identifying opportunities to enhance their educational experience. Fora sustainable futureas well as forthe advancement of engineering teaching and research, collaboration between the department and industry can also be enjoyed in their student life. Presently, the department has highlyqualified,experienced and dedicated teaching faculty members, actively participating in research and consultancy work. Over a period of time, the department has built up a wide researchpotential. Major area of research in the department  includes; sustainable development, low cost sanitation, water treatment, application of GIS and remote sensing in water resources and environment, vulnerability assessment, seismic analysis  of structures, retrofitting, soil structure  interaction, water resource assessment and management. The department strongly believes in continuous efforts to strive for excellence by exploring new frontiers of knowledge, impacting the latest technical knowledge to the students and conducting high quality research.
		</p>
                <img src="{{asset('/img/bicycle.png')}}" class="dep_pic" alt="Image">
	</div>
	<div class="misson & vision">
		<h1>Mission</h1>
		<p>
			To breed out and well-qualified civil engineers with creative constructability

		</p>
		<h1>Vision</h1>
		<p>Expanding technological soundness in international whereas providing assistance in local improvement in quality with optimum satisfaction for all stakeholders

</p>
	</div>

	<div class="courses_and_research">
		<h4>Courses</h4>
		<p>In the department of Civil Engineering, five types of courses are offered. They are:</p>
		<ol>
			<li>B.E(Civil)</li>
			<li>M.E (Structural Engineering)</li>
			<li>M.E (Water resource Engineering)</li>
			<li>Ph.D (Structural Engineering)</li>
			<li>Ph.D (Water Resources Engineering)</li>
		</ol>
		<h4>Research Facilities</h4>
		<p>To ensure that our undergraduate and graduate programs are qualified, the following facilities that have been assembled:</p>
		<ol>
			<li>Computer Room and library</li>
			<li>Water Resources Engineering Laboratory</li>
			<li>Environmental Engineering Laboratory</li>
			<li>Structural Engineering Laboratory</li>
			<li>Geotechnical Engineering Laboratory</li>
			<li>Surveying Laboratory</li>
			<li>Building Material and Construction Laboratory</li>
		</ol>
	</div>
	</div>
	<style type="text/css">
		h1{
			text-align: center;
			word-wrap: break-word;
		}
		.courses_and_research{
			margin-top: 5rem;
		}
		li{
			color: #E040FB;
			margin-left: 1rem !important;
		}
		.dep_pic{
			margin-top:3rem !important;
		}
	</style>
@endsection
@section('side_bar')
<div class="staff_info">
	<h5>Head of Department:</h5>
	<p>Dr.Kyaw Moe Aung(Ph.D)</p>
	<br>
	<p><strong>13 Teaching Staff Members<</p>
	<p>9 Ph.D Holders</p>
	<p>2 M.E holders</p>
	<p>2 B.E holders</p>
</div>
<div class="address">
	<h5 style="text-decoration: underline;">Contact Info</h5>
	<p><strong>Email:</strong></p>
	<p></p>kyawmoeaung07@gmail</p>
	<br>
	<p>Rector Office:</p>
	<p><strong>Ph:</strong>-95-2-57360</p>
	<p><strong>FAX:</strong>-95-2-57360</p>
	<br>
	<p>Pro Rector Office:</p>
	<p><strong>Ph:</strong>-096502601</p>


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
