

 
@if($flash=session('success_message'))

 <div class="col-md-12 row" style="position: absolute;top: 263px;z-index: 1000; left: 9px;"> 
   <div class="col-md-1"></div>
    <div class="col-md-9  center-block alert_box success">
      <b>Success!</b> {{$flash}}
      <button class="close"></button>
    </div>
   <div class="col-md-1"></div>
 </div> 
@endif


@if($flash=session('error_message'))
<div class="col-md-12 row" style="position: absolute;top: 263px; z-index: 1000; left: 9px;"> 
   <div class="col-md-1"></div>
    <div class="col-md-9  center-block alert_box error">
      <b>Error!</b> {{$flash}}
      <button class="close"></button>
    </div>
   <div class="col-md-1"></div>
 </div>  
@endif