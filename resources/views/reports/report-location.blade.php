
@extends('layouts.app')
@section('style')

@endsection

@section('main')
    <div class="pagetitle">

        <h1>Report</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                <li class="breadcrumb-item">Reports</li>
                <li class="breadcrumb-item active">รายงานสรุปตามสถานที่</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Central side columns -->
            <div class="col-lg-12">
                <div class="card top-selling overflow-auto">

                    {{-- <div class="filter">
                        <button type="button" class="btn btn-success btn-sm me-4" onclick="exportCSV()"><i class="fa-solid fa-file-csv"></i> Export CSV
                        </button>
                    </div> --}}

                    <div class="card-body pb-3">
                        <h5 class="card-title">กรองข้อมูล</h5>

                        <form>
                            <div class="row mb-0">
                                <div class="col-md-6 col-lg-3">
                                    <label for="cUsername" class="col-md-4 col-lg-3 col-form-label">ประจำเดือน</label>
                                    <div class="input-group">
                                        <label class="input-group-text" for="location"><i class="fa-solid fa-calendar-day"></i></label>
                                        <select class="form-select cursor-pointer" id="location">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-3">
                                    <label for="cUsername" class="col-md-4 col-lg-3 col-form-label">ประจำปี</label>
                                    <div class="input-group">
                                        <label class="input-group-text" for="location"><i class="fa-regular fa-calendar"></i></label>
                                        <select class="form-select cursor-pointer" id="location">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-3">
                                    <label for="cUsername" class="col-md-4 col-lg-3 col-form-label">สถานที่</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="search2"><i class="fa-solid fa-location-dot"></i></span>
                                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="ค้นหาสถานที่ ...">
                                        <datalist id="datalistOptions">
                                          <option value="San Francisco">
                                          <option value="New York">
                                          <option value="Seattle">
                                          <option value="Los Angeles">
                                          <option value="Chicago">
                                        </datalist>
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-3">
                                    <label for="cUsername" class="col-md-4 col-lg-3 col-form-label">ดำเนินการ</label>
                                    <button type="submit" class="btn btn-primary btn-sm w-100">แสดงรายการ</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- End Left side columns -->

            <!-- Central Data side columns -->
            <div class="col-md-12">
                <div class="card top-selling overflow-auto">

                    <div class="filter">
                        <button type="button" class="btn btn-success btn-sm me-4" onclick="exportCSV()"><i class="fa-solid fa-file-csv"></i> Export CSV
                        </button>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">รายงานสรุป ข้อมูลตามสถานที่</h5>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>กลุ่มงาน</th>
                                    <th>สังกัด</th>
                                    <th>รหัสพนักงาน</th>
                                    <th>ชื่อ-สกุล</th>
                                    <th>เลขที่สัญญา</th>
                                    <th>สถานที่</th>
                                    <th>วัน-เวลา เข้างาน</th>
                                    <th>วัน-เวลา ออกงาน</th>
                                    <th>เข้าสาย</th>
                                    <th>ออกก่อน</th>
                                    <th>รวมเวลาทำงาน</th>
                                    <th>นับชั่วโมงทำงาน</th>
                                    <th>หมายเหตุ</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <tr>
                                    <td>Unity Pugh</td>
                                    <td>9958</td>
                                    <td>Curicó</td>
                                    <td>2005/02/11</td>
                                    <td>37%</td>
                                </tr> --}}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Right side columns -->
        </div>
    </section>
@endsection

@section('script')
    <script>
        function locations() {
            $('#locationModal').modal('show');
        }
    </script>

@endsection


