@extends('layout')

@section('content')
<div class=columns>
	<div class="column is-2" id="logo-column">
	@include('allviews.logo')
	</div>
	<div class="column is-8 container">
		<div class="tile is-ancestor is-parent">
		<div class="tile is-3" style="padding: 0; border-right: 1px solid #cccccc">
			<aside class="menu">
				<ul class="menu-list">
				    	<li><a href="/depertments/civil" class=" 
				    	{{ Request::path() ==  'depertments/civil' ? 'is-activeDep' : ''  }}">Civil</a></li>
				   	<li><a href="/depertments/mech" class="{{ Request::path() ==  'depertments/mech' ? 'is-activeDep' : ''  }}">Mechnical</a></li>
				    	<li><a href="/depertments/mecha" class="{{ Request::path() ==  'depertments/mecha' ? 'is-activeDep' : ''  }}">Mechatronics</a></li>
				    	<li><a href="/depertments/ec" class="{{ Request::path() ==  'depertments/ec' ? 'is-activeDep' : ''  }}">Electronics</a></li>
				    	<li><a href="/depertments/ep" class="{{ Request::path() ==  'depertments/ep' ? 'is-activeDep' : ''  }}">Electrical Power</a></li>
				    	<li><a href="/depertments/ceit" class="{{ Request::path() ==  'depertments/ceit' ? 'is-activeDep' : ''  }}">Computer Engineering and Information Technology</a></li>
				    	<li><a href="/depertments/archi">Architecture</a></li>
				</ul>
				<p style="padding-top: 1rem !important; font-weight: lighter !important; color: gray;">Supporting Departments</p>
					<ul class="menu-list">
				    <li><a href="/depertments/eng" class=" 
				    	{{ Request::path() ==  'depertments/eng' ? 'is-activeDep' : ''  }}">English</a></li>
				   	<li><a href="/depertments/math" class="{{ Request::path() ==  'depertments/math' ? 'is-activeDep' : ''  }}">Mathematics</a></li>
				    	<li><a href="/depertments/phy" class="{{ Request::path() ==  'depertments/phy' ? 'is-activeDep' : ''  }}">Physics</a></li>
				    	<li><a href="/depertments/chem" class="{{ Request::path() ==  'depertments/chem' ? 'is-activeDep' : ''  }}">Chemistry</a></li>
				</ul>
		</aside>
		</div>
		@yield('info')
	</div>
	</div>
	<div class="column is-2">
	<!--<div class="tile is-ancestor is-parent">
	<div class="tile is-child"> -->
		@yield('side_bar')
		</div>
		</div>
	<!--</div>
	</div>-->
	@include('allviews.footer')

		<style type="text/css">
		li:hover{
			border-right: 4px solid #3273dc;
		}
		li:hover a{
			color: #3273dc !important;
		}
		.is-activeDep{
			background-color: #3273dc !important;
			border-bottom-right-radius: 0 !important;
			border-top-right-radius: 0 !important;
		}
	</style>

@endsection