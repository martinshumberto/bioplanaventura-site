<input type="hidden" name="app_url" id="app_url" value="{!!url("/")!!}">
  @if(file_exists("js/frontend/".Route::currentRouteName()."-libs.js")) <script
  src="{{asset(''.elixir('js/frontend/'.Route::currentRouteName().'-libs.js'))}}"></script>
@else
<script src="{{asset(''.elixir('js/default-libs.js'))}}"></script>
@endif

@if (file_exists("js/frontend/".Route::currentRouteName().".js"))
<script src="{{asset(''.elixir('js/frontend/'.Route::currentRouteName().'.js'))}}" async></script>
@else
<script src="{{asset(''.elixir('js/default.js'))}}" async></script>
@endif
</body>

</html>
