<input type="hidden" name="app_url" id="app_url" value="{!!url("/")!!}">


@if (file_exists("/js/backend/".Route::currentRouteName().".js"))
<script src="{{asset(''.elixir('js/backend/'. Route::currentRouteName() .'.js'))}}" async></script>
@endif

</body>

</html>
