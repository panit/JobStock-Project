@extends('layout.default')
@section('content')
<div class="example-box">
  <div class="example-code">
    @if(Session::has('message'))
    <div class="col-md-4">
      <div class="infobox success-bg">
        {{ Session::get('message') }}
      </div>
    </div>
    @endif
    <table class="table table-hover text-center">
      <thead>
        <tr>
          <th class="text-center">ID</th>
          <th>ឈ្មោះ</th>
          <th>ឈ្មោះខ្មែរ</th>
          <th>ភេទ</th>
          <th>ថ្ងៃខែឆ្នាំកំនើត</th>
          <th class="text-center">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          if(isset($_GET['page'])){
        		if ($_GET['page']==1) {
        			$i=1;
        		}
        		else{        
      				$i=10*$_GET['page'];
        		}          		
          } 
          else{
          		$i=1;
          }  
        ?>
        @foreach ($students as $student)
        <tr>
          <td>{{ $i }}</td>
          <td class="font-bold text-left text-transform-upr">{{ link_to('student/'.$student->id, $student->englishName) }}</td>
          <td class="font-bold text-center">{{ $student->khmerName }}</td>
          <td class="font-bold text-center">{{ $student->sex }}</td>
          <td class="font-bold text-center">{{ $student->DOB }}</td>
          <td>
            <div class="dropdown">
              <a href="javascript:;" title="" class="btn medium bg-blue" data-toggle="dropdown">
              <span class="button-content">
              <i class="glyph-icon font-size-11 icon-cog"></i>
              <i class="glyph-icon font-size-11 icon-chevron-down"></i>
              </span>
              </a>
              <ul class="dropdown-menu float-right">
                <li>
                  <a href="{{ URL::route('studentdetail',$student->id) }}" title="">
                  <i class="glyph-icon icon-edit mrg5R"></i>
                  ​ កែព័ត៌មានសិស្ស
                  </a>
                </li>
                <li>
                  <a href="{{ URL::route('enrol.show',$student->id) }}" title="">
                  <i class="glyph-icon icon-calendar mrg5R"></i>
                  សេវាកម្ម
                  </a>
                </li>
                <li>
                  <a href="javascript:;" title="">
                  <i class="glyph-icon icon-download mrg5R"></i>
                  Download
                  </a>                </li>
                <li class="divider"></li>
                <li>
                  {{ Form::open(array('url' => 'student/' . $student->id)) }}
                  {{ Form::hidden('_method', 'DELETE') }}
                  {{ Form::submit('Delete', array('class' => 'btn medium bg-red')) }}
                  {{ Form::close() }}
                </li>
              </ul>
            </div>
          </td>
        </tr>
        <?php $i++ ?> 
        @endforeach
      </tbody>
    </table>
    <?php 
      echo $students->links();
     ?>
  </div>
</div>
@stop