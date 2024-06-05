@extends('adminlte::page')

@section('title')

@section('content_header')
    <h1>Add new employe</h1>

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-8 mx-auto ">
                <div class="card  my-5">
                    <div class="card-header">
                        <div class="text-center text-uppercase font-weight-bold font-weigh-bold">
                            <h4>Add new employe</h4>
                        </div>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('employes.store') }}" method="POST" class="mt-3">

                            @csrf
                            <div class="form-group mb-3">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" name="firstName" value="{{ old('firstName') }}"
                                    placeholder="Enter the firstName ">
                                @error('firstName')
                                    <span class="text-danger"><b>{{ $message }}</b></span>
                                @enderror



                            </div>
                            <div class="form-group mb-3">
                                <label for="LastName">Last Name</label>
                                <input type="text" class="form-control" name="lastName" value="{{ old('lastName') }}"
                                    placeholder="Enter the lastName">
                                @error('LastName')
                                    <span class="text-danger"><b>{{ $message }}</b></span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="registration_number">Registration number</label>
                                <input type="text" class="form-control" name="registration_number"
                                    value="{{ old('registration_number') }}" placeholder="Enter the Registration number">
                                @error('registration_number')
                                    <span class="text-danger"><b>{{ $message }}</b></span>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="departement">Departement</label>
                                <input type="text" class="form-control" name="departement"
                                    value="{{ old('departement') }}" placeholder="Enter the departement ">
                                @error('departement')
                                    <span class="text-danger"><b>{{ $message }}</b></span>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="hire_date">Hire Date</label>
                                <input type="date" class="form-control" name="hire_date" value="{{ old('hire_date') }}"
                                    placeholder="Enter the Hire date">
                                @error('hire_date')
                                    <span class="text-danger"><b>{{ $message }}</b></span>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">phone</label>
                                <input type="tel" class="form-control" name="phone" value="{{ old('phone') }}"
                                    placeholder="Enter the phone">
                                @error('phone')
                                    <span class="text-danger"><b>{{ $message }}</b></span>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="adress">adress</label>
                                <input type="text" class="form-control" name="adress" value="{{ old('adress') }}"
                                    placeholder="Enter the adress">
                                @error('adress')
                                    <span class="text-danger"><b>{{ $message }}</b></span>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="city">city</label>
                                <input type="text" class="form-control" name="city" value="{{ old('city') }}"
                                    placeholder="Enter the city">
                                @error('city')
                                    <span class="text-danger"><b>{{ $message }}</b></span>
                                @enderror

                            </div>
                            <div class="form-group ">
                                <button type="submit " class="btn bg-dark">
                                    Add
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
