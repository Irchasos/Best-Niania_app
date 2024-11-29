@yield('layout')

<div class="bgded overlay" style="background-image: url('{{ secure_asset('images/backgrounds/slider.jpeg') }}'); ">
    <div id="pageintro" class="hoc clear">
        <article>
            <h3 class="heading">{{ __('slider.title') }}</h3>
            <p>{{ __('slider.subtitle') }}</p>
            <footer><a class="btn" href="#">{{ __('slider.select_now') }}</a></footer>
        </article>
    </div>
</div>

<div class="wrapper row3">
    <main class="hoc container clear">
        <section id="introblocks">
            <ul class="nospace group btmspace-80 elements elements-four">
                <li class="one_quarter">
                    <article><a href="#"><i class="fas fa-hand-rock"></i></a>
                        <h6 class="heading">{{ __('slider.engagement') }}</h6>
                        <p>{{ __('slider.engagement_description') }}</p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article><a href="#"><i class="fas fa-dove"></i></a>
                        <h6 class="heading">{{ __('slider.creativity') }}</h6>
                        <p>{{ __('slider.creativity_description') }}</p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article><a href="#"><i class="fas fa-history"></i></a>
                        <h6 class="heading">{{ __('slider.dedication') }}</h6>
                        <p>{{ __('slider.dedication_description') }}</p>
                    </article>
                </li>
                <li class="one_quarter">
                    <article><a href="#"><i class="fas fa-heartbeat"></i></a>
                        <h6 class="heading">{{ __('slider.safety') }}</h6>
                        <p>{{ __('slider.safety_description') }}</p>
                    </article>
                </li>
            </ul>
        </section>
    </main>
</div>
