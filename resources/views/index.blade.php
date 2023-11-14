@extends('layout')

@section('content')
    <div class="bgded overlay" style="background-image: url('{{ secure_asset('images/backgrounds/slider.jpeg') }}'); ">
        <div id="pageintro" class="hoc clear">
            <!-- ################################################################################################ -->
            <article>
                <h3 class="heading">Pośrednioctwo zatrudnienia opiekunów</h3>
                <p>Wyłacznie sprawdzeni wychowawcy</p>
                <footer><a class="btn" href="#">Wybierz teraz</a></footer>
            </article>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->

    <div class="wrapper row3">
        <main class="hoc container clear">
            <!-- main body -->
            <!-- ################################################################################################ -->
            <section id="introblocks">
                <ul class="nospace group btmspace-80 elements elements-four">
                    <li class="one_quarter">
                        <article><a href="#"><i class="fas fa-hand-rock"></i></a>
                            <h6 class="heading">Zaangażowanie</h6>
                            <p>Rozumiemy, że opieka to nie tylko praca, ale przede wszystkim powołanie.</p>
                        </article>
                    </li>
                    <li class="one_quarter">
                        <article><a href="#"><i class="fas fa-dove"></i></a>
                            <h6 class="heading">Kreatywność</h6>
                            <p>esteśmy zdeklarowani w rozwijaniu kreatywności, aby zapewnić naszym podopiecznym
                                pełniejsze, radosne doświadczenia.</p>
                        </article>
                    </li>
                    <li class="one_quarter">
                        <article><a href="#"><i class="fas fa-history"></i></a>
                            <h6 class="heading">Poświęcenie</h6>
                            <p>Zrozumienie, troska i gotowość do niesienia pomocy są dla nas fundamentalnymi wartościami. </p>
                        </article>
                    </li>
                    <li class="one_quarter">
                        <article><a href="#"><i class="fas fa-heartbeat"></i></a>
                            <h6 class="heading">EBezpieczeństwo</h6>
                            <p>. Dbamy o to, aby każde miejsce, w którym przebywają, było bezpieczne i przyjazne.</p>
                        </article>
                    </li>
                </ul>
            </section>
            <!-- ################################################################################################ -->
            <section class="group shout">
                <h1 class="heading">Opiekunki Tygodnia</h1>

                @foreach ($guards as $guard)
                    <figure class=" one_third "><img style="height:200px;width:400px"
                                                     src="{{ secure_asset('images/') }}/{{ $guard->src }}" alt="">
                        <figcaption class="heading"><a href="#">{{ $guard->name }}</a></figcaption>
                    </figure>
                @endforeach
            </section>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="bgded overlay light" style="background-image:url("{{ secure_asset('images/backgrounds/01.png') }}");">
    <section id="services" class="hoc container clear">
        <!-- ################################################################################################ -->
        <div class="sectiontitle">
            <h6 class="heading font-x2">Główne parametry</h6>
        </div>
        <ul class="nospace group elements elements-three">
            <li class="one_third">
                <article><a href="#"><i class="fas fa-hourglass-half"></i></a>
                    <h6 class="heading">Cena za godzinę stała przez całą dobę</h6>
                    <p>Oferujemy atrakcyjną cenę za godzinę, co pozwala Ci na elastyczne korzystanie z naszych usług w
                        zależności od Twoich potrzeb.
                        Jeśli potrzebujesz opieki przez całą dobę, niezależnie od ilości godzin, mamy dla Ciebie
                        korzystną cenę.
                    </p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-paw"></i></a>
                    <h6 class="heading">Opieka nad zwierzętami</h6>
                    <p>Nasi doświadczeni opiekunowie kochają zwierzęta i są gotowi zadbać o Twoich pupili. Zapewniamy
                        spokój ducha, wiedząc, że Twoje zwierzęta są w najlepszych rękach. Oferujemy elastyczność w
                        wyborze terminów opieki, aby sprostać Twoim potrzebom.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-users"></i></a>
                    <h6 class="heading">Opieka nad większą ilością osób</h6>
                    <p>Nasz zespół specjalistów do opieki nad grupami osób gwarantuje profesjonalną troskę oraz
                        wsparcie. Niezależnie od tego, czy potrzebujesz opieki nad seniorami, grupą dzieci, czy osobami
                        o szczególnych potrzebach, nasi doświadczeni opiekunowie zapewnią odpowiednią opiekę i wsparcie,
                        dbając o komfort każdej osoby w grupie.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-superscript"></i></a>
                    <h6 class="heading">Wsparcie w nauce</h6>
                    <p>Kompleksowe wsparcie w nauce, dostosowane do indywidualnych potrzeb każdego ucznia. Pomagamy w
                        zrozumieniu trudnych zagadnień, przygotowaniu do egzaminów i rozwijaniu umiejętności w sposób
                        dostosowany do Twoich celów edukacyjnych.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class=" fas fa-puzzle-piece
"></i></a>
                    <h6 class="heading">Organizowanie zabawy</h6>
                    <p>Bez względu na to, czy to urodziny, przyjęcia rodzinne czy inne okazje, tworzymy niezapomniane
                        chwile pełne radości, gier i rozrywki, zapewniając doskonałą atmosferę dla wszystkich
                        uczestników.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-hand-holding-usd"></i></a>
                    <h6 class="heading">Wychowawca kolonijny</h6>
                    <p>Nasi doświadczeni wychowawcy kolonijni są gotowi zapewnić pełne bezpieczeństwo, opiekę i edukację
                        dzieciom i młodzieży podczas letnich kolonii. Działamy w duchu zabawy, uczenia i twórczości, aby
                        zapewnić niezapomniane wakacje pełne przygód i rozwoju dla naszych podopiecznych.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-wheelchair"></i></a>
                    <h6 class="heading">Opieka nad niepełnosprawnymi</h6>
                    <p>Zdajemy sobie sprawę, że każda osoba jest wyjątkowa, dlatego dostosowujemy nasze usługi do
                        indywidualnych potrzeb i możliwości. Naszym celem jest zapewnienie wsparcia, które umożliwi
                        naszym podopiecznym pełniejsze i bardziej samodzielne życie, z uwzględnieniem ich specyficznych
                        wymagań.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-utensils"></i></a>
                    <h6 class="heading">Kucharz</h6>
                    <p>Przygotowuje smaczne i zdrowe potrawy, bazując na najwyższej jakości składnikach. Jego
                        kreatywność i umiejętności kulinarne pozwalają nam oferować różnorodne menu, które zaspokoi
                        gusta nawet najbardziej wymagających smakoszy. Nasz kucharz dba o jakość i świeżość potraw, aby
                        zapewnić naszym gościom niezapomniane doświadczenia kulinarnie.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-user-graduate"></i></a>
                    <h6 class="heading">Wieloletnie doświadczenie</h6>
                    <p>Nasz personel ma wieloletnie doświadczenie w swoim zawodzie. Dzięki temu możesz być pewien, że
                        otrzymujesz usługi od wykwalifikowanych profesjonalistów, którzy zdobyli wiedzę i umiejętności
                        przez wiele lat praktyki. Ich doświadczenie pozwala nam świadczyć usługi na najwyższym poziomie
                        i spełniać oczekiwania naszych klientów. Jesteśmy dumni z naszego zespołu, który jest gotów
                        sprostać każdemu wyzwaniu związanemu z naszym zawodem.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-moon"></i></a>
                    <h6 class="heading">Opieka w nocy</h6>
                    <p>Nasza opieka obejmuje również wsparcie w nocy. Jesteśmy dostępni 24 godziny na dobę, aby zapewnić
                        opiekę naszym klientom o każdej porze dnia i nocy. Nasza wykwalifikowana kadra jest gotowa do
                        udzielenia pomocy i wsparcia w sytuacjach nagłych oraz do monitorowania i troskliwej opieki
                        przez całą noc. Dzięki naszej opiece w nocy możesz spać spokojnie, wiedząc, że jesteś w dobrych
                        rękach i że możesz liczyć na naszą pomoc o każdej porze.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-female"></i></a>
                    <h6 class="heading">Opiekunka</h6>
                    <p>Kluczowym elementem opieki jest budowanie zaufania i dobrej relacji między opiekunem a
                        podopiecznym. Jeśli podopieczny ma preferencje co do płci opiekuna, wybór odpowiedniej płci może
                        ułatwić budowanie relacji. W przypadku osób, które mają specjalistyczne potrzeby, takie jak
                        ofiary przemocy domowej lub przestępstw, płeć opiekuna może mieć znaczenie ze względu na
                        czynniki związane z bezpieczeństwem i komfortem.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-male"></i></a>
                    <h6 class="heading">Opiekun</h6>
                    <p>Warto jednak pamiętać, że priorytetem powinna być jakość i kompetencje opiekuna oraz jego
                        zdolność do dostarczania odpowiedniej opieki. Płeć opiekuna to tylko jeden z wielu czynników,
                        które można uwzględnić, ale nie powinno to przesłaniać innych istotnych aspektów wyboru
                        opiekuna.</p>
                </article>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-frown"></i></a>
                    <h6 class="heading">Trudna młodzież</h6>
                    <p>Nasi pracownicy są przygotowani do pracy z trudną młodzieżą i do tworzenia indywidualnych
                        strategii działania, które uwzględniają unikalne potrzeby każdego uczestnika. Nasza praca ma na
                        celu pomóc młodzieży osiągnąć sukcesy, zarówno w sferze edukacji, jak i życia codziennego.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class="fas fa-language"></i></a>
                    <h6 class="heading">Praca w jezyku angielskim</h6>
                    <p>Dzięki znajomości języka angielskiego, opiekunowie mają dostęp do szerokiego zakresu informacji,
                        materiałów edukacyjnych i źródeł wiedzy. Mogą również pomagać podopiecznym w korzystaniu z
                        zasobów online, nauczaniu języka angielskiego lub rozwijaniu zainteresowań. Jeśli opiekunka
                        zajmuje się osobami anglojęzycznymi, jej
                        umiejętność posługiwania się językiem angielskim ułatwia nawiązywanie relacji i zrozumienie
                        potrzeb podopiecznych.</p>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><i class=" fas fa-universal-access"></i></a>
                    <h6 class="heading">Wsparcie psychologiczne</h6>
                    <p>Opiekunowie, którzy zapewniają wsparcie psychologiczne, pomagają podopiecznym utrzymać
                        emocjonalną stabilność w trudnych sytuacjach. Dają im możliwość wyrażenia uczuć i myśli oraz
                        słuchają z empatią. Wsparcie psychologiczne umożliwia lepsze zrozumienie i
                        rozpoznanie potrzeb emocjonalnych podopiecznych. Opiekunowie pracujący w tej dziedzinie potrafią
                        dostosować podejście do indywidualnych potrzeb każdej osoby.</p>
                </article>
            </li>
        </ul>
        <!-- ################################################################################################ -->
    </section>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row3">
        <section class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
                <p class="nospace font-xs">Nasze cele</p>
                <h6 class="heading font-x2">Kluczowe analizy </h6>
            </div>
            <ul class="pr-charts nospace group center">
                <li class="pr-chart-ctrl" data-animate="false">
                    <div class="pr-chart" data-percent="11"><i></i></div>
                    <p>Anulowane spotkania - W przypadku zmiany planów poinformuj nas o tym że nasz opiekun nie będzie
                        potrzebny </p>
                </li>
                <li class="pr-chart-ctrl" data-animate="false">
                    <div class="pr-chart" data-percent="50"><i></i></div>
                    <p>Dobry wybór - Co drugi nasz opiekun po pierwszej wizycie jest zapraszany do stałej
                        współpracy.</p>
                </li>
                <li class="pr-chart-ctrl" data-animate="false">
                    <div class="pr-chart" data-percent="75"><i></i></div>
                    <p>Pozytywne oceny -sczegółowe opisy umiejętności i informacja o wymaganiach, daje możliwość
                        dopasowania odpowiedniej osoby. </p>
                </li>
                <li class="pr-chart-ctrl" data-animate="false">
                    <div class="pr-chart" data-percent="100"><i></i></div>
                    <p>Profesjonalizm - Jeśli nasi ooiekunowie podejmują się pracy to ją wykonują</p>
                </li>
            </ul>
            <!-- ################################################################################################ -->
        </section>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper gradient">
        <div class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
                <h6 class="heading font-x2">Nowi opiekunowie</h6>
            </div>
            <ul class="nospace group team">
                <li class="one_third ">
                    @foreach ($latest_guardians as $latest_guardian)
                        <figure><a class="imgover" href="#"><img style="height:400px;width:400px"
                                                                 src="{{ secure_asset('images/') }}/{{ $latest_guardian->src }}"
                                                                 alt=""></a>
                            <strong>{{ $latest_guardian->name }}</strong> </figcaption>
                        </figure>
                </li>
                @endforeach

            </ul>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper coloured">
        <section id="testimonials" class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
                <p class="nospace font-xs">Po zakończonej pracy mozesz wysawic opinie opiekunowi</p>
                <h6 class="heading font-x2">Ostatnie opinie</h6>
            </div>
            <article class="one_half first">
                <figure class="clear"><img src="{{ secure_asset('images/100x100.png') }}" alt="">
                    <figcaption>
                        <h6 class="heading">D. Doe</h6>
                        <em>Adipiscing fusce eu velit</em>
                    </figcaption>
                </figure>
                <blockquote>Pulvinar tortor quis nisi in hac habitasse platea dictumst donec ac tellus fusce venenatis
                    laoreet elit sed est tortor molestie in consectetuer fringilla suscipit ut odio ut ac.
                </blockquote>
            </article>
            <article class="one_half">
                <figure class="clear"><img src="{{ secure_asset('images/100x100.png') }}" alt="">
                    <figcaption>
                        <h6 class="heading">E. Doe</h6>
                        <em>Mauris erat aliquam leo</em>
                    </figcaption>
                </figure>
                <blockquote>Orci vitae dolor scelerisque blandit morbi eu dui sed volutpat etiam leo leo bibendum vel
                    dictum
                    sed sollicitudin a mi pellentesque ligula nulla facilisi sed bibendum ornare.
                </blockquote>
            </article>
            <!-- ################################################################################################ -->
        </section>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row3">
        <section class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
                <h6 class="heading font-x2">Nowe Artykuły</h6>
            </div>
            <ul id="latest" class="nospace group">
                <li class="one_third first">
                    <article><a class="imgover" href="#"><img STYLE="height: 261px; width:348px"
                                                              src="{{ secure_asset('images/Gargamel.gif') }}"
                                                              alt=""></a>
                        <ul class="nospace meta clear">
                            <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
                            <li><i class="fas fa-comments"></i> <a href="#">Comments (3)</a></li>
                        </ul>
                        <div class="excerpt">
                            <time datetime="2045-04-05T08:15+00:00">05 Apr 2045</time>
                            <p class="heading"><a href="#">ODEJŚCIE GARGAMELA</a></p>
                        </div>
                    </article>
                </li>
                <li class="one_third">
                    <article><a class="imgover" href="#"><img src="{{ secure_asset('images/348x261.png') }}"
                                                              alt=""></a>
                        <ul class="nospace meta clear">
                            <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
                            <li><i class="fas fa-comments"></i> <a href="#">Comments (6)</a></li>
                        </ul>
                        <div class="excerpt">
                            <time datetime="2045-04-04T08:15+00:00">04 Apr 2045</time>
                            <p class="heading"><a href="#">Commodo mauris a semper posuere sem arcu cursus felis non
                                    cursus</a></p>
                        </div>
                    </article>
                </li>
                <li class="one_third">
                    <article><a class="imgover" href="#"><img src="{{ secure_asset('images/348x261.png') }}"
                                                              alt=""></a>
                        <ul class="nospace meta clear">
                            <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
                            <li><i class="fas fa-comments"></i> <a href="#">Comments (10)</a></li>
                        </ul>
                        <div class="excerpt">
                            <time datetime="2045-04-03T08:15+00:00">03 Apr 2045</time>
                            <p class="heading"><a href="#">Enim odio in odio suspendisse commodo suscipit nisi nam
                                    tellus</a></p>
                        </div>
                    </article>
                </li>
            </ul>
            <!-- ################################################################################################ -->
        </section>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row2">
        <section id="ctdetails" class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="sectiontitle">

                <h6 class="heading font-x2">Działamy na terenie całej warszawy</h6>
                <img src="{{ secure_asset('images/1.png') }}" alt="">
            </div>
            <figure class="one_half first">
                <ul class="nospace clear">
                    <li class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a
                                call:</strong> +00 (123) 456 7890</span></li>
                    <li class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a
                                mail:</strong> support@domain.com</span></li>
                    <li class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a>
                        <span><strong>Come visit us:</strong> Directions to <a href="#">our location</a></span>
                    </li>
                </ul>
            </figure>
            <article class="one_half">
                <h6 class="heading">Purus nullam arcu integer</h6>
                <p class="nospace btmspace-15">Elementum nisi ac volutpat vestibulum enim mi tincidunt eros sed justo
                    magna
                    odio sed lacus ut non ante sit amet est luctus dictum ut dolor ac.</p>
                <form action="#" method="post">
                    <fieldset>
                        <legend>Newsletter:</legend>
                        <input type="text" value="" placeholder="Name">
                        <input type="text" value="" placeholder="Email">
                        <button type="submit" value="submit">Submit</button>
                    </fieldset>
                </form>
            </article>
            <!-- ################################################################################################ -->
        </section>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="bgded overlay row4" style="background-image:url("{{ secure_asset('images/backgrounds/slider.jpeg') }}">
@endsection
