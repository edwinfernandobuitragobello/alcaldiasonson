<script src="{{ asset('js/bootstrap-filestyle.min.js') }}"> </script>
        <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

<script type="text/javascript">
    $(document).ready(function (){
        $('.soloNumero').keyup(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '');
        });
    });
</script>