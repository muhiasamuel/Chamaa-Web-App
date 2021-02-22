@extends('layouts.admin')

@section('content')
<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.chamaa.index') }}">Chamaas</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                    
                        
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Registred Chamaas Table</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Chamaa Name</th>
                                                <th>Chamaa Location</th>
                                                <th>Chamaa Admin</th>
                                                <th>Chamaa Capacity</th>
                                                <th>subscripton Status</th>
                                                <th>Date Registred</th>
                                                <th>Registred Members</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         @foreach($chamaa as $chamaa)
                                         <tr>
                                                <td>{{$chamaa->chamaa_name}}</td>
                                                <td>{{$chamaa->chamaa_location}}</td>
                                                <td>{{ implode(',', $chamaa->member()->get()->pluck('member_name')->toArray())  }}</td>
                                                <td>{{$chamaa->chamaa_capacity}}</td>
                                                <td>{{$chamaa->chamaa_subscription}}</td>
                                                <td>{{$chamaa->chamaa_date_reg}}</td>
                                                <td>{{$chamaa->members->count()}}</td>
                                                <td>

                    
                            <a href="{{ route('admin.chamaa.edit', $chamaa->id)}}"><button type="button" class="btn btn-outline-primary float-left"><i class="fas fa-edit">edit</i></button>
                            
                    <a class="btn btn-info" href="{{ route('admin.chamaa.show',$chamaa->id) }}"><i class="fas fa-eye"></i>view Chamaa </a>
                         
                              <form action="{{ route('admin.chamaa.destroy', $chamaa)}}" method="POST" class="float-left">
                              @csrf
                              {{method_field('DELETE')}}
                              <button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash">Block</i></button>
                              </form>
                             
                         </td>
                                            </tr>    
                                         @endforeach
                                           
                                          
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                                <th>Chamaa Name</th>
                                                <th>Chamaa Location</th>
                                                <th>Chamaa Admin</th>
                                                <th>Chamaa Capacity</th>
                                                <th>subscripton Status</th>
                                                <th>Date Registred</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
               
            </div>
  

@endsection