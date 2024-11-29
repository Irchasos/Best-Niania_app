@php
    $currentLocale = App::getLocale();
@endphp

<div class="btn-group" role="group" aria-label="Language Selector">
    <a href="{{ url('/set-locale/en') }}" class="btn btn-primary language-button {{ $currentLocale == 'en' ? 'active' : '' }}" id="english-button" {{ $currentLocale == 'en' ? 'style=pointer-events:none;' : '' }}>
        <img src="https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg" alt="English" style="width: 20px; height: 20px;">
    </a>
    <a href="{{ url('/set-locale/pl') }}" class="btn btn-secondary language-button {{ $currentLocale == 'pl' ? 'active' : '' }}" id="polish-button" {{ $currentLocale == 'pl' ? 'style=pointer-events:none;' : '' }}>
        <img src="https://upload.wikimedia.org/wikipedia/en/1/12/Flag_of_Poland.svg" alt="Polski" style="width: 20px; height: 20px;">
    </a>
</div>
