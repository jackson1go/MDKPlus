
@extends('layouts.app')
@section('style')

@endsection

@section('main')
    <div class="pagetitle">

        <h1>Members</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                <li class="breadcrumb-item">Members</li>
                <li class="breadcrumb-item active">ผู้ใช้งาน (USER)</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-9 order-2 order-lg-1">
                <div class="card top-selling overflow-auto">

                    <div class="filter">
                        <button type="button" class="btn btn-success btn-sm me-4" onclick="exportCSV()"><i class="fa-solid fa-file-csv"></i> Export CSV
                        </button>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">ข้อมูลผู้ใช้งาน (USER)</h5>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>กลุ่มงาน</th>
                                    <th>สังกัด</th>
                                    <th>ชื่อ-สกุล</th>
                                    <th>สถานที่</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr onclick="memberModal()">
                                    <td>Unity Pugh</td>
                                    <td>9958</td>
                                    <td>Curicó</td>
                                    <td>2005/02/11</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>Unity Pugh</td>
                                    <td>9958</td>
                                    <td>Curicó</td>
                                    <td>2005/02/11</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>Unity Pugh</td>
                                    <td>9958</td>
                                    <td>Curicó</td>
                                    <td>2005/02/11</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>Unity Pugh</td>
                                    <td>9958</td>
                                    <td>Curicó</td>
                                    <td>2005/02/11</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>Unity Pugh</td>
                                    <td>9958</td>
                                    <td>Curicó</td>
                                    <td>2005/02/11</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>Unity Pugh</td>
                                    <td>9958</td>
                                    <td>Curicó</td>
                                    <td>2005/02/11</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>Unity Pugh</td>
                                    <td>9958</td>
                                    <td>Curicó</td>
                                    <td>2005/02/11</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>Unity Pugh</td>
                                    <td>9958</td>
                                    <td>Curicó</td>
                                    <td>2005/02/11</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>Unity Pugh</td>
                                    <td>9958</td>
                                    <td>Curicó</td>
                                    <td>2005/02/11</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>Unity Pugh</td>
                                    <td>9958</td>
                                    <td>Curicó</td>
                                    <td>2005/02/11</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>Unity Pugh</td>
                                    <td>9958</td>
                                    <td>Curicó</td>
                                    <td>2005/02/11</td>
                                    <td>37%</td>
                                </tr>
                                <tr>
                                    <td>Unity Pugh</td>
                                    <td>9958</td>
                                    <td>Curicó</td>
                                    <td>2005/02/11</td>
                                    <td>37%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="memberModal" tabindex="-1" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">ข้อมูลพนักงาน</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row mb-3">
                                    <label for="cName" class="col-md-4 col-lg-3 col-form-label">ชื่อ-สกุล</label>
                                    <div class="col-md-8 col-lg-9">
                                        <div class="row">
                                            <div class="col">
                                                <input name="cName" type="text" class="form-control" id="cName" value="">
                                            </div>
                                            <div class="col">
                                                <input name="cName" type="text" class="form-control" id="cName" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="cName" class="col-md-4 col-lg-3 col-form-label">รหัสพนักงาน</label>
                                    <div class="col-md-8 col-lg-9">
                                    <input name="cName" type="text" class="form-control" id="cName" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="cName" class="col-md-4 col-lg-3 col-form-label">เบอร์โทรศัพท์</label>
                                    <div class="col-md-8 col-lg-9">
                                    <input name="cName" type="text" class="form-control" id="cName" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="cName" class="col-md-4 col-lg-3 col-form-label">สังกัดบริษัท</label>
                                    <div class="col-md-8 col-lg-9">
                                        <select class="form-select" >
                                            <option selected="">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="cName" class="col-md-4 col-lg-3 col-form-label">สังกัดสังกัด</label>
                                    <div class="col-md-8 col-lg-9">
                                        <select class="form-select" >
                                            <option selected="">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="cName" class="col-md-4 col-lg-3 col-form-label">สาขา</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                                        <datalist id="datalistOptions">
                                            <option value="San Francisco">
                                            <option value="New York">
                                            <option value="Seattle">
                                            <option value="Los Angeles">
                                            <option value="Chicago">
                                            <option value="San Francisco">
                                            <option value="New York">
                                            <option value="Seattle">
                                            <option value="Los Angeles">
                                            <option value="Chicago">
                                            <option value="San Francisco">
                                            <option value="New York">
                                            <option value="Seattle">
                                            <option value="Los Angeles">
                                            <option value="Chicago">
                                            <option value="San Francisco">
                                            <option value="New York">
                                            <option value="Seattle">
                                            <option value="Los Angeles">
                                            <option value="Chicago">
                                            <option value="San Francisco">
                                            <option value="New York">
                                            <option value="Seattle">
                                            <option value="Los Angeles">
                                            <option value="Chicago">
                                            <option value="New York">
                                            <option value="Seattle">
                                            <option value="Los Angeles">
                                            <option value="Chicago">
                                            <option value="San Francisco">
                                            <option value="New York">
                                            <option value="Seattle">
                                            <option value="Los Angeles">
                                            <option value="Chicago">
                                            <option value="San Francisco">
                                            <option value="New York">
                                            <option value="Seattle">
                                            <option value="Los Angeles">
                                            <option value="Chicago">
                                            <option value="San Francisco">
                                            <option value="New York">
                                            <option value="Seattle">
                                            <option value="Los Angeles">
                                            <option value="Chicago">
                                            <option value="San Francisco">
                                            <option value="New York">
                                            <option value="Seattle">
                                            <option value="Los Angeles">
                                            <option value="Chicago">
                                        </datalist>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="cName" class="col-md-4 col-lg-3 col-form-label">จุดปฏิบัติงาน</label>
                                    <div class="col-md-8 col-lg-9">
                                        <select class="form-select" >
                                            <option selected="">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="text-center">
                                    <hr>
                                    <button type="button" class="btn btn-outline-danger btn-sm px-4">ยกเลิกสมาชิก</button>
                                    <button type="button" class="btn btn-primary btn-sm px-4 ms-3">บันทึกข้อมูล</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-3 order-1 order-lg-2">
                <div class="card top-selling overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">กรองข้อมูล</h5>

                        <strong>กลุ่มงาน</strong>
                        <div class="col-12 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="changesMade" checked="">
                                <label class="form-check-label" for="changesMade">
                                แม่บ้าน
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="newProducts" checked="">
                                <label class="form-check-label" for="newProducts">
                                รปภ
                                </label>
                            </div>
                        </div>

                        <strong>สังกัด/ บริษัท</strong>
                        <div class="col-12 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="changesMade" checked="">
                                <label class="form-check-label" for="changesMade">
                                G4S
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="newProducts" checked="">
                                <label class="form-check-label" for="newProducts">
                                SRS
                                </label>
                            </div>
                        </div>

                        <button type="button" class="btn btn-primary btn-sm w-100">แสดงรายการ</button>
                        {{-- <button type="submit" class="btn btn-outline-success btn-sm mt-3 w-100" onclick="locations()">+ เพิ่มสถานที่</button> --}}
                    </div>
                </div>
            </div>
            <!-- End Right side columns -->
        </div>
    </section>
@endsection

@section('script')
    <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     document.querySelectorAll('tr').forEach(row => {
        //         row.addEventListener('click', function() {
        //             members();
        //         });
        //     });
        // });

        function memberModal() {
            $('#memberModal').modal('show');
        }
    </script>

@endsection


