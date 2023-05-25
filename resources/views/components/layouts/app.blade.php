<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Panel Admin</title>

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    @livewireStyles
</head>

<body class="antialiased">

    {{ $slot }}

    @livewireScripts

    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            // Escucha los clics en los enlaces del sidebar
            $('.sidebar-link').click(function(e) {
                e.preventDefault();

                // Obtén la URL del enlace clicado
                var url = $(this).attr('href');

                // Realiza la solicitud AJAX al servidor
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        // Actualiza el contenido del content con la respuesta del servidor
                        $('#content').html(response);
                    },
                    error: function(xhr) {
                        // Maneja el error si la solicitud falla
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
        function mostrarAlertaConfirmacion() {

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        })
    </script>

</body>

</html>
