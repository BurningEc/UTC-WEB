@extends('admin.base.index')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="ibox">
            <div class="ibox-head bg-info">
                <div class="ibox-title text-white">Modificar Perfil Repartidor</div>
                <div class="ibox-tools">
                    <a class="text-white" href="{{route('get-deliverymen')}}">
                    <i class="fa fa-arrow-left"></i>
                        Atras</a>
                </div>
            </div>
            <div class="ibox-body">
                {!! Form::model($deliveryman, ['url' => ['update-deliveryman', $deliveryman->id], 'method' => 'PUT','files' => true]) !!}
                @include('admin.deliveryman.partials.formeditdelivery')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">
    function readFile() {
        if (this.files && this.files[0]) {
            var FR = new FileReader();
            FR.addEventListener("load", function (e) {
                var_img_category = e.target.result;
                document.getElementById("show_img_vehicle").src = e.target.result;
                //document.getElementById("b64").innerHTML = e.target.result;

            });
            FR.readAsDataURL(this.files[0]);
        }
    }
    document.getElementById("img_vehicle").addEventListener("change", readFile);
    function readFileUser() {
        if (this.files && this.files[0]) {
            var FR = new FileReader();
            FR.addEventListener("load", function (e) {
                var_img_category = e.target.result;
                document.getElementById("show_img_user").src = e.target.result;
                //document.getElementById("b64").innerHTML = e.target.result;

            });
            FR.readAsDataURL(this.files[0]);
        }
    }
    document.getElementById("img_user").addEventListener("change", readFileUser);
</script>

@endsection

