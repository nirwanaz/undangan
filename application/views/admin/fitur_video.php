    <div class="page-wrapper">
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- DATA TABLE -->
                            <h3 class="title-5 m-b-35">Data Table Video</h3>
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
                                        <i class="zmdi zmdi-plus"></i>Add Video</button>
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
                                            <th>source</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($videos)) {
                                            foreach($videos as $video) {
                                        ?>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td><?php echo $video->name ?></td>
                                            <td>
                                                <audio controls>
                                                    <source src="<?php echo base_url('assets/audio/'.$video->src) ?>" type="audio/mpeg">
                                                </audio>
                                            </td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        <?php
                                            }
                                        } else {
                                            echo sprintf('<tr class="tr-shadow"><td colspan="4">Data tidak ditemukan</td></tr>');
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
                    <h5 class="modal-title" id="formModalLabel">Add Music</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <progress></progress>
                    <form enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="musicName">Music Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="musicSrc">Upload Song</label>
                            <input type="file" class="form-control" name="file" accept="audio/*">
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
            let videoName = $('input[name="name"]').val()
            let videoFile = $('input[name="file"]')[0].files[0]
            
            fd.append('name', videoName)
            fd.append('file', videoFile)
            
            $.ajax({
            // Server to process the submit
            url: 'video/store',
            type: 'post',

            // Form Data
            data: fd,
            cache: false,
            contentType: false,
            processData: false,

            // Custom XMLHttpRequest
            xhr: function() {
                let myXhr = $.ajaxSettings.xhr()
                if (myXhr.upload) {
                    // For handling the progress upload
                    myXhr.upload.addEventListener('progress', function (e) {
                    if (e.lengthComputable) {
                        $('progress').attr({
                        value: e.loaded,
                        max: e.total
                        })
                    }
                    }, false)
                }
                return myXhr
            },
            success: function (res) {
                let response = JSON.parse(res)
                if (response.success) {
                window.location.reload()
                } else {
                alert(response.msg)
                }
            }
            })
        })

        $('.delete').on('click', function (e) {
            e.preventDefault()
            let id = $(this).data('id')

            $.ajax({
                type: 'post',
                url: 'video/delete',

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