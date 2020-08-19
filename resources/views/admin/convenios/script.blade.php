@section('scripts')
    <script type="text/javascript">
        function getConvenios() {
            let url = "{{route('get-convenios')}}";
            axios.get(url).then(function (response) {
                $('.table-convenios').empty();
                $('.table-convenios').html(response.data);
            }).catch(function (response) {

            });
        }

        $(document).on("click", ".btn-delete-convenio", function (e) {
            event.preventDefault();
            let text = $(this).data('original-title');
            let id = $(this).data('id-convenio');
            let url = "{{route('delete-convenios')}}";
            Swal.fire({
                title: '¿Está seguro para ' + text + '? ',
                text: "Tu podrás revertir está acción",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Aceptar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    axios.post(url, {
                        'id': id
                    }).then(function (response) {
                        Swal.fire(
                            'Desactivado!',
                            'El tarea se ha cumplido exitosamente.',
                            'success'
                        );
                        getConvenios();

                    }).catch(function (error) {
                        console.log(error);
                    });


                }
            });
        });


    </script>
@endsection
