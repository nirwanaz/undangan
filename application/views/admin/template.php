    <div class="page-wrapper">
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- DATA TABLE -->
                            <h3 class="title-5 m-b-35">Data Table Template</h3>
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
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <button class="au-btn-filter">
                                        <i class="zmdi zmdi-filter-list"></i>filters</button>
                                </div>
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#formModal">
                                        <i class="zmdi zmdi-plus"></i>Add Template</button>

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
                                            <th>Name</th>
                                            <th>Thumbnail</th>
                                            <th>Url</th>
                                            <th>Created_at</th>
                                            <th>Updated_at</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($templates)) {
                                            foreach($templates as $template) {
                                        ?>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td><?php echo $template->name ?></td>
                                            <td>
                                                <img src="<?php echo base_url('/assets/image/thumbnail/'.$template->thumbnail) ?>" alt="<?php echo $template->name ?>" width="200" height="200">
                                            </td>
                                            <td><?php echo $template->url ?></td>
                                            <td><?php echo $template->created_at ?></td>
                                            <td><?php echo $template->updated_at ?></td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item delete" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        <?php
                                            }
                                        } else {
                                            echo sprintf('<tr class="tr-shadow"><td colspan="6">Data tidak ditemukan</td></tr>');
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="formModal" role="dialog" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalLabel">Add Template</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="templateName">Template Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="templateValue">Template Thumbnail</label>
                            <input type="file" class="form-control" name="thumbnail" accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label for="templateName">Template Link</label>
                            <input type="text" class="form-control" name="link">
                        </div>
                        <div class="mb-3 text-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.submit').on('click', function () {
            const fd = new FormData()
            let templateName = $('input[name="name"]').val()
            let templateThumbnail = $('input[name="thumbnail"]')[0].files[0]
            let templateLink = $('input[name="link"]').val()

            fd.append('name', templateName)
            fd.append('file', templateThumbnail)
            fd.append('link', templateLink)
            
            $.ajax({
            // Server to process the submit
            url: 'template/store',
            type: 'post',

            // Form Data
            data: fd,
            cache: false,
            contentType: false,
            processData: false,

            success: function (res) {
                let response = JSON.parse(res)
                if (response.data.success) {
                window.location.reload()
                } else {
                alert(response.data.msg)
                }
            }
            })
        })

        $('.delete').on('click', function (e) {
            e.preventDefault()
            let id = $(this).data('id')

            $.ajax({
                type: 'post',
                url: 'template/delete',

                data: { id: id },
                cache: false,
                success: function(res) {
                    let response = JSON.parse(res)
                    if (response.data.success) return console.log(response.data.msg)

                    console.log(response.data.msg)
                }
            })
        })
    </script>