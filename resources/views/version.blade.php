@extends('layout')

@section('content')
<style>
    .version-category {
    margin-bottom: 2rem;
}

.version-category h2 {
    color: #343a40;
}

.table {
    margin-bottom: 0;
}

.thead-dark th {
    background-color: #343a40;
    color: #fff;
}

</style>
<div class="container">
    <h1 class="my-4">Status Wersji</h1>

    <!-- Kategoria: Strona Główna -->
    <section class="version-category">
        <h2>Strona Główna</h2>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Element</th>
                    <th>Opis</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ogarnąć footer</td>
                    <td>Zaktualizować informacje w stopce strony</td>
                    <td>W trakcie</td>
                </tr>
                <tr>
                    <td>Podpiąć najnowszego użytkownika</td>
                    <td>Wyświetlić najnowszego użytkownika na stronie głównej</td>
                    <td>Planowane</td>
                </tr>
                <tr>
                    <td>Uzupełnić opinie ostatnie</td>
                    <td>Zebrać i wyświetlić najnowsze opinie użytkowników</td>
                    <td>Planowane</td>
                </tr>
                <tr>
                    <td>Ostatnie artykuły</td>
                    <td>Wyświetlić najnowsze artykuły na stronie głównej</td>
                    <td>W trakcie</td>
                </tr>
                <tr>
                    <td>Ostatnie komentarze</td>
                    <td>Wyświetlić ostatnie komentarze użytkowników</td>
                    <td>Planowane</td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- Kategoria: Auth -->
    <section class="version-category mt-5">
        <h2>Auth</h2>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Element</th>
                    <th>Opis</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Rejestracja użytkownika</td>
                    <td>Implementacja formularza rejestracji</td>
                    <td>Ukończone</td>
                </tr>
                <tr>
                    <td>Logowanie użytkownika</td>
                    <td>Implementacja formularza logowania</td>
                    <td>W trakcie</td>
                </tr>
                <tr>
                    <td>Resetowanie hasła</td>
                    <td>Implementacja funkcji resetowania hasła</td>
                    <td>Planowane</td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- Kategoria: Panel Użytkownika -->
    <section class="version-category mt-5">
        <h2>Panel Użytkownika</h2>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Element</th>
                    <th>Opis</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Profil użytkownika</td>
                    <td>Wyświetlanie i edycja danych użytkownika</td>
                    <td>Planowane</td>
                </tr>
                <tr>
                    <td>Lista opiekunek</td>
                    <td>Wyświetlanie dostępnych opiekunek</td>
                    <td>W trakcie</td>
                </tr>
                <tr>
                    <td>Historia usług</td>
                    <td>Wyświetlanie historii zleceń użytkownika</td>
                    <td>Planowane</td>
                </tr>
            </tbody>
        </table>
    </section>

</div>
@endsection
