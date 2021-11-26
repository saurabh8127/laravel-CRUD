@extends('layouts.default')

@section('content')



 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <a href={{url('/aa')}}><button type="button" class="btn btn-primary">Add new user</button></a>
                        <div class="card mb-4">
                          
                            <div class="card-body">
                                <table id="datatablesSimple" class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col" >Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Mobile</th>
                                            <th scope="col">City</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                      $num = 1;
                                    @endphp
                                      @foreach($contacts as $user)
                                        <tr>
                                            <td scope="row">{{ $num++}}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->mobile }}</td>
                                            <td>{{ $user->city }}</td> 
                                            <td><a href = {{url('delete/'. $user->id )}}><button class="btn btn-danger">Delete</button></a></td>
                                        </tr>
                                      @endforeach
                                    </tbody>  
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
@endsection