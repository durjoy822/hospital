<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
<script src="{{asset('assets/home/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/home/js/mmenu.polyfills.js')}}"></script>
<script src="{{asset('assets/home/js/jquery.modal.min.js')}}"></script>
<script src="{{asset('assets/home/js/mmenu.js')}}"></script>
<script src="{{asset('assets/home/js/appear.js')}}"></script>
<script src="{{asset('assets/home/js/owl.js')}}"></script>
<script src="{{asset('assets/home/js/wow.js')}}"></script>
<script src="{{asset('assets/home/js/script.js')}}"></script>
<!-- Color Setting -->
<script src="{{asset('assets/home/js/color-settings.js')}}"></script>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 2000);
</script>
