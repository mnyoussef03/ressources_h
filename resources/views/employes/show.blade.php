@extends('adminlte::page')

@section('title')

@section('content_header')
    <h1>Show employe</h1>

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-8 mx-auto ">
                <div class="card  my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase font-weight-bold font-weigh-bold">
                            <h3>{{ $employe->firstName . '    ' . $employe->lastName }}</h3>
                        </div>
                        <div class="mt-2 text-center text-uppercase font-weight-bold font-weigh-bold">
                            <a href="{{route('vacation.request',$employe->registration_number)}}" class="btn btn-outline-dark">
                                Vacation Request
                            </a>
                            <a href="{{route('certificate.request',$employe->registration_number)}}" class="btn btn-outline-danger">
                                Work Certificate
                            </a>
                        </div>

                    </div>
                    <div class="card-body">

                        <div class="form-group mb-3">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control rounded-0" name="firstName" value="{{$employe->firstName }}"
                                placeholder="Enter the firstName " disabled >




                        </div>
                        <div class="form-group mb-3">
                            <label for="LastName">Last Name</label>
                            <input type="text" class="form-control rounded-0" name="lastName" value="{{ $employe->lastName }}"
                                placeholder="Enter the lastName" disabled >
                        </div>
                        <div class="form-group mb-3">
                            <label for="registration_number">Registration number</label>
                            <input type="text" class="form-control  rounded-0" name="registration_number"
                                value="{{ $employe->registration_number }}" disabled  >


                        </div>
                        <div class="form-group mb-3">
                            <label for="departement">Departement</label>
                            <input type="text" class="form-control rounded-0" name="departement" value="{{ $employe->departement  }}"
                                placeholder="Enter the departement " disabled >


                        </div>
                        <div class="form-group mb-3">
                            <label for="hire_date">Hire Date</label>
                            <input type="date" class="form-control rounded-0" name="hire_date" value="{{ $employe->hire_date  }}"
                                placeholder="Enter the Hire date" disabled >


                        </div>
                        <div class="form-group mb-3">
                            <label for="phone">phone</label>
                            <input type="tel" class="form-control rounded-0" name="phone" value="{{ $employe->phone  }}"
                                placeholder="Enter the phone" disabled >


                        </div>
                        <div class="form-group mb-3">
                            <label for="adress">adress</label>
                            <input type="text" class="form-control rounded-0" name="adress" value="{{ $employe->adress  }}"
                                placeholder="Enter the adress" disabled >

                        </div>
                        <div class="form-group mb-3">
                            <label for="city">city</label>
                            <input type="text" class="form-control rounded-0" name="city" value="{{$employe->city }}"
                                placeholder="Enter the city" disabled >


                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
