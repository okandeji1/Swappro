
@if($flash=session('success_message'))
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="position: absolute;top: 5px; z-index: 1000; left: 9px;">
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <i class="icon-tick"></i><strong>Success!</strong> {{$flash}}.
    </div>
</div>
@endif

@if($flash=session('error_message'))
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <i class="icon-warning2"></i><strong>Oh snap!</strong> You need to Change a few things up and try again.
    </div>
</div>
@endif