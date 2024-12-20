<footer id="footer" class="hoc clear">
    <div style="padding-left:20px;" class="one_quarter first">

        <h1 class="logoname"><a href="index.html">{{ __('footer.homepage') }}</a></h1>
        <p>{{ __('footer.description') }} <a href="#">&hellip;</a></p>
        <ul class="faico clear">
            <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
            <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
        </ul>
    </div>
    <div class="one_quarter">
        <h6 class="heading">{{ __('footer.other_pages') }}</h6>
        <ul class="nospace linklist">
            <li><a href="#">StarWars</a></li>
            <li><a href="#">Trello</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Invoice</a></li>
            <li><a href="#">Portfolio</a></li>
        </ul>
    </div>
    <div class="one_quarter">
        <h6 class="heading">{{ __('footer.gallery') }}</h6>
        <ul class="nospace clear latestimg">
            @for ($i = 0; $i < 9; $i++)
                <li><a class="imgover" href="#"><img src="{{ secure_asset('images/100x100.png') }}" alt=""></a></li>
            @endfor
        </ul>
    </div>
    <div class="one_quarter">
        <h6 class="heading">{{ __('footer.awards') }}</h6>
        <ul class="nospace linklist">
            <li>
                <article>
                    <p class="nospace btmspace-10"><a href="#">BestNiania</a></p>
                    <time class="block font-xs" datetime="2024-04-06">Friday, 6<sup>th</sup> April 2024</time>
                </article>
            </li>
            <li>
                <article>
                    <p class="nospace btmspace-10"><a href="#">UpperNiania</a></p>
                    <time class="block font-xs" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2025</time>
                </article>
            </li>
        </ul>
    </div>
</footer>

<div class="wrapper row5">
    <div id="copyright" class="hoc clear">
        <p class="fl_left">{{ __('footer.copyright') }} <a href="#">{{ __('footer.domain_name') }}</a></p>
        <p class="fl_right">{{ __('footer.template_by') }} <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    </div>
</div>
