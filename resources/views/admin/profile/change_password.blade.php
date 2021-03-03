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
                                        <h4 class="card-title">Change Password</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <form action="{{ route('update.password') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">Old Password</label>
                                                    <input type="password" class="form-control" name="old_password" id="name" placeholder="Old Password">
                                                    @error('old_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">New Password</label>
                                                    <input type="password" class="form-control" name="new_password" id="name" placeholder="New Password">
                                                    @error('new_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">confirm Password</label>
                                                    <input type="password" class="form-control" name="confirmation_password" id="name" placeholder="Re-type Password">
                                                    @error('confirmation_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-success">Update Password</button>
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
