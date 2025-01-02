@extends('layouts.manager')
@section('content')
<h1>hii its users page</h1>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Responsive Hover Table</h3>
                <div class="box-tools">
                    <div class="input-group">
                        <input type="text" name="table_search" class="form-control input-sm pull-right"
                            style="width: 150px;" placeholder="Search" />
                        <div class="input-group-btn">
                            <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>id</th>
                        <th>profile picture</th>
                        <th>name</th>
                        <th>email</th>
                        <th>is verified</th>
                        <th>Action</th>
                    </tr>
                    @foreach($users as $user)
                    <tr>
                    <td><h3>{{$user->id}}</h3></td>
                                    <td><img src="{{$user->profile_pic_path}}" alt="" width=50 height=50></td>
                                    <td><h3>{{$user->name}}</h3></td>
                                    <td><h3>{{$user->email}}</h3></td>
                                    <td><h3>{!! $user->email_verified_at ? '<span class="label label-success">Verified</span>' : '<span class="label label-danger">Unverified</span>' !!}</h3></td>
                                    <td><a class="btn bg-maroon" href="manager-user-details/{{$user->id}}">Detail</a></td>
                    </tr>
                    @endforeach
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>
@stop
