    <div class="page-wrapper">
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- DATA TABLE -->
                            <h3 class="title-5 m-b-35">Data Table User</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <select class="js-select2" name="property">
                                            <option selected="selected">All Properties</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--light rs-select2--sm">
                                        <select class="js-select2" name="time">
                                            <option selected="selected">Today</option>
                                            <option value="">3 Days</option>
                                            <option value="">1 Week</option>
                                        </select    >
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <button class="au-btn-filter">
                                        <i class="zmdi zmdi-filter-list"></i>filters</button>
                                </div>
                                <div class="table-data__tool-right">
                                    <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="<?php echo base_url('index.php/admin/membership/add') ?>">
                                        <i class="zmdi zmdi-plus"></i>Add User</a>
                                    
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </th>
                                            <th>name</th>
                                            <th>username</th>
                                            <th>email</th>
                                            <th>date</th>
                                            <th>status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if (empty($users)) {
                                                echo sprintf('<tr class="tr-shadow"><td colspan="7" align="center">Data tidak ditemukan</td></tr>');
                                            } else {
                                                foreach($users as $user) {
                                        ?>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox" data-id="<?php echo $user->user_id ?>">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td><?php echo $user->firstname.' '.$user->lastname ?></td>
                                            <td>
                                                <span class="block-text"><?php echo $user->username ?></span>
                                            </td>
                                            <td>
                                                <span class="block-email"><?php echo $user->email ?></span>
                                            </td>
                                            <td><?php echo $user->created_at ?></td>
                                            <td>
                                                <span class="status--process"><?php echo $user->active == '1' ? 'active' : 'not active' ?></span>
                                            </td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Deactive">
                                                        <i class="zmdi zmdi-forbidden"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        <?php
                                                }
                                            }
                                        ?>                                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MAIN CONTAINER -->
            </div>
            <!-- END PAGE CONTAINER -->
        </div>
    </div>