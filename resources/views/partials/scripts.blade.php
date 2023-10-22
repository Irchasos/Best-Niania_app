@yield('scripts')
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.backtotop.js')}}"></script>
<script src="{{asset('js/jquery.mobilemenu.js')}}"></script>
<script src="{{asset('js/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('Search/js/extention/choices.js')}}"></script>
<script>
    const choices = new Choices('[data-trigger]',
        {
            searchEnabled: false,
            itemSelectText: '',
        });

</script>
<script src="{{asset('Search/js/extention/flatpickr.js')}}"></script>
<script>
    flatpickr(".datepicker",
        {
            dateFormat: "m/d/y"
        });
    var btnTypes = document.querySelectorAll('.travel-type-wrap .item')
    var mainForm = document.getElementById('main-form')
    for (let i = 0; i < btnTypes.length; i++) {
        btnTypes[i].addEventListener('click', function () {
            for (let i = 0; i < btnTypes.length; i++) {
                btnTypes[i].classList.remove('active')
            }
            btnTypes[i].classList.add('active')
            let className = 'type' + i
            mainForm.className = `${className} main-form`
        })
    }

</script>
</body>
</html>
