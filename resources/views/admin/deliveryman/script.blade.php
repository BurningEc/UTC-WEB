@section('scripts')
<script type="text/javascript">

$(document).ready(function(){

});

function getUsers(){
    let search = window.location.search;
    let page = search.split("=");
    let url = "users?page="+page[1];

    axios.get(url).then(function (response) {
        $('.table-users').empty();
                   $('.table-users').html(response.data);
                })
                .catch(function (error) {
                    console.log(error);
                });
}

$(document).on("click", ".btn-delete-user", function(e) {
    event.preventDefault();
        let text = $(this).data('original-title');
        let id = $(this).data('id-user');
        let url = "{{route('deactivate-user')}}";
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
                   getUsers();
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
