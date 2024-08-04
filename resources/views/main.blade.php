
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
                <li class="breadcrumb-item active">ข้อมูลวันนี้</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <!-- Total Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card primary-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start"><h6>Filter</h6></li>
                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

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

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start"><h6>Filter</h6></li>
                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

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

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start"><h6>Filter</h6></li>
                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

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

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start"><h6>Filter</h6></li>
                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

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

                    <!-- Group Work -->
                    <div class="col-12">
                        <div class="card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">กลุ่มงาน <span>| Today</span></h5>

                                <!-- Bar Chart -->
                                <div id="barChart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                    new ApexCharts(document.querySelector("#barChart"), {
                                        series: [{
                                        data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380]
                                        }],
                                        chart: {
                                        type: 'bar',
                                        height: 350
                                        },
                                        plotOptions: {
                                        bar: {
                                            borderRadius: 4,
                                            horizontal: true,
                                        }
                                        },
                                        dataLabels: {
                                        enabled: false
                                        },
                                        xaxis: {
                                        categories: ['South Korea', 'Canada', 'United Kingdom', 'Netherlands', 'Italy', 'France', 'Japan',
                                            'United States', 'China', 'Germany'
                                        ],
                                        }
                                    }).render();
                                    });
                                </script>
                                <!-- End Bar Chart -->

                                <div class="row">
                                    <div class="col-3 pt-2"> <h6>South Korea<h3> | 433</h3></h6> </div>
                                    <div class="col-3 pt-2"> <h6>South Korea<h3> | 433</h3></h6> </div>
                                    <div class="col-3 pt-2"> <h6>South Korea<h3> | 433</h3></h6> </div>
                                    <div class="col-3 pt-2"> <h6>South Korea<h3> | 433</h3></h6> </div>
                                    <div class="col-3 pt-2"> <h6>South Korea<h3> | 433</h3></h6> </div>
                                    <div class="col-3 pt-2"> <h6>South Korea<h3> | 433</h3></h6> </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- Group Work -->

                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">

                <!-- Building Time -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">ลงเวลา อาคาร <span>| Today</span></h5>

                        <div class="d-flex justify-content-center align-items-center w-100">
                            <div class="progress-circle" id="progressCircles" style="--value: 0%;">
                                <div class="progress-circle-inner">
                                    <span class="percent" id="percentTexts">0%</span><br>
                                    <span class="text">คิดเป็น</span>
                                </div>
                            </div>
                        </div>

                        <script>
                            function animateProgressBars(finalValue) {
                              const circle = document.getElementById('progressCircles');
                              const percentText = document.getElementById('percentTexts');
                              let value = 0;
                              const interval = setInterval(() => {
                                if (value >= finalValue) {
                                  clearInterval(interval);
                                } else {
                                  value++;
                                  circle.style.setProperty('--value', `${value}%`);
                                  percentText.textContent = `${value}%`;
                                  circle.style.background = `conic-gradient(rgba(0, 143, 251, 0.85) ${value}%, #e9ecef 0)`;
                                }
                              }, 20); // Adjust the interval time to control the speed of the animation
                            }

                            // window.onload = () => {
                            //     animateProgressBars(34); // Set the final value here
                            // };
                        </script>

                        <div class="row">
                            <div class="col-12 pt-2"> <h3> | 433 <span class="h6">จากจำนวนทั้งหมด 1,750 คน</span></h3> </div>
                        </div>

                    </div>
                </div>
                <!-- End Building Time -->

                <!-- Site Time -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">ลงเวลา สาขา <span>| Today</span></h5>

                        <div class="d-flex justify-content-center align-items-center w-100">
                            <div class="progress-circle" id="progressCircle" style="--value: 0%;">
                                <div class="progress-circle-inner">
                                    <span class="percent" id="percentText">0%</span><br>
                                    <span class="text">คิดเป็น</span>
                                </div>
                            </div>
                        </div>

                        <script>
                            function animateProgressBar(finalValue) {
                              const circle = document.getElementById('progressCircle');
                              const percentText = document.getElementById('percentText');
                              let value = 0;
                              const interval = setInterval(() => {
                                if (value >= finalValue) {
                                  clearInterval(interval);
                                } else {
                                  value++;
                                  circle.style.setProperty('--value', `${value}%`);
                                  percentText.textContent = `${value}%`;
                                  circle.style.background = `conic-gradient(rgba(0, 227, 150, 0.85) ${value}%, #e9ecef 0)`;
                                }
                              }, 20); // Adjust the interval time to control the speed of the animation
                            }

                            window.onload = () => {
                              animateProgressBar(75); // Set the final value here
                              animateProgressBars(34);
                            };
                        </script>

                        <div class="row">
                            <div class="col-12 pt-2"> <h3> | 433 <span class="h6">จากจำนวนทั้งหมด 1,750 คน</span></h3> </div>
                        </div>

                    </div>
                </div>
                <!-- End Site Time -->

            </div><!-- End Right side columns -->

            <div class="col-lg-12">
                <!-- Top Selling -->
                <div class="col-12">
                    <div class="card top-selling overflow-auto">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">ข้อมูลการลงเวลา <span>| Today</span></h5>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">รหัสอ้างอิง</th>
                                        <th scope="col">วัน-เวลา</th>
                                        <th scope="col">กลุ่มงาน</th>
                                        <th scope="col">ชื่อ-สกุล</th>
                                        <th scope="col">สถานที่</th>
                                        <th scope="col">สถานะ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row"><span class="badge bg-warning text-dark">784E3</span></td>
                                        <td>2024-06-20 06:37:15</td>
                                        <td>รปภ.</td>
                                        <td>ด้วย มันทราช</td>
                                        <td>ศูนย์BCSสาขาบางรัก</td>
                                        <td><span class="badge bg-warning text-dark">รออนุมัติ</span></td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><span class="badge bg-warning text-dark">784E3</span></td>
                                        <td>2024-06-20 06:37:15</td>
                                        <td>รปภ.</td>
                                        <td>ด้วย มันทราช</td>
                                        <td>ศูนย์BCSสาขาบางรัก</td>
                                        <td><span class="badge bg-warning text-dark">รออนุมัติ</span></td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><span class="badge bg-warning text-dark">784E3</span></td>
                                        <td>2024-06-20 06:37:15</td>
                                        <td>รปภ.</td>
                                        <td>ด้วย มันทราช</td>
                                        <td>ศูนย์BCSสาขาบางรัก</td>
                                        <td><span class="badge bg-warning text-dark">รออนุมัติ</span></td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><span class="badge bg-warning text-dark">784E3</span></td>
                                        <td>2024-06-20 06:37:15</td>
                                        <td>รปภ.</td>
                                        <td>ด้วย มันทราช</td>
                                        <td>ศูนย์BCSสาขาบางรัก</td>
                                        <td><span class="badge bg-warning text-dark">รออนุมัติ</span></td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><span class="badge bg-warning text-dark">784E3</span></td>
                                        <td>2024-06-20 06:37:15</td>
                                        <td>รปภ.</td>
                                        <td>ด้วย มันทราช</td>
                                        <td>ศูนย์BCSสาขาบางรัก</td>
                                        <td><span class="badge bg-warning text-dark">รออนุมัติ</span></td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><span class="badge bg-warning text-dark">784E3</span></td>
                                        <td>2024-06-20 06:37:15</td>
                                        <td>รปภ.</td>
                                        <td>ด้วย มันทราช</td>
                                        <td>ศูนย์BCSสาขาบางรัก</td>
                                        <td><span class="badge bg-warning text-dark">รออนุมัติ</span></td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><span class="badge bg-warning text-dark">784E3</span></td>
                                        <td>2024-06-20 06:37:15</td>
                                        <td>รปภ.</td>
                                        <td>ด้วย มันทราช</td>
                                        <td>ศูนย์BCSสาขาบางรัก</td>
                                        <td><span class="badge bg-warning text-dark">รออนุมัติ</span></td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><span class="badge bg-warning text-dark">784E3</span></td>
                                        <td>2024-06-20 06:37:15</td>
                                        <td>รปภ.</td>
                                        <td>ด้วย มันทราช</td>
                                        <td>ศูนย์BCSสาขาบางรัก</td>
                                        <td><span class="badge bg-warning text-dark">รออนุมัติ</span></td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><span class="badge bg-warning text-dark">784E3</span></td>
                                        <td>2024-06-20 06:37:15</td>
                                        <td>รปภ.</td>
                                        <td>ด้วย มันทราช</td>
                                        <td>ศูนย์BCSสาขาบางรัก</td>
                                        <td><span class="badge bg-warning text-dark">รออนุมัติ</span></td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><span class="badge bg-warning text-dark">784E3</span></td>
                                        <td>2024-06-20 06:37:15</td>
                                        <td>รปภ.</td>
                                        <td>ด้วย มันทราช</td>
                                        <td>ศูนย์BCSสาขาบางรัก</td>
                                        <td><span class="badge bg-warning text-dark">รออนุมัติ</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="text-center cursor-pointer">แสดงรายการเพิ่ม</p>
                        </div>

                    </div>
                </div>
                <!-- End Top Selling -->
            </div>

        </div>
    </section>
@endsection

@section('script')

@endsection


