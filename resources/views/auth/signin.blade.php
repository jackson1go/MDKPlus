@extends('layouts.app-mb')
@section('style')

@endsection

@section('main')
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo-lg d-flex align-items-center w-auto">
                                <img src="assets/img/logo/1002.png" alt="" class="img-lg">
                                <span class="d-none d-lg-block">MaDeeKub</span>
                            </a>
                        </div>
                        <!-- End Logo -->

                        <div class="card mb-3" id="login">
                            <div class="card-body">
                                <div class="pt-2 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">เข้าสู่ระบบ</h5>
                                    <p class="text-center small">Enter your username & password to login</p>
                                </div>

                                <form class="row g-3 needs-validation" novalidate id="formLogin" method="POST">
                                    <div class="col-12">
                                        <label for="username" class="form-label">ชื่อผู้ใช้งาน</label>
                                        <input type="text" name="username" class="form-control" id="username" required>
                                        <div class="invalid-feedback">กรุณากรอกชื่อผู้ใช้งาน</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="password" class="form-label">รหัสผ่าน</label>
                                        <div class="input-group has-validation">
                                            <input type="password" name="password" class="form-control" id="password" required>
                                            <span class="input-group-text cursor-pointer" id="inputGroupPrepend"><i class="fa-solid fa-eye"></i></span>
                                            <div class="invalid-feedback">กรุณากรอกรหัสผ่าน</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                          <label class="form-check-label" for="rememberMe">จดจำฉัน</label>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <button id="spinner" class="btn btn-primary w-100" type="button" disabled hidden>
                                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                            Logging in...
                                        </button>
                                        <button class="btn btn-primary w-100" type="submit" id="submit">เข้าสู่ระบบ</button>
                                    </div>

                                    <div class="col-12 mt-0">
                                        <hr>
                                        <button class="btn btn-outline-primary w-100" type="button" onclick="window.open('{{ config('app.lineOfficial') }}', '_blank')">ลืมรหัสผ่าน</button>
                                    </div>
                                    {{-- <div class="col-12">
                                        <p class="small mb-0">คุณต้องการสมัครใช้บริการ? <a href="{{ url('app-signup') }}">สมัคร</a></p>
                                    </div> --}}
                                </form>

                            </div>
                        </div>

                        <div class="card mb-3" id="changePassword" hidden>
                            <div class="card-body">
                                <div class="pt-2 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">เปลี่ยนรหัสผ่าน</h5>
                                    <p class="text-center small">Enter your new password & confirm your password</p>
                                </div>

                                <form class="row g-3 needs-validation" novalidate id="formChangePass" method="POST">
                                    <div class="col-12">
                                        <label for="newpassword" class="form-label">รหัสผ่านใหม่</label>
                                        <div class="input-group has-validation">
                                            <input type="password" name="newpassword" class="form-control" id="newpassword" required>
                                            <span class="input-group-text cursor-pointer" id="eyeNewpass"><i class="fa-solid fa-eye"></i></span>
                                            <div class="invalid-feedback">กรุณากรอกรหัสผ่าน</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="conpassword" class="form-label">ยืนยันรหัสผ่านใหม่</label>
                                        <div class="input-group has-validation">
                                            <input type="password" name="conpassword" class="form-control" id="conpassword" required>
                                            <span class="input-group-text cursor-pointer" id="eyeConpass"><i class="fa-solid fa-eye"></i></span>
                                            <div class="invalid-feedback">กรุณากรอกรหัสผ่าน</div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <input type="hidden" id="userID" name="userID">
                                        <input type="hidden" id="oldpassword" name="oldpassword">

                                        <button id="newspinner" class="btn btn-primary w-100" type="button" disabled hidden>
                                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                            Saving password...
                                        </button>
                                        <button class="btn btn-primary w-100" type="submit" id="newsubmit">ยืนยันข้อมูล</button>
                                    </div>
                                </form>

                            </div>
                        </div>

                        <div class="credits text-center">
                            <p class="small mb-0">&copy; Copyright 2024 - <?PHP echo date("Y")?>. All Rights Reserved</p>
                            <p class="small mb-0"> Power by <a href="#">Innovation (JacksDEV)</a> | <strong>S-TIME Module</strong> </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script>
        let user = sessionStorage.getItem('members');

        if (user) {
            // user = JSON.parse(user);
            // console.log(user.userID);
            window.location.href = '{{ url('') }}';
        } else {
            sessionStorage.clear();
            console.log('No user data found in session storage.');
        }

        $(document).ready(function() {
            $('#inputGroupPrepend').click(function() {
                var input = $('#password');
                if (input.attr('type') == 'password') {
                    input.attr('type', 'text');
                    $('#inputGroupPrepend').html('<i class="fa-solid fa-eye-low-vision"></i>');
                } else {
                    input.attr('type', 'password');
                    $('#inputGroupPrepend').html('<i class="fa-solid fa-eye"></i>');
                }
            });

            $('#eyeNewpass').click(function() {
                var input = $('#newpassword');
                if (input.attr('type') == 'password') {
                    input.attr('type', 'text');
                    $('#eyeNewpass').html('<i class="fa-solid fa-eye-low-vision"></i>');
                } else {
                    input.attr('type', 'password');
                    $('#eyeNewpass').html('<i class="fa-solid fa-eye"></i>');
                }
            });

            $('#eyeConpass').click(function() {
                var input = $('#conpassword');
                if (input.attr('type') == 'password') {
                    input.attr('type', 'text');
                    $('#eyeConpass').html('<i class="fa-solid fa-eye-low-vision"></i>');
                } else {
                    input.attr('type', 'password');
                    $('#eyeConpass').html('<i class="fa-solid fa-eye"></i>');
                }
            });

            autoForm();
        });

        // Auto Form Login With Remember Me
        function autoForm() {
            if (localStorage.getItem('username') !== null) {
                $('#username').val(localStorage.getItem('username'));
                $('#password').val(localStorage.getItem('password'));
                $('#rememberMe').prop('checked', true);
            }
        }

        // Login
        document.getElementById('formLogin').addEventListener('submit', function(event) {
            event.preventDefault(); // ป้องกันการส่งฟอร์มแบบปกติ

            $('#spinner').prop('hidden', false);
            $('#submit').prop('hidden', true);

            const form = document.getElementById('formLogin');
            const formData = new FormData(form);
            const data = {
                username: formData.get('username'),
                password: formData.get('password')
            };

            fetch(apiUrl + '/login', {
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
                        title: 'ไม่พบข้อมูล',
                        text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        $('#spinner').prop('hidden', true);
                        $('#submit').prop('hidden', false);
                    });
                    return;
                }
                return response.json();
            })
            .then(data => {
                console.log(data);

                if (data.res == '200'){
                    if ($('#rememberMe').is(':checked')) {
                        localStorage.setItem('username', $('#username').val());
                        localStorage.setItem('password', $('#password').val());
                    }
                    // sessionStorage.setItem('token', data.token);
                    sessionStorage.setItem('members', JSON.stringify(data));

                    window.location.href = '{{ url('') }}';
                } else if (data.res == '201'){
                    $('#spinner').prop('hidden', true);
                    $('#submit').prop('hidden', false);

                    $('#userID').val(data.userID);
                    $('#oldpassword').val($('#password').val());

                    $('#login').prop('hidden', true);
                    $('#changePassword').prop('hidden', false);
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'ไม่พบข้อมูล',
                        text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        $('#spinner').prop('hidden', true);
                        $('#submit').prop('hidden', false);
                    });
                }
            })
            .catch((error) => {
                Swal.fire({
                    icon: 'error',
                    title: 'ไม่พบข้อมูล',
                    text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง',
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    $('#spinner').prop('hidden', true);
                    $('#submit').prop('hidden', false);
                });
                // console.error('Error:', error);
            });
        });

        // Change Password
        document.getElementById('formChangePass').addEventListener('submit', function(event) {
            event.preventDefault(); // ป้องกันการส่งฟอร์มแบบปกติ

            $('#newspinner').prop('hidden', false);
            $('#newsubmit').prop('hidden', true);

            const form = document.getElementById('formChangePass');
            const formData = new FormData(form);
            const data = {
                userID: formData.get('userID'),
                old_password: formData.get('oldpassword'),
                new_password: formData.get('newpassword'),
                new_password_confirmation: formData.get('conpassword'),
            };

            fetch(apiUrl + '/auth/changepassword', {
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
                        title: 'ไม่พบข้อมูล',
                        text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        $('#newspinner').prop('hidden', true);
                        $('#newsubmit').prop('hidden', false);
                    });
                    return;
                }
                return response.json();
            })
            .then(data => {
                // console.log(data);

                if (data.res == '200'){
                    window.location.reload();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'ไม่พบข้อมูล',
                        text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        $('#newspinner').prop('hidden', true);
                        $('#newsubmit').prop('hidden', false);
                    });
                }
            })
            .catch((error) => {
                Swal.fire({
                    icon: 'error',
                    title: 'ไม่พบข้อมูล',
                    text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง',
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    $('#newspinner').prop('hidden', true);
                    $('#newsubmit').prop('hidden', false);
                });
                // console.error('Error:', error);
            });
        });
    </script>

@endsection
