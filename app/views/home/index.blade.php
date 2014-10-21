@extends('layout.default')
@section('content')

<section class="masthead">
	<div class="masthead-item background-cover" style="background-image:url('{{asset('images/slide-one-2x32.jpg')}}');">
			
	</div>
</section>
<section class="feature">
	<div>
		{{HTML::image('images/feature.png','Job Feature',array('class'=>'img-responsive'))}}
	</div>
</section>
	
@stop