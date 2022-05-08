<!-- begin:: Aside -->
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside" style="background-color: rgb(51, 155, 65);">
    <!-- begin:: Aside -->
    <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
        <div >
            
            <h4>JR HOSPITALS</h4>
        </div>

        <!-- <div class="kt-aside__brand-tools">
            <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler"><span></span></button>
        </div> -->
    </div>
    <!-- end:: Aside -->    <!-- begin:: Aside Menu -->
    <div>
        <div id="kt_aside_menu"
             class="kt-aside-menu "
             data-ktmenu-vertical="1"
             data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">

            <ul class="kt-menu__nav ">
                <li class="kt-menu__section kt-menu__section--first">
                    <h4 class="kt-menu__section-text">Dashboard</h4>
                    <i class="kt-menu__section-icon flaticon-more-v2"></i>
                </li>

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon2-files-and-folders"></i><span
                            class="kt-menu__link-text">Departments</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                    class="kt-menu__link"><span class="kt-menu__link-text">Employees</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('departments.create')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet flaticon2-plus"><span></span></i><span
                                        class="kt-menu__link-text">Add Department</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('departments.index')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet flaticon2-file-1"><span></span></i><span
                                        class="kt-menu__link-text">Departments List</span></a></li>
                        </ul>
                    </div>
                </li>

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon2-avatar"></i><span
                            class="kt-menu__link-text">Employees</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                    class="kt-menu__link"><span class="kt-menu__link-text">Employees</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('doctors.create')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet flaticon2-plus"><span></span></i><span
                                        class="kt-menu__link-text">Add Employee</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('doctors.index')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet flaticon2-file-1"><span></span></i><span
                                        class="kt-menu__link-text">Employee List</span></a></li>
                        </ul>
                    </div>
                </li>

                </li>

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon2-user-1"></i><span
                            class="kt-menu__link-text">Administration</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                      class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Nurses</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('nurses.create')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Add Nurse</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('nurses.index')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Nurses List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                      class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Pharmacists</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('pharmacists.create')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Add Pharmacist</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('pharmacists.index')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Pharmacists List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                      class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Laboratorists</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('nurses.create')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Add Laboratorist</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('laboratorists.index')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Laboratorists List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                      class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Receptionists</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('receptionists.create')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Add Receptionist</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('receptionists.index')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Receptionists List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                      class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Accountants</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('accountants.create')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Add Accountant</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('accountants.index')}}"
                                                                                           class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Accountants List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                </li>

                

                
                            </li>
                            
                                        </li>
                                    </ul>
                                </div>
                            </li>


                        </ul>
                    </div>
                </li>

                
            </ul>
        </div>
    </div>
    <!-- end:: Aside Menu --></div>
<!-- end:: Aside -->
