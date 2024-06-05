@extends('adminlte::page')

@section('title')
@section('content_header')
    <h1>List of employes</h1>

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-10 mx-auto ">
                <div class="card my-3 my-5">
                    <div class="card-header">
                        <div class="text-center d-flex font-weight-bold font-weigh-boldt justify-content-between">
                            <h1 class="text-uppercase">Employes</h1>
                            <a href="{{ route('employes.create') }}" class="btn btn-success ">Add new Employe</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-stripped" id="myTable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>FirstName</th>
                                        <th>LastName</th>
                                        <th>Dipartemet</th>
                                        <th>Hired</th>
                                        <th></th>

                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($employes as $key => $employe)
                                        <tr>
                                            <td> {{ $key + 1 }}</td>
                                            <td> {{ $employe->firstName }}</td>
                                            <td> {{ $employe->lastName }}</td>
                                            <td> {{ $employe->departement }}</td>
                                            <td> {{ $employe->hire_date }}</td>
                                            <td class="d-flex justify-content-center align-items-center">
                                                <a href="{{ route('employes.show', $employe->registration_number) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('employes.edit', $employe->registration_number) }}"
                                                    class="btn btn-sm btn-warning mx-2">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form id="{{ $employe->registration_number }}"
                                                    action="{{ route('employes.destroy', $employe->registration_number) }}" method="post">
                                                    @method('DELETE')
                                                    @csrf

                                                </form>
                                                <button type="submit" class="btn btn-danger"
                                                onclick="deletemploye({{$employe->registration_number}})">


                                                    <i class="fas fa-trash"></i>
                                                </button>

                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'pdf', 'print', 'colvis'
                ]
            });

        });

        function deletemploye(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(id).submit();
                }
            });
        }
    </script>
    @if (session()->has('success'))
        <script>
            Swal.fire({
                position: 'top-end',
                title: "{{ session()->get('success') }}",
                text: "You clicked the button!",
                icon: "success"
            });
        </script>
    @endif
@endsection
