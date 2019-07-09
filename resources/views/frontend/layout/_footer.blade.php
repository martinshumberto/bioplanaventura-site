<input type="hidden" name="app_url" id="app_url" value="{!!url("/")!!}">
 
<script src="{{asset('public/'.elixir('js/bootstrap.min.js'))}}" async></script>
  @if(file_exists("public/js/frontend/".Route::currentRouteName()."-libs.js")) <script
  src="{{asset('public/'.elixir('js/frontend/'.Route::currentRouteName().'-libs.js'))}}"></script>
@else
<script src="{{asset('public/'.elixir('js/default-libs.js'))}}"></script>
@endif

@if (file_exists("public/js/frontend/".Route::currentRouteName().".js"))
<script src="{{asset('public/'.elixir('js/frontend/'.Route::currentRouteName().'.js'))}}" async></script>
@else
<script src="{{asset(''.elixir('js/default.js'))}}" async></script>
@endif


 

</body>

</html>
