@extends('layouts.app')
@section('content')
    <div class="container">
        @include('include.menu')
        <div class="card bg-dark">
            <div class="row">
                <div class="col-md-6 card-title">
                    <h3 style="font-size: 20pt;" class="mt-3 text-center text-white"><i class="fa fa-map-marked fa-lg text-danger"></i> LISTADO CLIENTES</h3>
                </div>
                <div class="col-md-3">
                    <a href="{{route('clientes.create')}}" class="mt-3 btn btn-info float-right"><i class="fas fa-user"></i> Nuevo Cliente</a>
                </div>
                <div class="col-md-3">
                    <a href="{{url('/home')}}" class="mt-3 mr-3 btn btn-info float-right"><i class="fas fa-arrow-circle-left"></i> Regresar</a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="table-responsive content-loader">
                    <table class="table table-hover table-sm table-striped" id="clientesTable">
                </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="clientesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('js/cliente/clientes.js')}}"></script>
@endsection