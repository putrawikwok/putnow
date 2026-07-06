@if(session('success'))
    <script type="module">
        document.addEventListener('DOMContentLoaded', () => {
            window.Toast.fire({
                icon: 'success',
                title: '{{ session('success') }}'
            });
        });
    </script>
@endif

@if(session('error'))
    <script type="module">
        document.addEventListener('DOMContentLoaded', () => {
            window.Toast.fire({
                icon: 'error',
                title: '{{ session('error') }}'
            });
        });
    </script>
@endif
