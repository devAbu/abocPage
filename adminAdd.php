
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <!-- TODO: napravit logo i dodat ga -->
    <!-- TODO: stranica mora bit responisve -->

    <title>ABOC</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<link href="toastr.css" rel="stylesheet"/>
<script src="toastr.js"></script>

</head>

<body>
    <h1></h1>
    <button class='btn btn-success' data-toggle="collapse" data-target="#form">Add new</button>

    <div class="collapse mt-3" id="form">
        <div class="card card-body">
           <div class="container">
               <div class="row">
                   <div class="col-12">
                       <label for="name">Name: </label>
                       <input type="text" class="form-control" id="name" name="name" placeholder="Name...">
                   </div>
                   <div class="col-12">
                       <label for="description">Description: </label>
                       <input type="text" class="form-control" id="description" name="description" placeholder="Description...">
                   </div>
                   <div class="col-12">
                       <label for="link">Link: </label>
                       <input type="text" class="form-control" id="link" name="link" placeholder="Link...">
                   </div>
                   <div class="col-12 mt-2">
                       <button class="btn btn-success" id='submit'>Submit</button>
                   </div>
               </div>
           </div>
        </div>
    </div>

     <?php
    require 'connection.php';
    $sql = "SELECT * FROM projects";
    $result = $dbc->query($sql);
    $count = $result->num_rows;
    if ($count > 0) {
      while ($row = $result->fetch_assoc()) {
        echo '
                    <form method="post" action="delete.php">
                    <input type="number" value="' . $row["ID"] . '" name="id" hidden/>
                      <div class="projectWrap col-12 col-md-6">
                          <div class="container">
                              <h3 class="projectHead">' . $row["name"] . '</h3>
                              <div class="row">
                                  <div class="col-12">
                                      <h6 class="projectSubHead">' . $row["description"] . '</h6>
                                      <img src="images/landing.jpg" width="100%">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <button type="button" class=" btn btn-warning " data-toggle="collapse" data-target="#update' . $row["ID"] . '">update</button>
                    <button class=" btn btn-danger " type="submit" >delete</button>
                    </form>

                    <div class="collapse mt-3" id="update' . $row["ID"] . '">
                      <div class="card card-body">
                         <div class="container">
                             <div class="row">
                             <input type="number" value="' . $row["ID"] . '" id="idUpdate" hidden>
                                 <div class="col-12">
                                     <label for="name">Name: </label>
                                     <input type="text" class="form-control" id="nameUpdate' . $row["ID"] . '" name="name" value="' . $row["name"] . '">
                                 </div>
                                 <div class="col-12">
                                     <label for="description">Description: </label>
                                     <input type="text" class="form-control" id="descriptionUpdate' . $row["ID"] . '" name="description" value="' . $row["description"] . '">
                                 </div>
                                 <div class="col-12">
                                     <label for="link">Link: </label>
                                     <input type="text" class="form-control" id="linkUpdate' . $row["ID"] . '" name="link" value="' . $row["link"] . '">
                                 </div>
                                 <div class="col-12 mt-2">
                                     <button class="btn btn-success " id="edit' . $row["ID"] . '" onclick="edit(this.id)">Edit</button>
                                 </div>
                             </div>
                         </div>
                      </div>
                  </div>

                    ';

      }
    }
    ?>
        


    

      <script>

        $('#submit').click(function (){


          var name = $('#name').val()
          var description = $('#description').val()
          var link = $('#link').val()


          if(name == ""){
            toastr.error("Enter name");
          } else if(description==''){
           toastr.error("Enter description")
         } else if(link == ""){
          toastr.error("Enter link")
        } else {
          $.ajax({
            url: "addData.php?name="+name+"&description="+description+"&link="+link,

            success: function (data){
              if(data.indexOf('sent') > -1){
                    toastr.success("Successfully added project!!!")
                    $('#name').val("")
                    $('#description').val("")
                    $('#link').val("")
                    $('#form').collapse("hide")
              } 
              else {
                toastr.error("Project not added")
              }
            },
            error: function (data, err){
              toastr.error("Some problem occured. Please try again later.")
            }
          })
        }
      }) 
      </script>

      <script>

      function edit(idClick){
        console.log(idClick)
        var res = idClick.replace(/\D/g, "")
          var name = $('#nameUpdate'+res).val()
          var description = $('#descriptionUpdate'+res).val()
          var link = $('#linkUpdate'+res).val()
          var id = $('#idUpdate').val()

         

          console.log(res)

          


          if(name == ""){
            toastr.error("Enter name");
          } else if(description==''){
           toastr.error("Enter description")
         } else if(link == ""){
          toastr.error("Enter link")
        } else {
          $.ajax({
            url: "update.php?name="+name+"&description="+description+"&link="+link+"&id="+res,

            success: function (data){
              if(data.indexOf('sent') > -1){
                    toastr.success("Successfully added project!!!")
                    $('#nameUpdate').val("")
                    $('#descriptionUpdate').val("")
                    $('#linkUpdate').val("")
              } 
              else {
                toastr.error("Project not added")
              }
            },
            error: function (data, err){
              toastr.error("Some problem occured. Please try again later.")
            }
          })
        }
      }

       /*  $('#edit').click(function (){


          var name = $('#nameUpdate').val()
          var description = $('#descriptionUpdate').val()
          var link = $('#linkUpdate').val()
          var id = $('#idUpdate').val()


          if(name == ""){
            toastr.error("Enter name");
          } else if(description==''){
           toastr.error("Enter description")
         } else if(link == ""){
          toastr.error("Enter link")
        } else {
          $.ajax({
            url: "update.php?name="+name+"&description="+description+"&link="+link+"&id="+id,

            success: function (data){
              if(data.indexOf('sent') > -1){
                    toastr.success("Successfully added project!!!")
                    $('#nameUpdate').val("")
                    $('#descriptionUpdate').val("")
                    $('#linkUpdate').val("")
              } 
              else {
                toastr.error("Project not added")
              }
            },
            error: function (data, err){
              toastr.error("Some problem occured. Please try again later.")
            }
          })
        }
      })  */
      </script>

    

</body>
</html>