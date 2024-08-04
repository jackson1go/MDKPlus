
@extends('layouts.app-mb')
@section('style')

@endsection

@section('main')
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xg-4 col-lg-5 col-md-6 col-sm-12 d-flex flex-column align-items-center justify-content-center">

                        {{-- <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="assets/img/logo/1002.png" alt="">
                                <span class="d-none d-lg-block">MaDeeKub</span>
                            </a>
                        </div> --}}
                        <!-- End Logo -->

                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">ข้อมูลสมาชิก</h5>
                                    <p class="text-center small">กรุณากรอกข้อมูลให้ครบทุกช่อง เพื่อดำเนินการสมัครสมาชิก</p>
                                </div>

                                <form class="row g-3 needs-validation" novalidate>
                                    <div class="col-12">
                                        <label for="fname" class="form-label">ชื่อ-นามสกุล *</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="fname" class="form-control" id="fname" required>
                                            <input type="text" name="lname" class="form-control" id="lname" required>
                                            <div class="invalid-feedback">กรุณากรอกข้อมูลให้ครบ</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="empID" class="form-label">รหัสพนักงาน *</label>
                                        <input type="text" name="empID" class="form-control" id="empID" required>
                                        <div class="invalid-feedback">กรุณากรอกข้อมูลให้ครบ</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="phone" class="form-label">เบอร์โทรศัพท์ *</label>
                                        <input type="text" name="phone" class="form-control" id="phone" required>
                                        <div class="invalid-feedback">กรุณากรอกข้อมูลให้ครบ</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="site" class="form-label">สังกัดบริษัท *</label>
                                        <input type="text" name="site" class="form-control" id="site" required>
                                        <div class="invalid-feedback">กรุณากรอกข้อมูลให้ครบ</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="site" class="form-label">สังกัดบริษัท *</label>
                                        <select class="form-select cursor-pointer" required>
                                            <option selected="">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <div class="invalid-feedback">กรุณากรอกข้อมูลให้ครบ</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="site" class="form-label">สังกัดหน่วยงาน *</label>
                                        <select class="form-select cursor-pointer" required>
                                            <option selected="">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <div class="invalid-feedback">กรุณากรอกข้อมูลให้ครบ</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="site" class="form-label">สาขา *</label>
                                        <select class="form-select cursor-pointer" required>
                                            <option selected="">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <div class="invalid-feedback">กรุณากรอกข้อมูลให้ครบ</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="site" class="form-label">จุดปฏิบัติงาน *</label>
                                        <select class="form-select cursor-pointer" required>
                                            <option selected="">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <div class="invalid-feedback">กรุณากรอกข้อมูลให้ครบ</div>
                                    </div>

                                    {{-- <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                            <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a> *</label>
                                            <div class="invalid-feedback">You must agree before submitting.</div>
                                        </div>
                                    </div> --}}
                                    <div class="col-12 mt-4">
                                        <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">คุณมีบัญชีใช้บริการแล้ว? <a href="{{ url('login') }}">เข้าสู่ระบบ</a></p>
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
        function locations() {
            $('#locationModal').modal('show');
        }
    </script>

@endsection


