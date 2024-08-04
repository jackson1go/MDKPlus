
@extends('layouts.app')
@section('style')

@endsection

@section('main')
    <div class="pagetitle">

        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                <li class="breadcrumb-item">Dashboards</li>
                <li class="breadcrumb-item active">ข้อมูลการลงเวลา</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Central side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Total Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card primary-card">

                            <div class="card-body">
                                <h5 class="card-title">ทั้งหมด <span> | </span><span>Today</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>145</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Total Card -->

                    <!-- Approved Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card success-card">

                            <div class="card-body">
                                <h5 class="card-title">อนุมัติ <span> | </span><span>Today</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person-check"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>145</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Approved Card -->

                    <!-- Pending Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card warning-card">

                            <div class="card-body">
                                <h5 class="card-title">รออนุมัติ <span> | </span><span>Today</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-clock"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>145</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Pending Card -->

                    <!-- Reject Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card danger-card">

                            <div class="card-body">
                                <h5 class="card-title">ปฏิเสธ <span> | </span><span>Today</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person-x"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>14345</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Reject Card -->

                </div>
            </div>
            <!-- End Left side columns -->

            <!-- Left side columns -->
            <div class="col-md-12 col-lg-6">
                <div class="card top-selling overflow-auto">

                    {{-- <div class="filter">
                        <button type="button" class="btn btn-success btn-sm me-4" onclick="exportCSV()"><i class="fa-solid fa-file-csv"></i> Export CSV
                        </button>
                    </div> --}}

                    <div class="card-body pb-0">
                        <h6 class="card-title"><i class="fa-solid fa-clock text-warning"></i> รายการรออนุมัติ <span> | </span> <span>5</span></h6>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>รหัสอ้างอิง</th>
                                    <th>กลุ่มงาน</th>
                                    <th>ชื่อ-สกุล</th>
                                    <th>สถานที่</th>
                                </tr>
                            </thead>
                            <tbody>
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
            <!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-md-12 col-lg-6">
                <div class="card top-selling overflow-auto">

                    <div class="filter">
                        <button type="button" class="btn btn-success btn-sm me-4" onclick="exportCSV()"><i class="fa-solid fa-file-csv"></i> Export CSV
                        </button>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title"><i class="fa-solid fa-circle-check text-success"></i> รายการอนุมัติแล้ว <span> | </span> <span>10</span></h5>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>รหัสอ้างอิง</th>
                                    <th>กลุ่มงาน</th>
                                    <th>ชื่อ-สกุล</th>
                                    <th>สถานที่</th>
                                </tr>
                            </thead>
                            <tbody>
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


