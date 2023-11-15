@extends('layout')

@section('content')
    <div class="s011">
        <form>
            <fieldset>
                <legend>Wyszukiwarka opiekunów</legend>
            </fieldset>
            <div class="inner-form">

                <div class="main-form" id="main-form">
                    <div class="row">
                        <div class="input-wrap">

                        <div class="input-field">
                            <label>Wyszukaj po nazwie</label>
                            <input type="text" placeholder="imię,nazwisko , tutuł"/>
                        </div>
                    </div>
                </div>
                <div class="row second">
                    <div class="input-wrap">
                        <div class="icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"></path>
                            </svg>
                        </div>
                        <div class="input-field">
                            <label>Data rozpoczęcia pracy</label>
                            <input class="datepicker" type="text" placeholder="mm/dd/yy"/>
                        </div>
                    </div>
                    <div class="input-wrap">
                        <div class="icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"></path>
                            </svg>
                        </div>
                        <div class="input-field">
                            <label>Data zakonczenia pracy</label>
                            <input class="datepicker" type="text" placeholder="mm/dd/yy"/>
                        </div>
                    </div>
                    <div class="input-wrap">
                        <div class="icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-9-2V7H4v3H1v2h3v3h2v-3h3v-2H6zm9 4c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                            </svg>
                        </div>
                        <div class="input-field">
                            <label>Dzielnica</label>
                            <div class="input-select">
                                <select data-trigger="" name="choices-single-defaul">
                                    <option>1 adult</option>
                                    <option>2 adults</option>
                                    <option>3 adults</option>
                                    <option>4 adults</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="row third">
                        <div class="input-checkbox-group">
                            <div class="input-checkbox">
                                <input type="checkbox" id="inlineCheckbox1" value="option1">
                                <label for="inlineCheckbox1">Opieka Nad Zwierzętami</label>

                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="inlineCheckbox2" value="option2">
                                <label for="inlineCheckbox2">Opieka Nad Większą Ilością Osób</label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="inlineCheckbox3" value="option3">
                                <label for="inlineCheckbox3">Wsparcie W Nauce
                                </label>
                            </div>

                        </div>

                    </div>
                    <div class="row fourth">
                        <div class="input-checkbox-group">
                            <div class="input-checkbox">
                                <input type="checkbox" id="inlineCheckbox4" value="option4">
                                <label for="inlineCheckbox4">Organizowanie Zabawy</label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="inlineCheckbox5" value="option5">
                                <label for="inlineCheckbox5">Cena Za Godzinę Stała Przez Całą Dobę
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="inlineCheckbox6" value="option6">
                                <label for="inlineCheckbox6">Kucharz</label>
                            </div>


                        </div>

                    </div>
                    <div class="row third">
                        <div class="input-checkbox-group">
                            <div class="input-checkbox">
                                <input type="checkbox" id="inlineCheckbox7" value="option7">
                                <label for="inlineCheckbox7">Wychowawca kolonijny
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="inlineCheckbox8" value="option8">
                                <label for="inlineCheckbox8">Wieloletnie Doświadczeni
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="inlineCheckbox9" value="option9">
                                <label for="inlineCheckbox9">Opieka Nad Niepełnosprawnymi

                                </label>
                            </div>

                        </div>
                        <div class="row third">
                            <div class="input-checkbox-group">
                                <div class="input-checkbox">
                                    <input type="checkbox" id="inlineCheckbox10" value="option10">
                                    <label for="inlineCheckbox10">Opieka W Nocy

                                    </label>
                                </div>
                                <div class="input-checkbox">
                                    <input type="checkbox" id="inlineCheckbox11" value="option11">
                                    <label for="inlineCheckbox11">Wsparcie psychologiczne
                                    </label>
                                </div>
                                <div class="input-checkbox">
                                    <input type="checkbox" id="inlineCheckbox12" value="option12">
                                    <label for="inlineCheckbox12">Opiekunka

                                    </label>
                                </div>

                            </div>
                            <div class="row third">
                                <div class="input-checkbox-group">
                                    <div class="input-checkbox">
                                        <input type="checkbox" id="inlineCheckbox13" value="option13">
                                        <label for="inlineCheckbox13">Trudna Młodzież
                                        </label>
                                    </div>
                                    <div class="input-checkbox">
                                        <input type="checkbox" id="inlineCheckbox14" value="option14">
                                        <label for="inlineCheckbox14">Praca w języku angielskim
                                        </label>
                                    </div>
                                    <div class="input-checkbox">
                                        <input type="checkbox" id="inlineCheckbox15" value="option15">
                                        <label for="inlineCheckbox15">Opiekun

                                        </label>
                                    </div>

                                </div>
                                <div class="row third">
                                    <button class="btn-search" type="button">Search</button>
                                </div>
                            </div>
                        </div>
                </div></div> </div></form>
</div>


@endsection
