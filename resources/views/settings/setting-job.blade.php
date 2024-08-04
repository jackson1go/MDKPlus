
@extends('layouts.app')
@section('style')

@endsection

@section('main')
    <div class="pagetitle">

        <h1>Settings</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                <li class="breadcrumb-item">Settings</li>
                <li class="breadcrumb-item active">กลุ่มงาน | สังกัด (JOB)</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row" id="jobShow">

                </div>
            </div>

            <div class="modal fade" id="workGroup" tabindex="-1" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">เพิ่มกลุ่มงาน</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="formJob" method="POST">
                                <div class="row mb-3">
                                    <label for="jName" class="col-md-4 col-lg-3 col-form-label">ชื่อกลุ่มงาน</label>
                                    <div class="col-md-8 col-lg-9">
                                    <input name="jName" type="text" class="form-control" id="jName" value="">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <hr>
                                    <button id="jSpinner" class="btn btn-primary btn-sm px-4" type="button" disabled hidden>
                                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                        Saving...
                                    </button>
                                    <button type="submit" id="jSubmit" class="btn btn-primary btn-sm px-4">บันทึกข้อมูล</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-12">
                <div class="card top-selling overflow-auto">

                    <div class="filter">
                        <button type="button" class="btn btn-outline-success btn-sm me-4" onclick="company()">+ เพิ่มสังกัด
                        </button>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">สังกัด/ บริษัท <span>| </span><span id="reportCount">0</span></h5>

                        <table class="table">
                            <thead class="border">
                                <tr id="topHeader">

                                </tr>
                                <tr class="text-center" id="jobHeaders">

                                </tr>
                            </thead>
                            <tbody class="text-center" id="reportTableBody">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="company" tabindex="-1" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">เพิ่มสังกัด/ บริษัท</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="formCompany" method="POST">
                                <div class="row mb-3">
                                    <label for="cName" class="col-md-4 col-lg-3 col-form-label">ชื่อสังกัด</label>
                                    <div class="col-md-8 col-lg-9">
                                    <input name="cName" type="text" class="form-control" id="cName" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">เลือกกลุ่มงาน</label>
                                    <div class="col-md-8" id="checkboxCus">

                                    </div>
                                </div>

                                <div class="text-center">
                                    <hr>
                                    <button id="cSpinner" class="btn btn-primary btn-sm px-4" type="button" disabled hidden>
                                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                        Saving...
                                    </button>
                                    <button type="submit" id="cSubmit" class="btn btn-primary btn-sm px-4">บันทึกข้อมูล</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Right side columns -->
        </div>
    </section>
@endsection

@section('script')
    <script>
        function newJob() {
            $('#workGroup').modal('show');
        }

        function company() {
            $('#company').modal('show');
        }

        // jobShow
        jobShow();
        function jobShow() {
            fetch(apiUrl + '/jobs/site/' + sessionData.site_id, {
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
                let checkboxCus = '';
                if (data.res === 200){
                    data.dataSet.forEach(item => {
                        html +=`
                            <div class="col-xxl-4 col-md-6">
                                <div class="card info-card primary-card">
                                    <div class="card-body">
                                        <h5 class="card-title">${item.job} <span>| กลุ่มงาน</span></h5>
                                        <a href="javascript:;" onclick="deleteJob(${item.id})" class="btn btn-danger btn-sm">ลบ</a>
                                    </div>
                                </div>
                            </div>
                        `;

                        checkboxCus += `
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="jobs${item.id}" name="cJob" value="${item.id}" checked="">
                                <label class="form-check-label" for="jobs${item.id}">${item.job}</label>
                            </div>
                        `;
                    });
                }
                html += `
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card success-card">
                            <div class="card-body">
                                <h5 class="card-title">เพิ่มกลุ่มงานใหม่</h5>
                                <a href="javascript:;" class="btn btn-outline-success btn-sm" onclick="newJob()">+ เพิ่มกลุ่มงาน</a>
                            </div>
                        </div>
                    </div>
                `;
                $('#jobShow').html(html);
                $('#checkboxCus').html(checkboxCus);

                // console.log(html);
            })
            .catch(error => {
                // console.log('Error:', error);
            });
        }

        // jobDelete
        function deleteJob(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You want to delete this job?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                fetch(apiUrl + '/jobs/' + id, {
                    method: 'DELETE',
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

                    if (data.res === 200){
                        Swal.fire({
                            icon: 'success',
                            title: 'Your job has been deleted.',
                            showConfirmButton: false,
                            timer: 1500
                        }).then(() => {
                            location.reload();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        });
                    }

                    // console.log(html);
                })
                .catch(error => {
                    // console.log('Error:', error);
                });
            });
        }

        // jobCreate
        document.getElementById('formJob').addEventListener('submit', function(event) {
            event.preventDefault(); // ป้องกันการส่งฟอร์มแบบปกติ

            $('#jSpinner').prop('hidden', false);
            $('#jSubmit').prop('hidden', true);

            const form = document.getElementById('formJob');
            const formData = new FormData(form);
            const data = {
                job: formData.get('jName'),
                site_id: sessionData.site_id
            };

            fetch(apiUrl + '/jobs', {
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
                if (!response.ok){
                    console.clear();
                    Swal.fire({
                        icon: 'error',
                        title: 'ข้อมูลไม่ถูกต้อง',
                        text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        $('#jSpinner').prop('hidden', true);
                        $('#jSubmit').prop('hidden', false);
                    });
                    return;
                }
                return response.json();
            })
            .then(data => {
                console.log(data);

                if (data.res == '200'){
                    window.location.reload();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'ข้อมูลไม่ถูกต้อง',
                        text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        $('#jSpinner').prop('hidden', true);
                        $('#jSubmit').prop('hidden', false);
                    });
                }
            })
            .catch((error) => {
                Swal.fire({
                    icon: 'error',
                    title: 'ข้อมูลไม่ถูกต้อง',
                    text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง',
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    $('#jSpinner').prop('hidden', true);
                    $('#jSubmit').prop('hidden', false);
                });
                // console.error('Error:', error);
            });
        });

        // Company
        // companyShow
        companyShow();
        function companyShow() {
            const siteID = 1; // กำหนด site_id ที่ต้องการ
            fetch(apiUrl + '/reports/setting-job/' + sessionData.site_id, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                // console.log(data);
                // console.log(data.report.length);

                $('#reportCount').html(data.report.length);
                let topHeader = '';
                topHeader += `
                    <td class="text-center bg-light">สังกัด</td>
                    <td colspan="${data.jobs.length}" class="text-center">กลุ่มงาน</td>
                `;
                $('#topHeader').html(topHeader);
                if (data.res === 200) {
                    const jobHeaders = document.getElementById('jobHeaders');
                    let jobHeaderHtml = '<th scope="col" class="bg-light"><h5 class="mb-0">บริษัท</h5></th>';
                    data.jobs.forEach(job => {
                        jobHeaderHtml += `<th scope="col"><h5 class="mb-0">${job.job}</h5></th>`;
                    });
                    jobHeaders.innerHTML = jobHeaderHtml;

                    const reportTableBody = document.getElementById('reportTableBody');
                    let html = '';

                    data.report.forEach(company => {
                        html += `<tr>
                            <td scope="row" class="bg-light">${company.company}</td>`;
                        company.job_counts.forEach(jobCount => {
                            html += `<td>${jobCount.count}</td>`;
                        });
                        html += `</tr>`;
                    });

                    reportTableBody.innerHTML = html;
                }
            })
            .catch(error => console.error('Error:', error));
        }

        // companyDelete
        console.log('compaany delete pending...');

        // companyUpdate
        console.log('compaany update pending...');

        // companyCreate
        document.getElementById('formCompany').addEventListener('submit', function(event) {
            event.preventDefault();

            $('#cSpinner').prop('hidden', false);
            $('#cSubmit').prop('hidden', true);

            const form = document.getElementById('formCompany');
            const formData = new FormData(form);

            // Collect the job IDs from the checkboxes
            const jobCheckboxes = document.querySelectorAll('input[name="cJob"]:checked');
            const jobIds = Array.from(jobCheckboxes).map(checkbox => checkbox.value);

            // สร้าง payload สำหรับการส่งคำขอ
            const payload = {
                company: formData.get('cName'),
                site_id: sessionData.site_id,
                job_ids: jobIds
            };

            fetch(apiUrl + '/companies', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(payload)
            })
            .then(response => response.json())
            .then(data => {
                $('#cSpinner').prop('hidden', true);
                $('#cSubmit').prop('hidden', false);

                if (data.res == '200'){
                    window.location.reload();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'ข้อมูลไม่ถูกต้อง',
                        text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        $('#cSpinner').prop('hidden', true);
                        $('#cSubmit').prop('hidden', false);
                    });
                }
            })
            .catch(error => {
                // console.error('Error:', error);
                // alert('An error occurred while creating the company.');
                // ซ่อน spinner และแสดงปุ่ม submit
                $('#cSpinner').prop('hidden', true);
                $('#cSubmit').prop('hidden', false);
            });
        });

    </script>

@endsection


