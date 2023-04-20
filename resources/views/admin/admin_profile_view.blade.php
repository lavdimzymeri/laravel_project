@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-6">
                    <h4 class="my-3">Card Groups</h4>
                    <div class="card-group">
                        <div class="card mb-4"><br>
                            <center>
                            <img class="rounded-circle avatar-xl" src="{{asset('backend/assets/images/small/img-5.jpg')}}" alt="Card image cap">
                            </center>
                            <div class="card-body">
                                <hr>
                                <h4 class="card-title">Name : {{$adminData ->name}}</h4>
                                <hr>
                                <h4 class="card-title">User Email :{{$adminData ->email}}</h4>
                                <hr>
                                <h4 class="card-title">User Name :{{$adminData ->username}}</h4>
                                <hr>
                                <a href="" class="btn btn-info btn-rounded waves-effect waves-light">Edit Profile</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
