
@extends('templates.admin')
@section('main')

<!-- 12-->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="row">
      <form method="post" id="search-form" style="flex:auto;">
        <div class="col-12">
          <div class="btn btn-flat fix-box" style="margin: 0;padding: 0 0 0 12px;">
            <select name="type-search" id="type_search" class="form-control">
              <option value="0">Gần Đúng</option>
              <option value="1">Chính Xác</option>
            </select>
            
          </div>
          <div class="btn-group wrap-click-drop">
            <a class="btn bg-teal btn-block btn-flat dropdown-toggle" data-toggle="dropdown"> Tìm kiếm
              <i class="fa fa-angle"></i>
            </a>
            <ul class="dropdown-menu pull-left" style="padding: 10px;width: 300px;">
              <li>
                <div class="form-group has-feedback">
                  <span class="fa fa-search form-control-feedback"></span>
                  <input type="text" name="search-name" class="form-control" placeholder="Tên Đầy Đủ" id="search-name" >
                </div>
              </li>
              <li>
                <div class="form-group has-feedback">
                  <span class="fa fa-search form-control-feedback"></span>
                  <input type="text" name="search-email" class="form-control" placeholder="Email" id="search-email">
                </div>
              </li>
            </ul>
          </div>
        </div>
      </form>
      
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="col-md-4" style="margin-bottom: -2%; ">
            <ol class="breadcrumb" style="background-color: transparent;font-size: 145%;display: inline-flex;">
              <li><i class="fa fa-user"></i> Danh sách lớp</li>
            </ol>
           <!--  <div class="btn-group pull-right" style="left: 253%;">
              <button type="button" class="btn bg-olive btn-flat margin btn_add_class" data-toggle="modal" data-target="#add_class"><i class="fa fa-plus" aria-hidden="true"></i> ADD CLASS</button>
              
            </div> -->
            <!-- data-toggle-->
            <div class="modal fade " id="add_class">
              <div class="modal-dialog modal-lg">
                <div class="modal-content add" style="margin-top: 15%;">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Thêm lớp học</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body row">
                    <div class="col-sm-6 row">
                      <form class="add row">
                        <strong class="col-sm-5 mt-1">Họ và tên <span style="float: right">:</span></strong>
                        <input type="text" name="cauHoi_update" style="height: 25px; margin-top: 5px, margin-left:20px" id="mon_update"><br>
                        <!-- <strong class="col-sm-5 mt-1">Tên tài khoản  <span style="float: right">:</span></strong>
                          <input type="text" name="cauHoi_update" style="height: 25px; margin-top: 5px" id="mon_update"><br> -->

                                <!-- <strong class="col-sm-5 mt-1">Loại câu hỏi* <span style="float: right">:</span></strong>
                                <input type="radio" value="TN" name="loaiCH_update" style="margin-top: 10px" checked="checked"><span style="margin-top: 5px;">Trắc Nghiệm</span>
                                <input type="radio" value="TL" name="loaiCH_update" style="margin-left: 15px; margin-top: 10px"><span style="margin-top: 5px;">Tự Luận</span><br>
                                <strong class="col-sm-5 mt-1">Độ khó* <span style="float: right">:</span></strong>
                                <input type="radio" value="1" name="doKho_update" style="margin-top: 10px"><span style="margin-top: 5px;">Dễ</span>
                                <input type="radio" value="2" name="doKho_update" style="margin-left: 10px; margin-top: 10px" checked="checked"><span style="margin-top: 5px;">Trung Bình</span>
                                <input type="radio" value="3" name="doKho_update" style="margin-left: 10px; margin-top: 10px"><span style="margin-top: 5px;">Khó</span><br> -->
                              </form>
                            </div>
                            <div class="col-sm-6 row">
                              <!-- <form class="add row">
                               <strong class="col-sm-5 mt-1">Email <span style="float: right">:</span></strong>
                               <input type="text" name="cauHoi_update" style="height: 25px; margin-top: 5px" id="mon_update"><br>
                               <strong class="col-sm-5 mt-1">Phone  <span style="float: right">:</span></strong>
                               <input type="text" name="cauHoi_update" style="height: 25px; margin-top: 5px" id="mon_update"><br> -->
                               
                             </form>
                           </div>
                         </div>
                         <!-- Modal footer -->
                         <div class="modal-footer">
                          <button type="button" id="updateCus" class="btn btn-dark"  data-dismiss="modal">Add</button>
                          <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- data-toggle-->
                </div>
                
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Tên lớp</th>
                        <!-- <th>Thao tác</th> -->
                        
                      </tr>
                    </thead>

                    <tbody>
                      @foreach($class as $key => $class)
                      <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $class->name_class }}</td>
<!--                         <td> 
                          <button type="button" class="btn btn-primary">AddClass</button>
                        </td> -->
                        
                      </tr>
                      @endforeach
                    </tbody>

                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
        </section>   
        <form action="{{ asset('/class') }}" method="post">
          @csrf
          <div class="container">
            <div class="row">
              <div class="col-sm">
              </div>
              <div class="col-sm">
               <label for="exampleInputEmail1">Create Class </label>
               <input type="text" name="name_class" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên lớp"> <br>
               <button type="submit" class="btn btn-primary">Add Class</button>
             </div>
             <div class="col-sm">
             </div>
           </div>
         </form>
       </div>
     </div>
     @endsection
