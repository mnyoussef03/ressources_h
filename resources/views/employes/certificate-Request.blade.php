@extends('adminlte::page')

@section('title', 'Employes Management System | ' . $employe->firstName . ' ' . $employe->lastName)

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card my-5">
                    <div class="card-header bg-white text-center p-3">
                        <h3 class="text-dark">
                            Certificate of employment
                        </h3>
                    </div>
                    <div class="card-body">
                        <p class="lead">
                            This is to certify that <b>{{ $employe->firstName . '  ' . $employe->lastName }}</b> is
                            presently
                            employed with me in the following :
                        </p>
                        <p class="lead">
                            <b>{{ $employe->departement }}</b> departement.
                        </p>
                        <p class="lead">
                            Their employment began on <b>{{ $employe->hire_date }}</b>
                        </p>
                        <p class="lead">
                            This Certification is being issued upon the request of
                            <b>{{ $employe->firstName . '  ' . $employe->lastName }}</b> for whatever legal purpose it may
                            serve.
                        </p>
                        <p class="lead">
                            Issued on <b>{{ \Carbon\Carbon::today()->toDateString() }}</b> at
                            <b>{{ \Carbon\Carbon::now()->toTimeString() }}</b>
                        </p>
                        <p class="m-5">
                            ___________
                            ___________
                        </p>
                        <a href="#" id="printPageButton" class="btn btn-sm btn-primary mb-3"
                            onclick="document.getElementById('printPageButton').style.display='none'
                            setTimeout(function(){
                                document.getElementById('printPageButton').style.display='inline-block'

                            },2000);
                        window.print()"
                            class="btn btn-md btn-primary mr-2 mb-2">
                            <i class="fas fa-print"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
