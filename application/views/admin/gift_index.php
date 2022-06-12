<div class="container">
  <div class="row">
    <div class="col-md">
      <div class="gift">
        <div class="gift-header">
          <h1>Gift</h1>
        </div>
        <div class="gift-content">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">Add Gift Method</button>
          <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="formModalLabel">Add Gift Method</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <progress></progress>
                  <form enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="giftName">Gift&nbsp;Method&nbsp;Name</label>
                      <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                      <label for="giftBg">Upload&nbsp;Image</label>
                      <input type="file" class="form-control" name="file" accept="image/*">
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
            $table_template = array(
              'table_open' => '<table class="table table-responsive">',

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

              'row_alt_start' => '<tr>',
              'row_alt_end' => '</tr>',
              'cell_alt_start' => '<td>',
              'cell_alt_end' => '</td>',

              'table_close' => '</table>'

            );

            $this->table->set_template($table_template);
            $this->table->set_empty("&nbsp;");
            $this->table->set_heading(array(
              array('data' => '#', 'style' => 'width: 5%'), 
              array('data' => 'Name', 'style' => 'width: 45%'), 
              array('data' => 'Source', 'style' => 'width: 35%'), 
              'Action'));
            
            if (!empty($gifts)) {
              $num=1;
              foreach($gifts as $gift) {
                $this->table->add_row(array(
                  $num++,
                  $gift->name,
                  sprintf('<img src="%s" alt="%s" width="100" height="50">', base_url('/undangan/assets/image/gift/'.$gift->background), $gift->name),
                  sprintf('<a class="btn delete" data-id="%s"><span class="fa-solid fa-trash"></span></a>', $gift->gift_id)
                ));

              }
            } else {
              $this->table->add_row(array('data' => '-Empty-', 'colspan' => 4, 'align' => 'center'));
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
    let giftName = $('input[name="name"]').val()
    let giftFile = $('input[name="file"]')[0].files[0]
    
    fd.append('name', giftName)
    fd.append('file', giftFile)
    
    $.ajax({
      // Server to process the submit
      url: 'gift/store',
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
          url: 'gift/delete',

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
