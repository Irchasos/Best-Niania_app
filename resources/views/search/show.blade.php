<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<table class="table" >Wersja 1.0
    <thead>
    <tr>
        <th>Status</th>
        <th>Dotyczy</th>
        <th>Opis</th>
    </tr>
    </thead>
    <tbody>
{{dd($guardian)}}
    <tr class="table-primary">
        <td>Primary</td>
        <td>Załozenie projektu, repozytorium,bazy</td>
        <td>zrobione</td>
    </tr>
    <tr class="table-success">
        <td>Ukończono</td>
        <td>Wyciąganie dany z bazy</td>
        <td>Stworzono relacje miedzy opiekunami i dzilenicami</td>
    </tr>
    <tr class="table-danger">
        <td>Brak umiejętności do ukończenia</td>
        <td></td>
        <td></td>
    </tr>
    <tr class="table-info">
        <td>Info</td>
        <td>Layout,Auth</td>
        <td>Ogarnąc stopke, wyrzucic nie potrzebne elementy z layoutu,dodac logowanie i rejestracje</td>
    </tr>
    <tr class="table-warning">
        <td>ukończono z błędem</td>
        <td>Stworzenie layoutu</td>
        <td>Front sie rozjezdza, checkboxy w wyszukiwarce i zdjecia na stronie glownej</td>
    </tr>

    </tbody>
</table>
<br>
<br>
<br>
<table class="table">Wersja 1.1
    <thead>
    <tr>
        <th>Status</th>
        <th>Dotyczy</th>
        <th>Opis</th>
    </tr>
    </thead>
    <tbody>

    <tr class="table-primary">
        <td>Primary</td>
        <td>Widok listy opiekunek</td>
        <td>Dołączono widok/css brak problemow</td>
    </tr>
    <tr class="table-success">
        <td>Zakończono</td>
        <td>Front sie rozjezdza, checkboxy w wyszukiwarce i zdjecia na stronie glownej</td>
        <td>Poprawiono layout</td>
    </tr>
    <tr class="table-warning">
        <td>do zrobienia</td>
        <td>Layout,Auth</td>
        <td>Ogarnąc stopke, wyrzucic nie potrzebne elementy z layoutu,dodac logowanie i rejestracje, ostylowac
            checkboxy
        </td>
    </tr>
    <tr class="table-success">
        <td>ZAkończono</td>
        <td>Baza danych</td>
        <td>Dodano pivot table dla dzielnic i opiekunek poprawne seedowanie</td>
    </tr>
    <tr class="table-warning">
        <td>Warning</td>
        <td>Baza danych</td>
        <td>seedowanie dzielnicami</td>
    </tr>

    </tbody>
</table>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
