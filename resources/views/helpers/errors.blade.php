<script>
    $(document).ready(function() {
        @if ($errors->any() ?? false)
            @foreach ($errors->all() as $error)
                toastr.error('{{ $error }}');
            @endforeach
        @endif

        @if(Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
        @endif

        @if(Session::has('status'))
            toastr.success('{{ Session::get('status') }}');
        @endif

        @if(Session::has('error'))
            toastr.error('{{ Session::get('error') }}');
        @endif
    });
</script>
