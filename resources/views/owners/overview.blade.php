
@extends('layouts.app')
@section('style')

@endsection

@section('main')
    <div class="pagetitle">

        <h1>System Management</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                <li class="breadcrumb-item">Super Owner</li>
                <li class="breadcrumb-item active">ภาพรวมของระบบ</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            {{-- Central --}}
            <div class="col-lg-12">
                <div class="row">

                    <!-- Total Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card primary-card">

                            <div class="card-body">
                                <h5 class="card-title">Account <span> | </span><span>ทั้งหมด</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class='bx bx-buildings'></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 id="total_sites">0</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Total Card -->

                    <!-- Approved Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card info-card">

                            <div class="card-body">
                                <h5 class="card-title">User <span> | </span><span>ทั้งหมด</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 id="total_users">0</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Approved Card -->

                    <!-- Pending Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card success-card">

                            <div class="card-body">
                                <h5 class="card-title">Admin <span> | </span><span>ทั้งหมด</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class='bi bi-person-check' ></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 id="total_admins">0</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Pending Card -->

                    <!-- Reject Card -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card warning-card">

                            <div class="card-body">
                                <h5 class="card-title">Super Admin <span> | </span><span>ทั้งหมด</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class='bi bi-person-square' ></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 id="total_superadmin">0</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Reject Card -->

                </div>
            </div>
            <!-- End Central side columns -->

            <div class="col-lg-12">
                <!-- Top Selling -->
                <div class="col-12">
                    <div class="card top-selling overflow-auto">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Tools</h6>
                                </li>
                                <li><a class="dropdown-item" href="#" onclick="sites()"><i class='bi bi-journal-plus' ></i>New Account</a></li>
                                <li><a class="dropdown-item" href="#"><i class='bi bi-journal-code' ></i>Manage Account</a></li>
                                <li><a class="dropdown-item" href="#"><i class='bi bi-journals' ></i>View List</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">รายการข้อมูล Account <span>| บริษัทที่ใช้บริการ</span></h5>

                            <div class="row">
                                {{-- <div class="col-12">
                                    <div class="alert alert-info" role="alert">
                                        รายการข้อมูล Account ของบริษัทที่ใช้บริการ สามารถดูข้อมูล Account และ ผู้ใช้งานได้
                                    </div>
                                </div> --}}
                            </div>

                            <table id="tables" class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">รหัสผู้ใช้บริการ</th>
                                        <th scope="col">ชื่อผู้ใช้บริการ</th>
                                        <th scope="col">เปิดใช้บริการเมื่อ</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Admin</th>
                                        <th scope="col">Super Admin</th>
                                        <th scope="col">Job</th>
                                        <th scope="col">Location</th>
                                    </tr>
                                </thead>
                                <tbody id="tData">
                                    {{-- <tr>
                                        <td scope="row"><span class="badge bg-primary">${item.siteID}</span></td>
                                        <td>${item.site_name}</td>
                                        <td>${item.created_at}</td>
                                        <td>${item.user_count}</td>
                                        <td>${item.admin_count}</td>
                                        <td>${item.active_users_count}/${item.pending_users_count}</td>
                                        <td>${item.job_count}</td>
                                        <td>${item.location_count}</td>
                                    </tr> --}}
                                </tbody>
                            </table>
                            <p class="text-center cursor-pointer">แสดงรายการเพิ่ม</p>
                        </div>

                    </div>
                </div>
                <!-- End Top Selling -->
            </div>

            <!-- Modal -->
            <div class="modal fade" id="siteModal" tabindex="-1"  data-bs-backdrop="static" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">New Account</h5>
                            {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                            <button type="button" class="btn-close" onclick="window.location.reload()" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="dataForm" method="POST">
                                <div class="row mb-3">
                                    <label for="accountName" class="col-md-4 col-lg-3 col-form-label">ชื่อผู้ใช้บริการ</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="accountName" type="text" class="form-control" id="accountName" value="">
                                    </div>
                                </div>

                                <div id="accountUserH" hidden>

                                </div>

                                <div class="row text-center" id="btnH">
                                    <hr>
                                    <div class="col-12">
                                        <button id="spinner" class="btn btn-primary btn-sm" type="button" disabled hidden>
                                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                            Loading...
                                        </button>
                                    </div>
                                    <div class="col-12">
                                        <button id="submit" type="submit" class="btn btn-primary btn-sm px-4">บันทึกข้อมูล</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->

        </div>
    </section>
@endsection

@section('script')
<script>
    function sites() {
        $('#siteModal').modal('show');
        $('#accountName').prop('autofocus', true);
    }

    // Get Start
    $(document).ready(function() {
        showDataTable();
        showDataWidget();
    });

    // Widget
    function showDataWidget() {
        fetch(apiUrl + '/sites/total', {
            method: 'GET',
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => {
            if (!response.ok) {
                console.clear();
                // console.log('Request failed with status:', response.status);
                return;
            }
            return response.json();
        })
        .then(data => {
            // console.log(data);
            $('#total_sites').html(data.total_sites);
            $('#total_users').html(data.total_users);
            $('#total_admins').html(data.total_admins);
            $('#total_superadmin').html(data.total_superadmin);
        })
        .catch(error => {
            // console.log('Error:', error);
        });
    }

    // Table
    function showDataTable() {
        fetch(apiUrl + '/sites', {
            method: 'GET',
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => {
            if (!response.ok) {
                console.clear();
                // console.log('Request failed with status:', response.status);
                return;
            }
            return response.json();
        })
        .then(data => {
            // console.log(data);

            let html = '';
            if (data.dataSet.length === 0) {
                html += `
                    <tr>
                        <td colspan="8" class="text-center">ไม่พบข้อมูล</td>
                    </tr>
                `;
            } else {
                for (let i = 0; i < data.dataSet.length && i < 11; i++) {
                    let item = data.dataSet[i];
                    html += `
                        <tr>
                            <td scope="row"><span class="badge bg-primary">${item.siteID}</span></td>
                            <td>${item.site_name}</td>
                            <td>${item.created_at}</td>
                            <td>${item.user_count}</td>
                            <td>${item.admin_count}</td>
                            <td>${item.active_users_count}/${item.pending_users_count}</td>
                            <td>${item.job_count}</td>
                            <td>${item.location_count}</td>
                        </tr>
                    `;
                }
            }
            $('#tData').html(html);
            // console.log(html);
        })
        .catch(error => {
            // console.log('Error:', error);
        });
    }

    // New Account
    document.getElementById('dataForm').addEventListener('submit', function(event) {
        event.preventDefault(); // ป้องกันการส่งฟอร์มแบบปกติ

        $('#spinner').prop('hidden', false);
        $('#submit').prop('hidden', true);

        const form = document.getElementById('dataForm');
        const formData = new FormData(form);
        const data = {
            name: formData.get('accountName')
        };

        fetch(apiUrl + '/sites', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify(data)
        })
        // .then(response => response.json())
        .then(response => {
            $('#btnH').prop('hidden', true);
            if (!response.ok){
                console.clear();
                Swal.fire({
                    icon: 'error',
                    title: 'บันทึกข้อมูลไม่สำเร็จ',
                    text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง ข้อมูลอาจจะซ้ำกับข้อมูลเดิม',
                    showConfirmButton: false,
                    timer: 1500
                });
                return;
            }
            return response.json();
        })
        .then(data => {
            // console.log(data);

            if (data.res == '200'){
                Swal.fire({
                    icon: 'success',
                    title: 'บันทึกข้อมูลสำเร็จ',
                    showConfirmButton: false,
                    timer: 1500
                });

                let html = '';
                data.users.forEach((item, i) => {
                    $('#accountUserH').prop('hidden', false);
                    html += `
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-lg-3 col-form-label">${item.role}</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="" type="text" class="form-control" id="" value="${item.username}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-lg-3 col-form-label">รหัสผ่าน</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="" type="text" class="form-control" id="" value="${item.password}" readonly>
                            </div>
                        </div>
                    `;
                });
                html += `
                    <div class="row mb-3 text-center">
                        <label for="" class="col-12 col-form-label text-danger">* กรุณาบันทึกข้อมูลผู้ใช้งาน เพื่อใช้ในการเข้าสู่ระบบ *</label>
                    </div>
                `;
                $('#accountUserH').append(html);
                $('#accountName').prop('readonly', true);

            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'บันทึกข้อมูลไม่สำเร็จ',
                    text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง ข้อมูลอาจจะซ้ำกับข้อมูลเดิม',
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    window.location.reload();
                });
            }
        })
        .catch((error) => {
            $('#btnH').prop('hidden', true);
            // console.error('Error:', error);
        });
    });
</script>
@endsection


