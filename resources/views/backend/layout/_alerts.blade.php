@if (session('alert'))
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 9px 33px;">
    <div class="alert alert-{!!session('alert.code')!!}">
      {!! session('alert.text') !!}
    </div>
  </div>
</div>
@endif
