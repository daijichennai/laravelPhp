@extends('masterPage.master')

@section('content')
     <section class="content-header">
      <h1><i class="fa fa-user"></i> User Master</h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
            {{-- <asp:Panel ID="pnlerror" runat="server" Visible="false">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <asp:Label ID="lblError" runat="server" Text=""></asp:Label>
              </div>
            </asp:Panel>
            <asp:Panel ID="pnlMSG" runat="server" Visible="false">
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <asp:Label ID="lblMSG" runat="server" Text=""></asp:Label>
              </div>
            </asp:Panel> --}}
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">List of Users</h3>
              <div class="box-tools">
                <a class="btn btn-primary btn-sm" href="addEditUser.aspx?cmode=add" role="button">Add New User</a>
              </div>
            </div>
            <div class="box-body">
                        <table class="table table-hover table-bordered">
                        <tr class="info">
                            <th class="text-center">#</th>
                            <th class="text-center" style="width:70%">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Mobile No</th>
                            <th class="text-center">Active</th>
                            <th class="text-center" style="width:10%">Action</th>
                        </tr>
                   
                        <tr>
                            <td>1</td>
                            <td>Suresh</td>
                            <td>Suresh@gmail.com</td>
                            <td>8438433851</td>
                            <td class="text-center">
                                <b>YES</b></td>
                            <td class="text-right">

                            <a class="paddingRight-15" title="User Permission" href="#" role="button"><i class="fa fa-user"></i></a> 
                            <a class="paddingRight-15" title="Edit" href="#" role="button"><i class="fa fa-pencil" aria-hidden="true"></i></a> 
                           
                      </td>
                      </tr>
                     
                        </table>
                 
             </div>
            

          </div>
        </div>
          </div>
    </section>
@endsection