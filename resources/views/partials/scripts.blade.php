@yield('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@include('sweetalert::alert')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Sprawdź, czy komunikat sukcesu istnieje
        var successMessage = '{{ session('success') }}';

        if (successMessage) {
            // Wyświetl SweetAlert z komunikatem sukcesu
            Swal.fire({
                title: SuccessMessage,
                text: '',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        }
    });
</script>
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="{{ secure_asset('js/jquery.min.js') }}"></script>
<script src="{{ secure_asset('js/jquery.backtotop.js') }}"></script>
<script src="{{ secure_asset('js/jquery.mobilemenu.js') }}"></script>
<script src="{{ secure_asset('js/jquery.easypiechart.min.js') }}"></script>
<script src="{{ secure_asset('Search/js/extention/choices.js') }}"></script>
<script>
    const choices = new Choices('[data-trigger]', {
        searchEnabled: false,
        itemSelectText: '',
    });
</script>
<script src="{{ secure_asset('Search/js/extention/flatpickr.js') }}"></script>
<script>
    flatpickr(".datepicker", {
        dateFormat: "m/d/y"
    });
    var btnTypes = document.querySelectorAll('.travel-type-wrap .item')
    var mainForm = document.getElementById('main-form')
    for (let i = 0; i < btnTypes.length; i++) {
        btnTypes[i].addEventListener('click', function() {
            for (let i = 0; i < btnTypes.length; i++) {
                btnTypes[i].classList.remove('active')
            }
            btnTypes[i].classList.add('active')
            let className = 'type' + i
            mainForm.className = `${className} main-form`
        })
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>
