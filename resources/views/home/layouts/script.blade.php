<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/home/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/home/js/mmenu.polyfills.js') }}"></script>
<script src="{{ asset('assets/home/js/jquery.modal.min.js') }}"></script>
<script src="{{ asset('assets/home/js/mmenu.js') }}"></script>
<script src="{{ asset('assets/home/js/appear.js') }}"></script>
<script src="{{ asset('assets/home/js/owl.js') }}"></script>
<script src="{{ asset('assets/home/js/wow.js') }}"></script>
<script src="{{ asset('assets/home/js/script.js') }}"></script>
<!-- Color Setting -->
<script src="{{ asset('assets/home/js/color-settings.js') }}"></script>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000);

    function decrement(event) {
        event.preventDefault();
        let inputField = document.getElementById("inputField");
        if (parseInt(inputField.value) > 1) {
            inputField.value = parseInt(inputField.value) - 1;
        }
    }

    function increment(event) {
        event.preventDefault();
        let inputField = document.getElementById("inputField");
        inputField.value = parseInt(inputField.value) + 1;
    }

    function submitForm() {
        var form = document.getElementById("myForm");
        form.submit();
    }
    // Store original values in variables
    var name = $('input[name="name"]').val();
    var phone_number = $('input[name="phone_number"]').val();
    var street = $('input[name="street"]').val();
    var city = $('input[name="city"]').val();
    var state = $('input[name="state"]').val();
    var postal_code = $('input[name="postal_code"]').val();
    var is_default = $('select[name="is_default"]').val();

    $('#new-shipping').click(function() {
        $('.toggle-input').val('');
        $('select[name="is_default"]').val('1');
    });

    $('#default-shipping').click(function() {
        $('input[name="name"]').val(name);
        $('input[name="phone_number"]').val(phone_number);
        $('input[name="street"]').val(street);
        $('input[name="city"]').val(city);
        $('input[name="state"]').val(state);
        $('input[name="postal_code"]').val(postal_code);
        $('select[name="is_default"]').val(is_default);
    });
</script>

