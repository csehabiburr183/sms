@include('layouts.header');

@include('layouts.sidebar');

    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3 style="width: 40%">
                @yield('content_title')
                <hr/>
            </h3>

            <div class="row mt">
                <div class="col-lg-12">
                    <p>@yield('main_content')</p>
                </div>
            </div>

        </section>
    </section>

@include('layouts.footer');