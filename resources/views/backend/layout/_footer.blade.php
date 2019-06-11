<input type="hidden" name="app_url" id="app_url" value="{!!url("/")!!}">


@if (file_exists("public/js/backend/".Route::currentRouteName().".js"))
<script src="{{asset('public'.elixir('js/backend/'. Route::currentRouteName() .'.js'))}}" async></script>
@endif

</body>

</html>
