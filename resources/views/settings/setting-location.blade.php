
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
                <li class="breadcrumb-item active">ข้อมูลสถานที่ (Location)</li>
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
                        <h5 class="card-title">สถานที่ (Location)</h5>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>สังกัด</th>
                                    <th>กลุ่มสถานที่</th>
                                    <th>รหัสสถานที่</th>
                                    <th>ชื่อสถานที่</th>
                                    <th>Admin</th>
                                    <th>แม่บ้าน</th>
                                    <th>รปภ.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>SDT</td>
                                    <td>อาคาร</td>
                                    <td>123</td>
                                    <td>อาคารสำนักงานใหญ่</td>
                                    <td>2</td>
                                    <td>10</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>SDT</td>
                                    <td>อาคาร</td>
                                    <td>123</td>
                                    <td>สาขาย่อย</td>
                                    <td>2</td>
                                    <td>10</td>
                                    <td>30</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="locationModal" tabindex="-1" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">เพิ่มข้อมูลสถานที่</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="formCompany">
                                <div class="row mb-3" id="company_idH">
                                    <label for="company_id" class="col-md-4 col-lg-3 col-form-label">สังกัด/ บริษัท *</label>
                                    <div class="col-md-8 col-lg-9">
                                        <select class="form-select" id="company_id" name="company_id">

                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="contractNo" class="col-md-4 col-lg-3 col-form-label">เลขที่สัญญา</label>
                                    <div class="col-md-8 col-lg-9">
                                    <input name="contractNo" type="text" class="form-control" id="contractNo" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="locationNo" class="col-md-4 col-lg-3 col-form-label">รหัสสถานที่</label>
                                    <div class="col-md-8 col-lg-9">
                                    <input name="locationNo" type="text" class="form-control" id="locationNo" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="location" class="col-md-4 col-lg-3 col-form-label">ชื่อสถานที่ *</label>
                                    <div class="col-md-8 col-lg-9">
                                    <input name="location" type="text" class="form-control" id="location" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="type" class="col-md-4 col-lg-3 col-form-label">กลุ่มสถานที่ *</label>
                                    <div class="col-md-8 col-lg-9">
                                        <select class="form-select" id="type" name="type">
                                            <option selected value="อาคาร">อาคาร</option>
                                            <option value="สาขา">สาขา</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="subDistrict" class="col-md-4 col-lg-3 col-form-label">ตำบล/ แขวง</label>
                                    <div class="col-md-8 col-lg-9">
                                    <input name="subDistrict" type="text" class="form-control" id="subDistrict" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="district" class="col-md-4 col-lg-3 col-form-label">อำเภอ/ เขต</label>
                                    <div class="col-md-8 col-lg-9">
                                    <input name="district" type="text" class="form-control" id="district" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="province" class="col-md-4 col-lg-3 col-form-label">จังหวัด</label>
                                    <div class="col-md-8 col-lg-9">
                                    <input name="province" type="text" class="form-control" id="province" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="timeIn" class="col-md-4 col-lg-3 col-form-label">เวลาเข้างาน</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="timeIn" type="time" class="form-control" id="timeIn" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="overTimeIn" class="col-md-4 col-lg-3 col-form-label">เข้าสายได้ไม่เกิน</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="overTimeIn" type="time" class="form-control" id="overTimeIn" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="timeOut" class="col-md-4 col-lg-3 col-form-label">เวลาออกงาน</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="timeOut" type="time" class="form-control" id="timeOut" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="cName" class="col-md-4 col-lg-3 col-form-label">จุดปฏิบัติงาน</label>
                                    <div class="col-md-8 col-lg-9">
                                        <button type="button" class="btn btn-outline-success btn-sm px-4 mb-3" onclick="addMarkLocation()"><i class="fa-solid fa-location-dot"></i> เพิ่มข้อมูล</button>
                                        <div id="markLocationsContainer">

                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3" hidden>
                                    <label for="cName" class="col-md-4 col-lg-3 col-form-label">Admin</label>
                                    <div class="col-md-8 col-lg-9">
                                        <p>
                                            2. ประชาสัมพันธ์
                                            <i class="fa-solid fa-trash-can ms-4 cursor-pointer text-danger"></i>
                                        </p>
                                        <p>
                                            2. ประชาสัมพันธ์
                                            <i class="fa-solid fa-trash-can ms-4 cursor-pointer text-danger"></i>
                                        </p>
                                        <p>
                                            2. ประชาสัมพันธ์
                                            <i class="fa-solid fa-trash-can ms-4 cursor-pointer text-danger"></i>
                                        </p>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <hr>
                                    <button id="spinner" class="btn btn-primary btn-sm px-4" type="button" disabled hidden>
                                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                        Saving...
                                    </button>
                                    <button type="submit" id="submit" class="btn btn-primary btn-sm px-4">บันทึกข้อมูล</button>
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

                        <strong>กลุ่มสถานที่</strong>
                        <div class="col-12 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="changesMade" checked="">
                                <label class="form-check-label" for="changesMade">
                                อาคาร
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="newProducts" checked="">
                                <label class="form-check-label" for="newProducts">
                                สาขา
                                </label>
                            </div>
                        </div>

                        <strong>กลุ่มงาน</strong>
                        <div class="col-12 mb-3" id="jobCheckbox">

                        </div>

                        <button type="submit" class="btn btn-primary btn-sm w-100">แสดงรายการ</button>
                        <button type="submit" class="btn btn-outline-success btn-sm mt-3 w-100" onclick="locations()">+ เพิ่มสถานที่</button>
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

        // Export CSV
        console.log('Export CSV pending ...');

        // locatioShow
        console.log('location show pending ...');

        // fillter
        console.log('fillter pending ...');

        // checkBox
        jobFilter();
        function jobFilter() {
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

                let checkboxCus = '';
                if (data.res === 200){
                    data.dataSet.forEach(item => {
                        checkboxCus += `
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="jobs${item.id}" name="fJob" value="${item.id}" checked="">
                                <label class="form-check-label" for="jobs${item.id}">${item.job}</label>
                            </div>
                        `;
                    });
                }
                $('#jobCheckbox').html(checkboxCus);

                // console.log(html);
            })
            .catch(error => {
                // console.log('Error:', error);
            });
        }

        // locationUpdate
        console.log('location update pending ...');

        // locationDelete
        console.log('location delete pending ...');

        // locationCreate
        // addcompany
        if (sessionData.role === 'Customer') {
            $('#company_idH').prop('hidden', true);
            let html = '';
            html += `<option value="${sessionData.company_id}">${sessionData.company_id}</option>`;
            document.getElementById('company_id').innerHTML = html;
        } else {
            // 131144644ss
            getCompany();
        }

        function getCompany() {
            fetch(apiUrl + '/companies/site/' + sessionData.site_id, {
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

                if (data.res === 200){
                    if (data.companies.length > 0) {
                        let html = '';
                        data.companies.forEach(item => {
                            html += `<option value="${item.id}">${item.company}</option>`;
                        });
                        document.getElementById('company_id').innerHTML = html;
                    }
                }
            })
            .catch(error => {
                // console.log('Error:', error);
            });
        }

        // addMarkLocation
        let markLocations = [];

        function addMarkLocation() {
            const markLocationName = prompt("กรุณาใส่ชื่อจุดปฏิบัติงาน:");
            if (markLocationName) {
                const markLocation = {
                    markLocation: markLocationName,
                    status: 'active'
                };
                markLocations.push(markLocation);
                renderMarkLocations();
            }
        }

        function editMarkLocation(index) {
            const newMarkLocationName = prompt("แก้ไขชื่อจุดปฏิบัติงาน:", markLocations[index].markLocation);
            if (newMarkLocationName) {
                markLocations[index].markLocation = newMarkLocationName;
                renderMarkLocations();
            }
        }

        function removeMarkLocation(index) {
            markLocations.splice(index, 1);
            renderMarkLocations();
        }

        function renderMarkLocations() {
            const container = document.getElementById('markLocationsContainer');
            container.innerHTML = '';
            markLocations.forEach((markLocation, index) => {
                const div = document.createElement('div');
                div.className = 'form-check';
                div.innerHTML = `
                    <p>
                        <label class="col-form-label">${index + 1}. ${markLocation.markLocation}</label>
                        <i class="fa-solid fa-pen-nib ms-4 cursor-pointer text-dark" onclick="editMarkLocation(${index})"></i>
                        <i class="fa-solid fa-trash-can ms-3 cursor-pointer text-danger" onclick="removeMarkLocation(${index})"></i>
                    </p>
                `;
                container.appendChild(div);
            });
        }

        // formLocation
        document.getElementById('formCompany').addEventListener('submit', function (e) {
            e.preventDefault();

            $('#spinner').prop('hidden', false);
            $('#submit').prop('hidden', true);

            const form = document.getElementById('formCompany');
            const formData = new FormData(form);
            const data = {
                site_id: sessionData.site_id,
                company_id: formData.get('company_id'),
                contractNo: formData.get('contractNo'),
                locationNo: formData.get('locationNo'),
                location: formData.get('location'),
                type: formData.get('type'),
                province: formData.get('province'),
                district: formData.get('district'),
                subDistrict: formData.get('subDistrict'),
                timeIn: formData.get('timeIn'),
                timeOut: formData.get('timeOut'),
                overTimeIn: formData.get('overTimeIn'),
                mark_locations: markLocations
            };

            fetch(apiUrl + '/locations', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                // console.log(data);

                if (data.res == '200'){
                    window.location.reload();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'ข้อมูลไม่ถูกต้อง',
                        text: 'กรุณากรอกข้อมูลช่องที่มี * อีกให้ครบ',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        $('#spinner').prop('hidden', true);
                        $('#submit').prop('hidden', false);
                    });
                }
            })
            .catch(error => {
                // console.error('Error:', error);
                // alert('An error occurred while creating the location');

                $('#spinner').prop('hidden', true);
                $('#submit').prop('hidden', false);
            });
        });


    </script>

@endsection


