
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
                <li class="breadcrumb-item active">รายงานสรุปข้อมูลการลงเวลา</li>
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
                            <div class="row mb-0 mb-md-3">
                                <div class="col-md-6 col-lg-3">
                                    <label for="cUsername" class="col-md-4 col-lg-3 col-form-label">วันที่เริ่ม</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="dateStart2"><i class="fa-regular fa-calendar-days"></i></span>
                                        <input type="date" class="form-control" id="dateStart" aria-describedby="dateStart2" required="">
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-3">
                                    <label for="cUsername" class="col-md-4 col-lg-3 col-form-label">เวลาที่เริ่ม</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="timeStart2"><i class="fa-solid fa-clock"></i></span>
                                        <input type="time" class="form-control" id="timeStart" aria-describedby="timeStart2" required="">
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-3">
                                    <label for="cUsername" class="col-md-4 col-lg-3 col-form-label">วันที่สิ้นสุด</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="dateEnd2"><i class="fa-regular fa-calendar-days"></i></span>
                                        <input type="date" class="form-control" id="dateEnd" aria-describedby="dateEnd2" required="">
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-3">
                                    <label for="cUsername" class="col-md-4 col-lg-3 col-form-label">เวลาสิ้นสุด</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="timeEnd2"><i class="fa-solid fa-clock"></i></span>
                                        <input type="time" class="form-control" id="timeEnd" aria-describedby="timeEnd2" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0 mb-md-3">
                                <div class="col-md-6 col-lg-6">
                                    <label for="cUsername" class="col-md-4 col-lg-3 col-form-label">คำค้นหา</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="search2"><i class="fa-solid fa-magnifying-glass"></i></span>
                                        <input type="search" class="form-control" id="search" aria-describedby="search2" required="">
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6">
                                    <label for="cUsername" class="col-md-4 col-lg-3 col-form-label">สถานที่</label>
                                    <div class="input-group">
                                        <label class="input-group-text" for="location"><i class="fa-solid fa-location-dot"></i></label>
                                        <select class="form-select cursor-pointer" id="location">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-12 col-lg-3">
                                    <label for="fullName" class="col-md-12 col-form-label">กลุ่มงาน</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="cPermission1" checked="">
                                        <label class="form-check-label" for="cPermission1">แม่บ้าน</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="cPermission2">
                                        <label class="form-check-label" for="cPermission2">รปภ.</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="cPermission2">
                                        <label class="form-check-label" for="cPermission2">คนขับรถ</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="cPermission2">
                                        <label class="form-check-label" for="cPermission2">นักการ</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="cPermission2">
                                        <label class="form-check-label" for="cPermission2">พนักงานส่งเอกสาร</label>
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-3">
                                    <label for="fullName" class="col-md-12 col-form-label">สังกัด/ บริษัท</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="cPermission1" checked="">
                                        <label class="form-check-label" for="cPermission1">GF</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="cPermission2">
                                        <label class="form-check-label" for="cPermission2">SAMCO</label>
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-3">
                                    <label for="fullName" class="col-md-12 col-form-label">การลงเวลา</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="cPermission" id="cPermission1" checked="">
                                        <label class="form-check-label" for="cPermission1">เข้างาน</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="cPermission" id="cPermission2">
                                        <label class="form-check-label" for="cPermission2">ออกงาน</label>
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
                        <h5 class="card-title">รายงานสรุป ข้อมูลการลงเวลา</h5>

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


