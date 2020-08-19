@section('scripts')
    <script src="{{asset('js/sliders.js')}}" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function () {

        });

        function getSliders() {
            let search = window.location.search;
            let page = search.split("=");
            let url = "get-sliders?page=" + page[1];

            axios.get(url).then(function (response) {
                $('.table-sliders').empty();
                $('.table-sliders').html(response.data);
            })
                .catch(function (error) {
                    console.log(error);
                });
        }

        $(document).on("click", ".btn-change-slider", function (e) {
            event.preventDefault();

            let id = $(this).data('id-slider');
            let url = "{{route('change-status-web')}}";
            Swal.fire({
                title: '¿Desea cambier el estado del registro',
                text: "Tu podrás revertir está acción",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Aceptar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    axios.put(url, {
                        'id': id
                    }).then(function (response) {
                        getSliders();
                        Swal.fire(
                            'Cambiado!',
                            'El tarea se ha cumplido exitosamente.',
                            'success'
                        );
                    }).catch(function (error) {
                        console.log(error);
                    });


                }
            });
        });


        $(document).on("click", ".btn-delete-slider", function (e) {
            event.preventDefault();

            let id = $(this).data('id-slider');

            let url = "{{route('delete-web')}}";
            Swal.fire({
                title: '¿Desea eliminar el registro',
                text: "Tu no podrás revertir está acción",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Aceptar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {

                    axios.put(url, {
                        'id': id
                    }).then(function (response) {
                        getSliders();
                        Swal.fire(
                            'Eliminado!',
                            'El tarea se ha cumplido exitosamente.',
                            'success'
                        );
                    }).catch(function (error) {
                        console.log(error);
                    });


                }
            });
        });

        function readFile() {

            if (this.files && this.files[0]) {

                var FR = new FileReader();

                FR.addEventListener("load", function (e) {
                    var_img_category = e.target.result;
                    document.getElementById("show_img_slider").src = e.target.result;
                    //document.getElementById("b64").innerHTML = e.target.result;

                });

                FR.readAsDataURL(this.files[0]);

            }

        }

        document.getElementById("url_image").addEventListener("change", readFile);




    </script>
@endsection
