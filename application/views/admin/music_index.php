<div class="container">
  <div class="row">
    <div class="col-md">
      <div class="music">
        <div class="music-header">
          <h1>Music</h1>
        </div>
        <div class="music-content">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">Add Music</button>
          <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
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
                    <div class="mb-3">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary submit">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- End of modal -->
          <?php
            $table_class = '<table class="table table-data2">';
            $check_box = '<label class="au-checkbox"><input type="checkbox"><span class="au-checkmark"></span></label>';
            $table_template = array(
              'table_open' => $table_class,

              'thead_open' => '<thead>',
              'thead_close' => '</thead>',

              'heading_row_start' => '<tr>',
              'heading_row_end' => '</tr>',
              'heading_cell_start' => '<th>',
              'heading_cell_end' => '</th>',

              'tbody_open' => '<tbody>',
              'tbody_close' => '</tbody>',

              'row_start' => '<tr>',
              'row_end' => '</tr>',
              'cell_start' => '<td>',
              'cell_end' => '</td>',

              'row_alt_start' => '<tr class="tr-shadow">',
              'row_alt_end' => '</tr>',
              'cell_alt_start' => '<td>',
              'cell_alt_end' => '</td>',

              'table_close' => '</table>'

            );

            $this->table->set_template($table_template);
            $this->table->set_empty("&nbsp;");
            $this->table->set_heading(array(
              array('data' => $check_box, 'style' => 'width: 5%'), 
              array('data' => 'Name', 'style' => 'width: 45%'), 
              array('data' => 'Source', 'style' => 'width: 35%'), 
              'Action'));
            
            if (!empty($musics)) {
              foreach($musics as $music) {
                $this->table->add_row(array(
                  $check_box,
                  $music->name,
                  sprintf('<audio controls><source src="%s" type="audio/mpeg"></audio>', base_url('/undangan/assets/audio/'.$music->src)),
                  sprintf('<a class="btn delete" data-id="%s"><span class="fa-solid fa-trash"></span></a>', $music->music_id)
                ));

              }
            } else {
              $this->table->add_row(array('data' => 'Data Not Found', 'colspan' => 4, 'align' => 'center'));
            }
            
            echo $this->table->generate();
            // Clear data table
            $this->table->clear();
          ?>
          
        </div>
        <!-- End of music content -->
      </div>
      <!-- End of music -->
      
    </div>
  </div>
</div>
<script>
  $('.submit').on('click', function () {
    const fd = new FormData()
    let musicName = $('input[name="name"]').val()
    let musicFile = $('input[name="file"]')[0].files[0]
    
    fd.append('name', musicName)
    fd.append('file', musicFile)
    
    $.ajax({
      // Server to process the submit
      url: 'music/store',
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
          url: 'music/delete',

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
