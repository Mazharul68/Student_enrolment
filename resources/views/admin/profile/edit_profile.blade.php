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
                               <h4 class="card-title">My Profile Edit</h4>
                            </div>
                         </div>
                         <div class="iq-card-body">
                             <form action="{{ route('update.profile') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="old_img" value="{{ $profile->image }}">
                               <div class=" row align-items-center">
                                <div class="form-group col-sm-12">
                                    <input type="file" name="image">
                                    <img src="{{ asset($profile->image) }}" alt="">
                                 </div>
                                  <div class="form-group col-sm-12">
                                     <label for="fname">Name:</label>
                                     <input type="text" class="form-control" name="name" value="{{ $profile->name }}">
                                  </div>
                                  <div class="form-group col-sm-12">
                                     <label for="lname">Email:</label>
                                     <input type="text" class="form-control" name="email" value="{{ $profile->email }}">
                                  </div>
                                  <div class="form-group col-sm-12">
                                     <label for="uname">Phone:</label>
                                     <input type="text" class="form-control" name="phone" value="{{ $profile->phone }}">
                                  </div>
                                  <div class="form-group">
                                    <button type="submit" class="btn btn-success">Update Profile</button>
                                    <a href="{{ route('change.password') }}" class="btn btn-warning">Change Password</a>
                                 </div>
                               </div>
                            </form>
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
