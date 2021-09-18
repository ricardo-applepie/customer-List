<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>users dashboard</title>
    <style>
       <?php include 'CSS/main.css'; ?>
    </style>
  </head>
  <body>

 <?php 

 
 ?>
    <div class='container'>

         <div>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                </li>
                
            </ul>

         </div>   
         <div>
             <h1 class="orders-title">Customers</h1>
         </div>
         <div>
            <div class='left-menu'>
              <ul class="list-group">
                    <li class="list-group-item active">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                    <li class="list-group-item">Morbi leo risus</li>
 
               </ul>   
                <div class='add-order__btn'>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                      Add Customer
                    </button> 
                </div>   
            </div>

             <div class='dashboard'>
     
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add new user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="function.php" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">fullname</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="fullname">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">age</label>
                            <input name="age" type="number" class="form-control" id="exampleInputPassword1" placeholder="age">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">location</label>
                            <input name="location" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="location">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">phone</label>
                            <input name="phone"  type="text" class="form-control" id="exampleInputPassword1" placeholder="phone">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                </div>
            </div>
            </div>
            <div>
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                        <th scope="col">age</th>
                        <th scope="col">Full Names</th>
                        <th scope="col">Number</th>
                        <th scope="col">Location</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php 
                       include 'function.php';
                       
                    $sql = "SELECT * from `person`";
                    $results = $conn -> query( $sql);
   
                      while($row = $results  -> fetch_assoc()){
                        $age= $row["age"];
                        $fullname= $row['name'];
                        $phone= $row['phone'];
                        $location=$row['location'];
                          echo '
                             <tr>
                                <th scope="row">'.$age.'</th>
                                <td>'.$fullname.'</td>
                                <td>'.$phone.'</td>
                                <td>'.$location.'</td>
                            </tr>'
                          ;
                          
                      }
                   
                     
                     ?>
                    </tbody>
                </table>
            </div> 
        
        </div>
           
         </div>
        
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>