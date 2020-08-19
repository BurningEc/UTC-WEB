@section('scripts')
<script type="text/javascript">

$(document).ready(function(){

});

function getCompanies(){
    let search = window.location.search;
    let page = search.split("=");
    let url = "{{route('companies')}}";

    axios.get(url).then(function (response) {
        $('.table-company').empty();
                   $('.table-company').html(response.data);
                })
                .catch(function (error) {
                    console.log(error);
                });
}

$(document).on("click", ".btn-delete-company", function(e) {
    event.preventDefault();
        let text = $(this).data('original-title');
        let id = $(this).data('id-company');
        let url = "{{route('deactivate-company')}}";
           Swal.fire({
               title: '¿Está seguro para '+text+'? ',
               text: "Tu podrás revertir está acción",
               icon: 'warning',
               showCancelButton: true,
               confirmButtonColor: '#3085d6',
               cancelButtonColor: '#d33',
               confirmButtonText: 'Aceptar',
               cancelButtonText:'Cancelar'
               }).then((result) => {
               if (result.value) {
                axios.put(url,{
                    'id': id
                }).then(function (response) {
                   getCompanies();

                    Swal.fire(
                   'Desactivado!',
                   'El tarea se ha cumplido exitosamente.',
                   'success'
                   );

                }).catch(function (error) {
                    console.log(error);
                });


               }
           });
});


    </script>
@endsection
