@extends('layouts.admin_master')

@section('admin_content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-lg-12">
             <div class="iq-edit-list-data">
                <div class="tab-content">
                   <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                       <div class="iq-card">
                         <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                               <h4 class="card-title">My Profile Details</h4>
                            </div>
                         </div>
                         <div class="iq-card-body">
                               <div class=" row align-items-center">
                                <div class="form-group col-sm-12">
                                    <label for="fname">Profile Image:</label>
                                    <img src="{{ asset($profile->image) }}" alt="">
                                 </div>
                                  <div class="form-group col-sm-12">
                                     <label for="fname">Name:</label>
                                     <input type="text" class="form-control" name="name" value="{{ $profile->name }}" readonly>
                                  </div>
                                  <div class="form-group col-sm-12">
                                     <label for="lname">Email:</label>
                                     <input type="text" class="form-control" name="email" value="{{ $profile->email }}" readonly>
                                  </div>
                                  <div class="form-group col-sm-12">
                                     <label for="uname">Phone:</label>
                                     <input type="text" class="form-control" name="uname" value="{{ $profile->phone }}" readonly>
                                  </div>
                                  <div class="form-group col-sm-12">
                                     <label for="cname">Password:</label>
                                     <input type="password" class="form-control" name="password" value="{{ $profile->password }}" readonly>
                                  </div>
                               </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

@endsection
