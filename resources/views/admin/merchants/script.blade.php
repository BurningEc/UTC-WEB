@section('scripts')
    <script type="text/javascript">

        let var_img_category = "#";
        let var_img_product = "#";
        $(document).ready(function () {

        });


        function readFile() {

            if (this.files && this.files[0]) {

                var FR = new FileReader();

                FR.addEventListener("load", function (e) {
                    var_img_category = e.target.result;
                    document.getElementById("show_img_category").src = e.target.result;
                    //document.getElementById("b64").innerHTML = e.target.result;

                });

                FR.readAsDataURL(this.files[0]);

            }

        }

        document.getElementById("img_category").addEventListener("change", readFile);

        function readFileProduct() {

            if (this.files && this.files[0]) {

                var FR = new FileReader();

                FR.addEventListener("load", function (e) {
                    var_img_product = e.target.result;

                    //  console.log('varibles  ' + img_product);
                    document.getElementById("show_img_product").src = e.target.result;
                    //document.getElementById("b64").innerHTML = e.target.result;
                });

                FR.readAsDataURL(this.files[0]);

            }

        }

        //

        function getCompanies() {
            let url = "{{route('get-table-companies',$merchant->id)}}";
            axios.get(url).then(function (response) {
                $('.table-list-companies').empty();
                $('.table-list-companies').html(response.data);
            })
                .catch(function (error) {
                    console.log(error);
                });
        }

        function getFormProduct(id) {
            let url = "../get-form-product/" + id;
            axios.get(url).then(function (response) {
                $('.form-product').empty();
                $('.form-product').html(response.data);
                document.getElementById("img_product").addEventListener("change", readFileProduct);
            })
                .catch(function (error) {
                    console.log(error);
                });
        }

        function getCategories(id) {
            let url = "../categories/" + id;
            axios.get(url).then(function (response) {
                $('.table-list-catgories').empty();
                $('.table-list-catgories').html(response.data);
            })
                .catch(function (error) {
                    console.log(error);
                });
        }

        function getProducts(id) {
            let url = "../products/" + id;
            axios.get(url).then(function (response) {
                $('.table-list-products').empty();
                $('.table-list-products').html(response.data);
            })
                .catch(function (error) {
                    console.log(error);
                });
        }

        $(document).on("click", ".btn-save-category", function (e) {
            let name = $('#name_cat').val();
            let description = $('#description_cat').val();
            let id = $('#id_user_category').val();
            let url = "../store-category";
            axios.post(url, {
                'name': name,
                'description': description,
                'id': id,
                'url_image': var_img_category
            }).then(function (response) {
                getCategories(id);
                getFormProduct(id);
                Swal.fire(
                    '¡Agregado!',
                    'El tarea se ha cumplido exitosamente.',
                    'success'
                );
            }).catch(function (error) {
                console.log(error);
            });

        });


        $(document).on("click", ".btn-company-edit", function (e) {

            let id = $(this).data('id-company');

            let name = $(this).data('name-company');
            let url = "../edit-company-merchant/" + id;
            axios.get(url).then(function (response) {
                $('.form-company').empty();
                $('.form-company').html(response.data);
            }).catch(function (error) {
                console.log(error);
            });
            $('#id_user_category').val(id);
            //$('#id_company_product').val(id);

            $('#title-category').text('Categorías para ' + name)
            getCategories(id);
            getFormProduct(id);
            getProducts(id);


        });

        $(document).on("click", ".btn-delete-company", function (e) {
            event.preventDefault();
            let text = $(this).data('original-title');
            let id = $(this).data('id-company');
            let url = "{{route('deactivate-company-merchant')}}";
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
                    axios.put(url, {
                        'id': id
                    }).then(function (response) {
                        getCompanies();
                        //getFormProduct(id);
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


        $(document).on("click", ".btn-delete-category", function (e) {
            event.preventDefault();
            let text = $(this).data('original-title');
            let id = $(this).data('id-category');
            let id_company = $(this).data('id-company');
            let url = "{{route('deactivate-category')}}";
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
                    axios.put(url, {
                        'id': id
                    }).then(function (response) {
                        getCategories(id_company);
                        getFormProduct(id_company);
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


        $(document).on("click", ".btn-save-product", function (e) {
            let id = $('#id_company_product').val();
            let code = $('#code_product').val();
            let name = $('#name_product').val();
            let id_category = $('#id_category_product').val();
            let description = $('#description_product').val();
            let url_img = $('#img_product').val();
            let price = $('#price_product').val();
            let stock = $('#stock_product').val();

            let url = "../store-product";

            console.log(id + ', ' + code + ', ' + name + ', ' + id_category + ' ' + url_img);
            axios.post(url, {
                'id': id,
                'code': code,
                'name': name,
                'id_category': id_category,
                'description': description,
                'url_image': var_img_product,
                'price': price,
                'stock': stock
            }).then(function (response) {
                getProducts(id);
                getFormProduct(id);

                Swal.fire(
                    '¡Agregado!',
                    'El tarea se ha cumplido exitosamente.',
                    'success'
                );
            }).catch(function (error) {
                console.log(error);
            });

        });


        $(document).on("click", ".btn-delete-product", function (e) {
            event.preventDefault();
            let text = $(this).data('original-title');
            let id = $(this).data('id-product');
            let id_company = $(this).data('id-company');
            let url = "{{route('deactivate-product')}}";
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
                    axios.put(url, {
                        'id': id
                    }).then(function (response) {
                        getProducts(id_company);
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
