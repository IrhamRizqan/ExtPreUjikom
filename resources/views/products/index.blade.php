@include('layouts.dash.header')
<title>Products</title>
@include('layouts.dash.navbar')
@include('layouts.dash.sidebar')
<div class="wrapper">
    <div class="content-wrapper">
        @yield('content')
        <section class="content">
            <div class="row">
                <div class="col">
                    <div class="box">
                        <div class="box-body table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <div class="">
                                <button type="button" class="btn btn-primary" id="btnExport" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" style="padding: 9px; margin-left: 78%;">Export Report
                                </button>
                            </div>
                            <table class="table table-sm table-hover my-0 mydatatable" id="mydatatable" style=" text-align:center">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($product as $data)
                                            if (!$data.IsDelete)
                                            {
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$data->namaProduk}}</td>
                                                    <td>{{$data->harga}}</td>
                                                    <td>{{$data->quantity}}</td>
                                                    <td></td>
                                                </tr>
                                            }
                                        @endforeach
                                </tbody>
                            </table>
                            <div class="">
                                <button class="btn btn-primary btn-mg float-right m-5" type="button" aria-pressed="true">  <a class="text-white" href="Add_User"> Add User </a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>
<script>
    $(document).ready(function () {
        $("#btnExport").click(function () {
            let table = document.getElementsByTagName("table");
            console.log(table);
            debugger;
            TableToExcel.convert(table[0], {
                name: `UserManagement.xlsx`,
                sheet: {
                    name: 'Usermanagement'
                }
            });
        });
    });
</script>
        {{-- <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">DataTable with minimal features & hover style</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Product Name</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($product as $data)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$data->namaProduk}}</td>
                          <td>{{$data->harga}}</td>
                          <td>{{$data->quantity}}</td>
                          <td><button><a href=""></a></button></td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section> --}}
    </div>
</div>
@include('layouts.dash.scripts')
@include('layouts.dash.footer')


