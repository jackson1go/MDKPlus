
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
                <li class="breadcrumb-item">Members</li>
                <li class="breadcrumb-item active">คำขอ Admin</li>
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

                    <div class="card-body pb-0">
                        <h6 class="card-title"><i class="fa-solid fa-user-clock"></i> รายการคำขอ Admin <span> | </span> <span>5</span></h6>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>วัน-เวลา</th>
                                    <th>ชื่อ-สกุล</th>
                                    <th>คำขอสิทธิ์อนุมัติ</th>
                                    <th>ดำเนินการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1</td>
                                    <td>2024-07-15 20:03:06</td>
                                    <td>สัจวรรณ เสมอกลาง</td>
                                    <td>รปภ. (G4S) สาขาตลาดเซฟวัน นครราชสีมา</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-success btn-sm me-4" onclick="exportCSV()"><i class="fa-solid fa-check"></i> อนุมัติ</button>
                                        <button type="button" class="btn btn-outline-danger btn-sm me-4" onclick="exportCSV()"><i class="fa-solid fa-xmark"></i> ปฏิเสธ</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Left side columns -->

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


