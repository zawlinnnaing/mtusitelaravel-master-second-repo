@extends('layout')
@section('content')
<div class="columns">
 <div class="column is-2" id='logo-column'>
 @include('allviews.logo')
 </div>
<div class="column is-8">
<div class="undergraduate">
	<h3 style="text-align: center !important;">Undergraduate Programmes</h3>
	<p>MTU selects students for study in the undergraduate programmes according to the students’ interest and the marks obtained in the matriculation exam. Here is the list of departments at MTU.</p>
	<h6 style="font-size: 1.5rem !important"><strong>List of Bachelor Degree Program</strong></h6>
	<ul>
		<li>B.E. (Civil)</li>
		<li>B.E. (Information Technology)</li>
		<li>B.E. (Electronic Engineering)</li>
		<li>B.E. (Electrical Power Engineering)</li>
		<li>B.E. (Mechanical Engineering)</li>
		<li>B.E. (Mechatronic Engineering)</li>
		<li>B.E. (Chemical Engineering)</li>
		<li>B.E. (Mining Engineering)</li>
		<li>B.E. (Nuclear Technology)</li>
		<li>B.E. (Biotechnology)</li>
		<li>B.Arch. (Architecture)</li>
	</ul>
	<p style="margin-top: 1.5rem !important;">The pathway to B.E. degree is divided into four blocks. The students must have passed all the subjects in each block before proceeding to the next block. Programmes at undergraduate level emphasize both theoretical and practical aspects of engineering. Students are required to attend lectures to enhance their knowledge and also do practical laboratory work to better understand the theory. The programme is conducted full time. The B.E. degree programme takes six years. In the final year, the students are required to submit a mini-thesis at the end of the first semester as partial fulfillment of the requirements of the Bachelor of Engineering degree. Besides, they will be attached to respective industries for the whole second semester as interns. At the end of the internship programme, they must submit report to the Board of Examiners for evaluation. They will get the degree only if all the requirements are fulfilled.</p>
</div>


<div class="postgraduate">
<h3 style="text-align: center !important; text-decoration: underline;">Postgraduate Programmes</h3>
<p>MTU offers a wide range of postgraduate programmes catering for a variety of interests, namely:</p>
<br>
<p>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doctoral degree programmes take minimum three years after relevant Master’s degrees. In the first year, the students have to attend the coursework, at which the essential subjects for each programme are to be studied. And they will have another two years for their theses.</p>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Master’s degree programmes are primarily designed to do coursework and thesis. The programmes take minimum two years. The first year is for coursework and the second year is for thesis. For those, who want to continue the study (to attend Ph. D.) must be excellent in both coursework and thesis.</p>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Master programme provides students with advanced knowledge in key core areas of an advanced study of specialized topics. The program is designed to accommodate students with training in diverse scientific and engineering disciplines.</p>
<br>
<p style="font-size: 1.5rem !important; text-decoration: underline;">Intake Schedule</p><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTU has two intakes per year, program for new Ph.D candidates in December and that for new M.E candidates in July.</p><br>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Ph.D. applicants are welcome to contact the academic departments to discuss their potential application. Research applicants are particularly encouraged to speak with departments regarding areas of interest and potential supervisors. (they don’t need to take any class for course work, they have just entered to the thesis period) </p><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The purpose of master programme is to provide advanced training in each respective field to prepare students for positions in industry and government and for further graduate study.</p><br>
<p style="font-size: 1.5rem !important; text-decoration: underline;">Course Structure</p><br>
<p style="padding-left: 5rem !important" >  Coursework and Dissertation mode (--credits) </p>
<br>
<h6 style="font-size: 1.5rem !important"><strong>List of Master Degree Program</strong></h6>
<ul>
		<li>M.E. (Civil-Structural Engineering)</li>
	<li>M.E. (Civil-Water Resources Engineering)</li>
	<li>M.E. (Civil-Geotechnical Engineering)</li>
	<li>M.E. (Civil-Transportation Engineering )</li>
	<li>M.E. (Civil-Construction Management)</li>
	<li>M.E. (Information Technology)</li>
	<li>M.E. (Mechanical Engineering)</li>
	<li>M.E. (Electronic Engineering)</li>
	<li>M.E. (Electrical Power Engineering)</li>
	<li>M.E. (Mechatronic Engineering)</li>
	<li>M.E. (Chemical Engineering)</li>
	<li>M.E. (Mining Engineering)</li>
	<li>M.E. (Nuclear Technology)</li>
	<li>M.S. (Food Biotechnology)</li>
	<li>M.Arch. (Architecture)</li>
	<li>M.A. (English for Specific Purposes)</li>
</ul>
<br>
<h6 style="font-size: 1.5rem !important"><strong>Doctral Degree Programmes Offered</strong></h6>
<ul>
	<li>Ph. D. (Structural Engineering)</li>
	<li>Ph. D. (Water Resources Engineering)</li>
	<li>Ph. D. (Information Technology)</li>
	<li>Ph. D. (Electronic Engineering)</li>
	<li>Ph. D. (Electrical Power Engineering)</li>
	<li>Ph. D. (Mechanical Engineering)</li>
	<li>Ph. D. (Mechatronic Engineering)</li>
	<li>Ph. D. (Chemical Engineering)</li>
	<li>Ph. D. (Mining Engineering)</li>
	<li>Ph. D. (Nuclear Technology)</li>
	<li>Ph. D. (Architecture)</li>
	<li>Ph.D. (Industrial Biotechnology)</li> 
	<li>Ph.D. (Environmental Biotechnology)</li>
	<li>Ph.D. (Plant and Agricultural Biotechnology)</li>
	<li>Ph.D. (Food Biotechnology)</li>
</ul>

</div>

</div>
</div>
@include('allviews.footer')
<style type="text/css">
	.undergraduate{
		padding: 1rem !important;
	}
	.undergraduate h3{
		text-decoration: underline !important;
	}
	.undergraduate ul{
		color: #E040FB;
			margin-left: 1rem !important;
	}
	.postgraduate{
		padding: 1rem !important;
	}
	.postgraduate ul{
		color: #E040FB;
			margin-left: 1rem !important;
	}
	}
</style>
@endsection