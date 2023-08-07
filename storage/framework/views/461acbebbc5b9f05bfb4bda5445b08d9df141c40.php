<!-- Left Sidebar start-->
<div class="side-menu-fixed">
    <div class="scrollbar side-menu-bg">
        <ul class="nav navbar-nav side-menu" id="sidebarnav">
            <!-- menu item Dashboard-->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
                    <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text"><?php echo e(trans('main-sidebar.Dashboard')); ?></span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
                </a>
                <ul id="dashboard" class="collapse" data-parent="#sidebarnav">
                    <li> <a href="index.html"><?php echo e(trans('main-sidebar.Dashboard 01')); ?></a> </li>
                    <li> <a href="index-02.html"><?php echo e(trans('main-sidebar.Dashboard 02')); ?></a> </li>
                    <li> <a href="index-03.html"><?php echo e(trans('main-sidebar.Dashboard 03')); ?></a> </li>
                    <li> <a href="index-04.html"><?php echo e(trans('main-sidebar.Dashboard 04')); ?></a> </li>
                    <li> <a href="index-05.html"><?php echo e(trans('main-sidebar.Dashboard 05')); ?></a> </li>
                </ul>
            </li>
            <!-- menu title -->
            <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title"><?php echo e(trans('main-sidebar.Components')); ?> </li>
            <!-- menu item Elements-->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
                    <div class="pull-left"><i class="ti-palette"></i><span class="right-nav-text"><?php echo e(trans('main-sidebar.Elements')); ?></span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
                </a>

                <ul id="elements" class="collapse" data-parent="#sidebarnav">
                    <li><a href="accordions.html"> <?php echo e(trans('main-sidebar.Accordions')); ?></a></li>
                    <li><a href="alerts.html"> <?php echo e(trans('main-sidebar.Alerts')); ?></a></li>
                    <li><a href="button.html"> <?php echo e(trans('main-sidebar.Button')); ?></a></li>
                    <li><a href="colorpicker.html"> <?php echo e(trans('main-sidebar.Colorpicker')); ?></a></li>
                    <li><a href="dropdown.html"> <?php echo e(trans('main-sidebar.Dropdown')); ?></a></li>
                    <li><a href="lists.html"> <?php echo e(trans('main-sidebar.lists')); ?></a></li>
                    <li><a href="modal.html"> <?php echo e(trans('main-sidebar.modal')); ?></a></li>
                    <li><a href="nav.html"> <?php echo e(trans('main-sidebar.nav')); ?></a></li>
                    <li><a href="nicescroll.html"> <?php echo e(trans('main-sidebar.nicescroll')); ?></a></li>
                    <li><a href="pricing-table.html"> <?php echo e(trans('main-sidebar.pricing table')); ?></a></li>
                    <li><a href="ratings.html"> <?php echo e(trans('main-sidebar.ratings')); ?></a></li>
                    <li><a href="date-picker.html"> <?php echo e(trans('main-sidebar.date picker')); ?></a></li>
                    <li><a href="tabs.html"> <?php echo e(trans('main-sidebar.tabs')); ?></a></li>
                    <li><a href="typography.html"> <?php echo e(trans('main-sidebar.typography')); ?></a></li>
                    <li><a href="popover-tooltips.html"> <?php echo e(trans('main-sidebar.Popover tooltips')); ?></a></li>
                    <li><a href="progress.html"> <?php echo e(trans('main-sidebar.progress')); ?></a></li>
                    <li><a href="switch.html"> <?php echo e(trans('main-sidebar.switch')); ?></a></li>
                    <li><a href="sweetalert2.html"> <?php echo e(trans('main-sidebar.sweetalert2')); ?></a></li>
                    <li><a href="touchspin.html"> <?php echo e(trans('main-sidebar.touchspin')); ?></a></li>
                </ul>
            </li>
            <!-- menu item calendar-->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menu">
                    <div class="pull-left"><i class="ti-calendar"></i><span class="right-nav-text"> <?php echo e(trans('main-sidebar.calendar')); ?></span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
                </a>
                <ul id="calendar-menu" class="collapse" data-parent="#sidebarnav">
                    <li> <a href="calendar.html"><?php echo e(trans('main-sidebar.Events Calendar')); ?> </a> </li>
                    <li> <a href="calendar-list.html"><?php echo e(trans('main-sidebar.List Calendar')); ?></a> </li>
                </ul>
            </li>
            <!-- menu item todo-->
            <li>
                <a href="todo-list.html"><i class="ti-menu-alt"></i><span class="right-nav-text"> <?php echo e(trans('main-sidebar.Todo list')); ?> </span> </a>
            </li>
            <!-- menu item chat-->
            <li>
                <a href="chat-page.html"><i class="ti-comments"></i><span class="right-nav-text"> <?php echo e(trans('main-sidebar.Chat')); ?>  </span></a>
            </li>
            <!-- menu item mailbox-->
            <li>
                <a href="mail-box.html"><i class="ti-email"></i><span class="right-nav-text"> <?php echo e(trans('main-sidebar.Mail box')); ?></span> <span class="badge badge-pill badge-warning float-right mt-1">HOT</span> </a>
            </li>
            <!-- menu item Charts-->

            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#chart">
                    <div class="pull-left"><i class="ti-pie-chart"></i><span class="right-nav-text"> <?php echo e(trans('main-sidebar.Charts')); ?> </span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
                </a>
                <ul id="chart" class="collapse" data-parent="#sidebarnav">
                    <li> <a href="chart-js.html"><?php echo e(trans('main-sidebar.Chart.js')); ?> </a> </li>
                    <li> <a href="chart-morris.html"><?php echo e(trans('main-sidebar.Chart morris')); ?>  </a> </li>
                    <li> <a href="chart-sparkline.html"><?php echo e(trans('main-sidebar.Chart Sparkline')); ?> </a> </li>
                </ul>
            </li>

            <!-- menu font icon-->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#font-icon">
                    <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">  <?php echo e(trans('main-sidebar.font icon')); ?></span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
                </a>
                <ul id="font-icon" class="collapse" data-parent="#sidebarnav">
                    <li> <a href="fontawesome-icon.html"> <?php echo e(trans('main-sidebar.font Awesome')); ?></a> </li>
                    <li> <a href="themify-icons.html"> <?php echo e(trans('main-sidebar.Themify icons')); ?></a> </li>
                    <li> <a href="weather-icon.html"> <?php echo e(trans('main-sidebar.Weather icons')); ?></a> </li>
                </ul>
            </li>

            <!-- menu title -->
            <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title"> <?php echo e(trans('main-sidebar.Widgets, Forms & Tables')); ?>  </li>
            <!-- menu item Widgets-->
            <li>
                <a href="widgets.html"><i class="ti-blackboard"></i><span class="right-nav-text"> <?php echo e(trans('main-sidebar.Widgets')); ?> </span> <span class="badge badge-pill badge-danger float-right mt-1">59</span> </a>
            </li>
            <!-- menu item Form-->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#Form">
                    <div class="pull-left"><i class="ti-files"></i><span class="right-nav-text"> <?php echo e(trans('main-sidebar.Form & Editor')); ?> </span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
                </a>
                <ul id="Form" class="collapse" data-parent="#sidebarnav">
                    <li> <a href="editor.html"> <?php echo e(trans('main-sidebar.Editor')); ?> </a> </li>
                    <li> <a href="editor-markdown.html"> <?php echo e(trans('main-sidebar.Editor Markdown')); ?> </a> </li>
                    <li> <a href="form-input.html"> <?php echo e(trans('main-sidebar.Form input')); ?> </a> </li>
                    <li> <a href="form-validation-jquery.html"> <?php echo e(trans('main-sidebar.form validation jquery')); ?> </a> </li>
                    <li> <a href="form-wizard.html"> <?php echo e(trans('main-sidebar.form wizard')); ?> </a> </li>
                    <li> <a href="form-repeater.html"> <?php echo e(trans('main-sidebar.form repeater')); ?> </a> </li>
                    <li> <a href="input-group.html"> <?php echo e(trans('main-sidebar.input group')); ?> </a> </li>
                    <li> <a href="toastr.html"> <?php echo e(trans('main-sidebar.toastr')); ?> </a> </li>
                </ul>
            </li>
            <!-- menu item table -->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#table">
                    <div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text"><?php echo e(trans('main-sidebar.data table')); ?></span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
                </a>
                <ul id="table" class="collapse" data-parent="#sidebarnav">
                    <li> <a href="data-html-table.html"><?php echo e(trans('main-sidebar.Data html table')); ?>  </a> </li>
                    <li> <a href="data-local.html"><?php echo e(trans('main-sidebar.Data local')); ?>  </a> </li>
                    <li> <a href="data-table.html"><?php echo e(trans('main-sidebar.Data table')); ?>  </a> </li>
                </ul>
            </li>
            <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">  <?php echo e(trans('main-sidebar.More Pages')); ?> </li>
            <!-- menu item Custom pages-->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#custom-page">
                    <div class="pull-left"><i class="ti-file"></i><span class="right-nav-text"><?php echo e(trans('main-sidebar.Custom pages')); ?></span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
                </a>
                
                <ul id="custom-page" class="collapse" data-parent="#sidebarnav">
                    <li> <a href="projects.html"><?php echo e(trans('main-sidebar.projects')); ?></a> </li>
                    <li> <a href="project-summary.html"><?php echo e(trans('main-sidebar.Projects summary')); ?></a> </li>
                    <li> <a href="profile.html"><?php echo e(trans('main-sidebar.profile')); ?></a> </li>
                    <li> <a href="app-contacts.html"><?php echo e(trans('main-sidebar.App contacts')); ?></a> </li>
                    <li> <a href="contacts.html"><?php echo e(trans('main-sidebar.Contacts')); ?></a> </li>
                    <li> <a href="file-manager.html"><?php echo e(trans('main-sidebar.file manager')); ?></a> </li>
                    <li> <a href="invoice.html"><?php echo e(trans('main-sidebar.Invoice')); ?></a> </li>
                    <li> <a href="blank.html"><?php echo e(trans('main-sidebar.Blank page')); ?></a> </li>
                    <li> <a href="layout-container.html"><?php echo e(trans('main-sidebar.layout container')); ?></a> </li>
                    <li> <a href="error.html"><?php echo e(trans('main-sidebar.Error')); ?></a> </li>
                    <li> <a href="faqs.html"><?php echo e(trans('main-sidebar.faqs')); ?></a> </li>
                </ul>
            </li>
            <!-- menu item Authentication-->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#authentication">
                    <div class="pull-left"><i class="ti-id-badge"></i><span class="right-nav-text"> <?php echo e(trans('main-sidebar.Authentication')); ?></span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
                </a>
                <ul id="authentication" class="collapse" data-parent="#sidebarnav">
                    <li> <a href="login.html"> <?php echo e(trans('main-sidebar.login')); ?></a> </li>
                    <li> <a href="register.html"> <?php echo e(trans('main-sidebar.register')); ?></a> </li>
                    <li> <a href="lockscreen.html"> <?php echo e(trans('main-sidebar.Lock screen')); ?></a> </li>
                </ul>
            </li>
            <!-- menu item maps-->
            <li>
                <a href="maps.html"><i class="ti-location-pin"></i><span class="right-nav-text"><?php echo e(trans('main-sidebar.maps')); ?></span> <span class="badge badge-pill badge-success float-right mt-1">06</span></a>
            </li>
            <!-- menu item timeline-->
            <li>
                <a href="timeline.html"><i class="ti-panel"></i><span class="right-nav-text"><?php echo e(trans('main-sidebar.timeline')); ?></span> </a>
            </li>
            <!-- menu item Multi level-->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#multi-level"><div class="pull-left"><i class="ti-layers"></i><span class="right-nav-text"><?php echo e(trans('main-sidebar.Multi level Menu')); ?></span></div><div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                <ul id="multi-level" class="collapse" data-parent="#sidebarnav">
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#auth"><?php echo e(trans('main-sidebar.Level item 1')); ?><div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                        <ul id="auth" class="collapse">
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#login">Level item 1.1<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                                <ul id="login" class="collapse">
                                    <li>
                                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#invoice">level item 1.1.1<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                                        <ul id="invoice" class="collapse">
                                            <li> <a href="#">level item 1.1.1.1</a> </li>
                                            <li> <a href="#">level item 1.1.1.2</a> </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li> <a href="#">level item 1.2</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#error"><?php echo e(trans('main-sidebar.level item 2')); ?><div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                        <ul id="error" class="collapse" >
                            <li> <a href="#">level item 2.1</a> </li>
                            <li> <a href="#">level item 2.2</a> </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<!-- Left Sidebar End-->
<?php /**PATH F:\courses\laravel\project-pos\resources\views/layouts/backend/main-sidebar.blade.php ENDPATH**/ ?>