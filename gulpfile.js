const elixir = require("laravel-elixir");

elixir(mix => {
    /*------------------------------------------------------------------------*/
    /* FRONTEND */
    /*------------------------------------------------------------------------*/

    /* SCSS FRONTEND */
    mix.sass(
        "resources/assets/sass/frontend/pages/home.scss",
        "public/css/frontend/frontend-home.css"
    );
    mix.sass(
        "resources/assets/sass/frontend/pages/abouts.scss",
        "public/css/frontend/frontend-abouts.css"
    );
    mix.sass(
        "resources/assets/sass/frontend/pages/blogs.scss",
        "public/css/frontend/frontend-blogs.css"
    );
    mix.sass(
        "resources/assets/sass/frontend/pages/blog.scss",
        "public/css/frontend/frontend-blog.css"
    );
    mix.sass(
        "resources/assets/sass/frontend/pages/events.scss",
        "public/css/frontend/frontend-events.css"
    );
    mix.sass(
        "resources/assets/sass/frontend/pages/event.scss",
        "public/css/frontend/frontend-event.css"
    );
    mix.sass(
        "resources/assets/sass/frontend/pages/galleries.scss",
        "public/css/frontend/frontend-galleries.css"
    );
    mix.sass(
        "resources/assets/sass/frontend/pages/my-account.scss",
        "public/css/frontend/frontend-my-account.css"
    );
    mix.sass(
        "resources/assets/sass/frontend/pages/my-orders.scss",
        "public/css/frontend/frontend-my-orders.css"
    );

    /* JS Libs FRONTEND */
    mix.scripts(
        [
            "resources/assets/js/libs/jquery-1.12.3.min.js",
            "resources/assets/js/libs/jquery.mmenu.min.all.js",
            "resources/assets/js/libs/jquery.fitvids.js",
            "resources/assets/js/libs/jquery.magnific-popup.js",
            "resources/assets/js/libs/slick.js",
            "resources/assets/js/libs/jquery.sticky-kit.min.js",
            "resources/assets/js/libs/imagesloaded.pkgd.min.js",
            "resources/assets/js/libs/anim-on-scroll.js",
            "resources/assets/js/libs/chosen.jquery.js",
            "resources/assets/js/libs/nouislider.js"
        ],
        "public/js/frontend/frontend-home-libs.js"
    );
    mix.scripts(
        [
            "resources/assets/js/libs/jquery-1.12.3.min.js",
            "resources/assets/js/libs/jquery.mmenu.min.all.js",
            "resources/assets/js/libs/jquery.fitvids.js",
            "resources/assets/js/libs/jquery.magnific-popup.js",
            "resources/assets/js/libs/slick.js",
            "resources/assets/js/libs/jquery.sticky-kit.min.js",
            "resources/assets/js/libs/imagesloaded.pkgd.min.js",
            "resources/assets/js/libs/anim-on-scroll.js",
            "resources/assets/js/libs/chosen.jquery.js",
            "resources/assets/js/libs/nouislider.js"
        ],
        "public/js/frontend/frontend-abouts-libs.js"
    );
    mix.scripts(
        [
            "resources/assets/js/libs/jquery-1.12.3.min.js",
            "resources/assets/js/libs/jquery.mmenu.min.all.js",
            "resources/assets/js/libs/jquery.fitvids.js",
            "resources/assets/js/libs/jquery.magnific-popup.js",
            "resources/assets/js/libs/slick.js",
            "resources/assets/js/libs/jquery.sticky-kit.min.js",
            "resources/assets/js/libs/imagesloaded.pkgd.min.js",
            "resources/assets/js/libs/anim-on-scroll.js",
            "resources/assets/js/libs/chosen.jquery.js",
            "resources/assets/js/libs/nouislider.js"
        ],
        "public/js/frontend/frontend-blogs-libs.js"
    );
    mix.scripts(
        [
            "resources/assets/js/libs/jquery-1.12.3.min.js",
            "resources/assets/js/libs/jquery.mmenu.min.all.js",
            "resources/assets/js/libs/jquery.fitvids.js",
            "resources/assets/js/libs/jquery.magnific-popup.js",
            "resources/assets/js/libs/slick.js",
            "resources/assets/js/libs/jquery.sticky-kit.min.js",
            "resources/assets/js/libs/imagesloaded.pkgd.min.js",
            "resources/assets/js/libs/anim-on-scroll.js",
            "resources/assets/js/libs/chosen.jquery.js",
            "resources/assets/js/libs/nouislider.js"
        ],
        "public/js/frontend/frontend-blog-libs.js"
    );
    mix.scripts(
        [
            "resources/assets/js/libs/jquery-1.12.3.min.js",
            "resources/assets/js/libs/jquery.mmenu.min.all.js",
            "resources/assets/js/libs/jquery.fitvids.js",
            "resources/assets/js/libs/jquery.magnific-popup.js",
            "resources/assets/js/libs/slick.js",
            "resources/assets/js/libs/jquery.sticky-kit.min.js",
            "resources/assets/js/libs/imagesloaded.pkgd.min.js",
            "resources/assets/js/libs/anim-on-scroll.js",
            "resources/assets/js/libs/chosen.jquery.js",
            "resources/assets/js/libs/nouislider.js"
        ],
        "public/js/frontend/frontend-events-libs.js"
    );
    mix.scripts(
        [
            "resources/assets/js/libs/jquery-1.12.3.min.js",
            "resources/assets/js/libs/jquery.mmenu.min.all.js",
            "resources/assets/js/libs/jquery.fitvids.js",
            "resources/assets/js/libs/jquery.magnific-popup.js",
            "resources/assets/js/libs/slick.js",
            "resources/assets/js/libs/jquery.sticky-kit.min.js",
            "resources/assets/js/libs/imagesloaded.pkgd.min.js",
            "resources/assets/js/libs/anim-on-scroll.js",
            "resources/assets/js/libs/chosen.jquery.js",
            "resources/assets/js/libs/nouislider.js"
        ],
        "public/js/frontend/frontend-event-libs.js"
    );
    mix.scripts(
        [
            "resources/assets/js/libs/jquery-1.12.3.min.js",
            "resources/assets/js/libs/jquery.mmenu.min.all.js",
            "resources/assets/js/libs/jquery.fitvids.js",
            "resources/assets/js/libs/jquery.magnific-popup.js",
            "resources/assets/js/libs/slick.js",
            "resources/assets/js/libs/jquery.sticky-kit.min.js",
            "resources/assets/js/libs/imagesloaded.pkgd.min.js",
            "resources/assets/js/libs/anim-on-scroll.js",
            "resources/assets/js/libs/chosen.jquery.js",
            "resources/assets/js/libs/nouislider.js"
        ],
        "public/js/frontend/frontend-galleries-libs.js"
    );
    mix.scripts(
        [
            "resources/assets/js/libs/jquery-1.12.3.min.js",
            "resources/assets/js/libs/jquery.mmenu.min.all.js",
            "resources/assets/js/libs/jquery.fitvids.js",
            "resources/assets/js/libs/jquery.magnific-popup.js",
            "resources/assets/js/libs/slick.js",
            "resources/assets/js/libs/jquery.sticky-kit.min.js",
            "resources/assets/js/libs/imagesloaded.pkgd.min.js",
            "resources/assets/js/libs/anim-on-scroll.js",
            "resources/assets/js/libs/chosen.jquery.js",
            "resources/assets/js/libs/nouislider.js"
        ],
        "public/js/frontend/frontend-my-account-libs.js"
    );
    mix.scripts(
        [
            "resources/assets/js/libs/jquery-1.12.3.min.js",
            "resources/assets/js/libs/jquery.mmenu.min.all.js",
            "resources/assets/js/libs/jquery.fitvids.js",
            "resources/assets/js/libs/jquery.magnific-popup.js",
            "resources/assets/js/libs/slick.js",
            "resources/assets/js/libs/jquery.sticky-kit.min.js",
            "resources/assets/js/libs/imagesloaded.pkgd.min.js",
            "resources/assets/js/libs/anim-on-scroll.js",
            "resources/assets/js/libs/chosen.jquery.js",
            "resources/assets/js/libs/nouislider.js"
        ],
        "public/js/frontend/frontend-my-orders-libs.js"
    );

    /* JS frontend */
    mix.scripts(
        ["resources/assets/js/components/main.js"],
        "public/js/frontend/frontend-home.js"
    );
    mix.scripts(
        ["resources/assets/js/components/main.js"],
        "public/js/frontend/frontend-abouts.js"
    );
    mix.scripts(
        ["resources/assets/js/components/main.js"],
        "public/js/frontend/frontend-blogs.js"
    );
    mix.scripts(
        ["resources/assets/js/components/main.js"],
        "public/js/frontend/frontend-blog.js"
    );
    mix.scripts(
        ["resources/assets/js/components/main.js"],
        "public/js/frontend/frontend-events.js"
    );
    mix.scripts(
        ["resources/assets/js/components/main.js"],
        "public/js/frontend/frontend-event.js"
    );
    mix.scripts(
        ["resources/assets/js/components/main.js"],
        "public/js/frontend/frontend-galleries.js"
    );
    mix.scripts(
        ["resources/assets/js/components/main.js"],
        "public/js/frontend/frontend-my-account.js"
    );
    mix.scripts(
        ["resources/assets/js/components/main.js"],
        "public/js/frontend/frontend-my-orders.js"
    );

    /*------------------------------------------------------------------------*/
    /* backend - BACKEND */
    /*------------------------------------------------------------------------*/

    /* SCSS BACKEND */
    mix.sass(
        "resources/assets/sass/backend/pages/auth.scss",
        "public/css/backend/backend-auth.css"
    );
    mix.sass(
        "resources/assets/sass/backend/pages/auth.scss",
        "public/css/backend/backend-dashboard.css"
    );
    mix.sass(
        "resources/assets/sass/backend/pages/auth.scss",
        "public/css/backend/backend-home.css"
    );
    mix.sass(
        "resources/assets/sass/backend/pages/abouts.scss",
        "public/css/backend/backend-abouts.css"
    );

    /* DEFAULT */
    mix.sass(
        "resources/assets/sass/backend/pages/auth.scss",
        "public/css/backend/default.css"
    );

    /* JS BACKEND DEFAULT */
    mix.scripts(
        ["resources/assets/js/components/backend.js"],
        "public/js/backend/backend-app.js"
    );

    /* JS BACKEND LIBS */
    mix.scripts(
        [
            "resources/assets/js/libs/dropzone.js"
        ],
        "public/js/backend/backend-abouts-libs.js"
    );

    /* JS BACKEND COMPONENT */
    mix.scripts(
        ["resources/assets/js/components/chart.js"],
        "public/js/backend/backend-home.js"
    );
    mix.scripts(
        ["resources/assets/js/components/editor.js", "resources/assets/js/components/dropzone.js"],
        "public/js/backend/backend-abouts.js"
    );

    /*
	 |--------------------------------------------------------------------------
	 | Copy Fonts
	 |--------------------------------------------------------------------------
	*/

    mix.copy("resources/assets/fonts", "public/fonts");
    mix.copy("resources/assets/img", "public/img");
});
