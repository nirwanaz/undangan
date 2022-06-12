<!DOCTYPE html>
<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-10 bg-info">
          <h5 class="text-center">Choose ur Wedding Card Template</h5>
          <div class="row">
            <?php foreach(range(1,5) as $number) { ?>
              <div class="col-md-3 col-lg-4">
                <div class="card m-2 bg-dark">
                  <img 
                    src="https://cdn.pixabay.com/photo/2022/01/02/22/06/couple-6911271_960_720.png" 
                    alt="card-img"
                    class="card-img-top" >
                  
                  <div class="card-body">
                    <h5 class="card-title"><?php echo 'Template'.$number ?></h5>
                    <a href="#" class="btn btn-primary w-100">See</a>
                  </div>
                </div>
              </div>
            <?php } ?> 
          </div>
                
        </div>
      </div>
      
    </div>
  </body>
</html>