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
<section class="latest-candidate">
	<div class="masthead-item background-cover" style="background-image:url('{{asset('images/testimonals-bg-darker.jpg')}}');">
		<div class="col-md-8 container col-md-offset-2">
			
			@for($i=1; $i<=40; $i++)
			<a href="#" class="ui-state-default radius-all-2 display-block  popover-button-default" data-content="<div class='pad10A'>
				Content For popup
			</div>" title="" data-trigger="hover" data-placement="top" data-original-title="Candidate's Name">
				<img src="http://placehold.it/70">
			</a>
			@endfor
			<a href="#" class="btn large transparent" title="">
            <span class="button-content">Brows More</span>
        </a>
		</div>
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