@if(session('noty_color'))

    <script>
        new Noty({
            type: '{{session('noty_color')}}',
            layout: 'topRight',
            text: "{{ session('noty_message') }}",
            timeout: 3000,
            killer: true
        }).show();
    </script>

@endif

