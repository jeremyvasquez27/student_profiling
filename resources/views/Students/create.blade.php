@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="mt-0" style="padding: 5px">
        <div class="card" style="margin:20px;">
            <div class="card-" style="padding:20px; font-weight:bold; font-size:20px; background-color:red; color:white;">
                Add New Student
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('Students.create') }}">
                    @csrf
                    <div class="form-row row mb-2" style="padding:1px;">
                        <div class="col">
                            <label>Student Number</label>
                            <input type="id" name="stud_no" class="form-control " required placeholder="2022316029"></input>
                        </div>
                        <div class="col">
                            <label>First Name</label>
                            <input type="text" name="fname" class="form-control" required placeholder="Mark Raven"></input>
                        </div>
                        <div class="col">
                            <label>Middle Name</label>
                            <input type="text" name="mname" class="form-control "  required placeholder="Mamangun"></input>
                        </div>
                        <div class="col">
                            <label>Last Name</label>
                            <input type="text" name="lname" class="form-control " required placeholder="Carlos"></input>
                        </div>

                    
                    </div>

                    <div class="form-group mb-2">
                            <div class="col">
                                <label>Address</label>
                                <input type="text" name="stud_add" class="form-control " required placeholder="1287 Purok 5 Tabuyuc, Apalit, Pampanga"></input>
                            </div>
                    </div>

                    <div class="form-group mb-2">
                            <div class="col">
                                <label>Date of Birth</label>
                                <input type="date" name="stud_DOB" class="form-control " required placeholder="1287 Purok 5 Tabuyuc, Apalit, Pampanga"></input>
                            </div>
                    </div>

                
                    <button type="submit" class="btn-primary" style="border-radius:5px; margin-left:10px; margin-top:5px;">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection