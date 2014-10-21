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
<section class="latest-job">
	<div class="masthead-item background-cover" style="background-image:url('{{asset('images/latest-job.png')}}');">
			
	</div>
</section>
<section class="mobile-friendly">
	{{HTML::image('images/mobile-friendly.png','Mobile Friendly',array('class'=>'img-responsive'))}}
</section>
<section class="partner">
	{{HTML::image('images/partner.png','Job Footer',array('class'=>'img-responsive'))}}
</section>
<section class="footer">
	{{HTML::image('images/footer.png','Job Footer',array('class'=>'img-responsive'))}}
</section>



@stop