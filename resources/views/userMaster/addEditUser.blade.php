@extends('masterPage.master')

@section('content')
     <section class="content-header">
        <h1><i class="fa fa-user"></i>&nbsp;User Master</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                
                <div class="box  box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            Add User</h3>
                        <div class="box-tools">
                            <a class="btn btn-primary btn-sm" href="{{ url('user')}}" role="button">List User</a>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group" style="padding-bottom: 25px;">
                            <label for="name" class="col-sm-2 control-label">Name<span class="text-red"> *</span> </label>
                            <div class="col-sm-10">
                                <input name="txtUserName" maxlength="50" id="txtUserName" class="form-control" type="text" placeholder="Enter Your Name" />
                            </div>
                        </div>
                        <div class="form-group" style="padding-bottom: 25px;">
                            <label for="name" class="col-sm-2 control-label">Email<span class="text-red"> *</span> </label>
                            <div class="col-sm-10">
                                <input name="txtUserEmail" type="text" maxlength="50" id="txtUserEmail" class="form-control" placeholder="Enter Email Id" />
                            </div>
                        </div>
                       
                        <div class="form-group" style="padding-bottom: 100px;">
                            <label for="name" class="col-sm-2 control-label">MobileNo</label>
                            <div class="col-sm-10">
                                <input name="txtUserMobileNo" maxlength="20" id="txtUserMobileNo" class="form-control" type="text" placeholder="Enter Mobile No" />
                            </div>
                        </div>
                      
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <input type="submit"  value="Submit"  id="btnSubmit" class="btn btn-primary pull-right" />
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div>
        </div>
    </section>


@endsection