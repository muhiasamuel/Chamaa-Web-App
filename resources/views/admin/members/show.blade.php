@extends('layouts.admin')

@section('content')
<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                      
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.member.show', $member->id) }}">{{$member->member_name}}</a></li>
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
                        <a href="{{ route('admin.chamaa.index')}}"><button type="button" class="btn btn-success float-left"><i class="fas fa-edit">Go Back</i></button></a>
                            <div class="card-body">
                                <h3 class="card-title"> Name: <strong> {{$member->member_name}}</strong></h3>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                            <th>Member Id</th>
                                                <th>Member Name</th>
                                                <th>Member Phone</th>
                                                <th>Member Regestration Date</th>
                                                <th>Contribution Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <tr>
                                         <td>{{$member->id}}</td>
                                                <td>{{$member->member_name}}</td>
                                                <td>{{$member->member_phone}}</td>
                                                <td>{{$member->member_date_reg}}</td>
                                              
                                                <td><strong>
                                            
                                                @if ($member->contributions->pluck('id') === $member->id)
                                                {{ implode(',', $member->contributions()->get()->pluck('amount')->toArray())  }}
                                                @else No records
                                               @endif</strong> </td>
                                               
                                                <td>

                    
                            <a href="{{ route('admin.member.edit', $member->id)}}"><button type="button" class="btn btn-outline-primary float-left"><i class="fas fa-edit">edit</i></button>
                            
                    <a class="btn btn-outline-info" href="{{ route('admin.member.show',$member->id) }}"><i class="fas fa-eye"></i>view</a>
                         
                              <form action="{{ route('admin.member.destroy', $member)}}" method="POST" class="float-left">
                              @csrf
                              {{method_field('DELETE')}}
                              <button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash">Block</i></button>
                              </form>
                             
                         </td>
                                            </tr>  
                                           
                                          
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                        <th>Member Id</th>
                                                <th>Member Name</th>
                                                <th>Member Phone</th>
                                                <th>Member Regestration Date</th>
                                                <th>Contribution Status</th>
                                                <th>subscripton Status</th>
                                           
                                                
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                   
                                </div>

                            </div>
                            
                        </div>
                    </div>
                    <div class="card col-lg-8">
                    <div class="card-body">
                    <h3 class="card-title align-items-center border-bottom">Financial Status Of. <strong> {{$member->member_name}}</strong></h3>    
                        <div class="row justify-content-center align-items-center" style="display:grid; grid-template-columns:5fr 2.5fr 3fr;   " >
                           <div class="col-lg-12">
                                <h4>Total Cash Available: </h4>
                                @if($member->contributions->sum('amount'))
                                <h3>Ksh {{$member->contributions->sum('amount')}} </h3>
                               @else 
                              <h3>Ksh 0.00 </h3> 
                              @endif
                            </div>
                            <div class="row border-left justify-content-center align-content-center">
                            <div class="col-lg-12 border-bottom " >
                            <h5>Total Contribution: </h5>
                            @if($member->contributions->sum('amount'))
                                <h3>Ksh {{$member->contributions->sum('amount')}}.00 </h3>
                               @else 
                              <h3>No Cas </h3> 
                              @endif
                            </div>
                           <br>
                            <div class="col-lg-12 border-bottom  " >
                            <h5>Fines:</h5>
                            @if($member->contributions->sum('assets'))
                                <h3>Ksh {{$member->contributions->sum('assets')}}.00 </h3>
                               @else 
                              <h3>Ksh 0.00 </h3> 
                              @endif
                            </div> 
                            <div class="col-lg-12 border-bottom " >
                            <h5>Total Expenses:</h5>
                            @if($member->contributions->sum('expenses'))
                                <h3>Ksh {{$member->contributions->sum('expenses')}}.00 </h3>
                               @else 
                              <h3>Ksh 0.00   </h3> 
                              @endif   
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