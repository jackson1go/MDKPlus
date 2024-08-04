<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <div id="pathA" hidden>
            <li class="nav-heading">Dashboards</li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? '' : 'collapsed' }}" href="{{ url('') }}">
                    <i class="bi bi-grid"></i>
                    <span>ภาพรวม</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  {{ Request::is('dashboard-time') ? '' : 'collapsed' }}" href="{{ url('dashboard-time') }}">
                    <i class="bi bi-clipboard-check"></i>
                    <span>ข้อมูลการลงเวลา</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard-site') ? '' : 'collapsed' }}" href="{{ url('dashboard-site') }}">
                    <i class="bi bi-building"></i>
                    <span>สถานะของสาขา</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin-request') ? '' : 'collapsed' }}" href="{{ url('admin-request') }}">
                    <i class="bi bi-person-bounding-box"></i>
                    <span>คำขอ Admin</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                    href="#">
                    <i class="bi bi-menu-button-wide"></i><span>ข้อมูลทั้งหมด</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('mems-user') }}">
                            <i class="bi bi-circle"></i><span>ผู้ลงเวลา[2066]</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('mems-admin') }}">
                            <i class="bi bi-circle"></i><span>สาขา/อาคาร[837]</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('mems-superadmin') }}">
                            <i class="bi bi-circle"></i><span>ผู้อนุมัติ[788]</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Dashboard Nav -->

            <li class="nav-heading mt-4">Reports</li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('report-time') ? '' : 'collapsed' }}" href="{{ url('report-time') }}">
                    <i class="bi bi-layout-text-window-reverse"></i>
                    <span>รายงานสรุปการลงเวลา</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('report-person') ? '' : 'collapsed' }}" href="{{ url('report-person') }}">
                    <i class="bi bi-layout-text-window-reverse"></i>
                    <span>รายงานสรุปตามบุคคล</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('report-location') ? '' : 'collapsed' }}" href="{{ url('report-location') }}">
                    <i class="bi bi-layout-text-window-reverse"></i>
                    <span>รายงานสรุปตามสถานที่</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('report-system') ? '' : 'collapsed' }}" href="{{ url('report-system') }}">
                    <i class="bi bi-layout-text-window-reverse"></i>
                    <span>รายงานการใช้งานระบบ</span>
                </a>
            </li>
            <!-- End Report Nav -->

            <li class="nav-heading mt-4">Members</li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('mems-user') ? '' : 'collapsed' }}" href="{{ url('mems-user') }}">
                    <i class="bi bi-people"></i>
                    <span>ผู้ใช้งาน (USER)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('mems-admin') ? '' : 'collapsed' }}" href="{{ url('mems-admin') }}">
                    <i class="bi bi-person"></i>
                    <span>ผู้อนุมัติ (ADMIN)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('mems-superadmin') ? '' : 'collapsed' }}" href="{{ url('mems-superadmin') }}">
                    <i class="bi bi-person-check"></i>
                    <span>ผู้ดูแลระบบ (SUPER ADMIN)</span>
                </a>
            </li>
            <!-- End Member Nav -->

            <li class="nav-heading mt-4">Settings</li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('setting-location') ? '' : 'collapsed' }}" href="{{ url('setting-location') }}">
                    <i class="bi bi-pin-map"></i>
                    <span>ข้อมูลสถานที่ (Location)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('setting-job') ? '' : 'collapsed' }}" href="{{ url('setting-job') }}">
                    <i class="bi bi-table"></i>
                    <span>กลุ่มงาน/สังกัด (JOB)</span>
                </a>
            </li>
            <!-- End Setting Nav -->
        </div>

        <div id="pathB" hidden>
            <li class="nav-heading mt-4">Super Owner Only</li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('owner-overview') ? '' : 'collapsed' }}" href="{{ url('owner-overview') }}">
                    <i class="bi bi-grid"></i>
                    <span>ภาพรวมของระบบ</span>
                </a>
            </li>
            <!-- End Super Owner Page Nav -->
        </div>

        <li class="nav-heading mt-4">Documents</li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('document') ? '' : 'collapsed' }}" href="{{ url('') }}">
                <i class="bi bi-journal-text"></i>
                <span>User Manual</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('support') ? '' : 'collapsed' }}" href="javascript:;" onclick="window.open('{{ config('app.lineOfficial') }}', '_blank')">
                <i class="bi bi-life-preserver"></i>
                <span>Support</span>
            </a>
        </li>
        <!-- End Document Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="javascript:;" onclick="logout()">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
            </a>
        </li>
        <!-- End Login Page Nav -->

    </ul>

</aside><!-- End Sidebar-->
