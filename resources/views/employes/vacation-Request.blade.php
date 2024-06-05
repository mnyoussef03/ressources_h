@extends('adminlte::page')
@section('title')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-8 mx-auto">
                <div class="card p-3 my-5">
                    <div class="card-header">
                        <h3>Vaction Request</h3>
                    </div>
                    <div class="card-body">
                        <p class="lead">
                            <b>
                                {{ $employe->firstName . '  ' . $employe->lastName }}
                            </b>
                            is presently employed with me in the following :
                        </p>
                        <p class="lead">
                            <b>
                                {{ $employe->departement }}
                            </b> departement.
                        </p>
                        <p class="lead">
                            he is requessting a vacation starting from
                            <b>
                                __________________

                            </b>
                        </p>
                        <p class="lead">
                            and ends on
                            <b>
                                __________________
                            </b>
                        </p>
                        <p class="m-5">
                            ______________
                            ______________
                        </p>
                        <div class="my-4">
                            <a href="" class="btn btn-sm btn-primary"
                                onclick="
                                document.getElementById('printLink').style.display='none'
                                setTimeout(function(){
                                    document.getElementById('printLink').style.display='inline-block'

                                },2000);
                            window.print()"
                                id="printLink">

                                <i class="fas fa-print">

                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
