<?php require('connect.php');?>
<?php include('header.php');?>

<h1>Offers</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                <!-- diaplays all of the offers from the database -->
                <?php
                $stmt=$conn->prepare("SELECT * FROM offers");
                $stmt->execute();
                if($stmt->rowCount()>0){
                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                    echo'<tr>
                    <td>'.$row["offer_name"].'</td>
                    <td>'.$row["offer_description"].'</td>
                    <td>'.$row["offer_price"].'</td>
                    
                </tr>';
                    }
                }
                else {
                    ?>
                        <tr>
                            <td colspan='3'>No records found</td>
                        </tr>

                    <?php
                }
                ?>
                </tbody>
            </table>
            
<?php include('footer.php');?>