
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
                <li class="breadcrumb-item active">รายงานการใช้งานระบบ</li>
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
                        <h6 class="card-title"><i class="fa-solid fa-lock"></i> รายงานการใช้งานระบบ</h6>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>รายละเอียด</th>
                                    <th data-type="date" data-format="DD/MM/YYYY">วัน-เวลา</th>
                                    <th>ผู้ใช้งาน</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1</td>
                                    <td>G4S01 อนุมัติสิทธิ์การเป็น Admin ให้ คุณสัจวรรณ</td>
                                    <td>2024-07-15 15:09:10</td>
                                    <td>G4S01</td>
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


