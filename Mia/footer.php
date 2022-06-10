<!--footer-->
<footer class="container bg-3"> <!--Footer starts here-->
            <p class="footertext">&copy; 2022 Bike King Borders <a target="_blank" href="https://ambc-666.com/" style="color:#000;" >  All Rights reserved</p>
            <a href="https://www.youtube.com">
                <img src="images/youtube.svg" class="socialicons" width="50" height="50" alt="YouTube Link">
            </a>
            <a href="https://twitter.com">
                <img src="images/twitter.jpeg" class="socialicons" width="50" height="50" alt="Twitter Link">
            </a>
            <a href="https://www.tripadvisor.co.uk">
              <img class="trip-advisor" src="images/tripadvisor.png" width="50" height="50" alt="Trip Advisor Link">
              </a>

          
              <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>Opens</th>
                        <th>Closes</th>
                    </tr>
                </thead>
                <tbody>
                <!--php will read from db here-->
                <?php
                $stmt=$conn->prepare("SELECT * FROM opening_times");
                $stmt->execute();
                if($stmt->rowCount()>0){
                    //we have found record
                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                    echo'<tr>
                    <td>'.$row["day_name"].'</td>
                    <td>'.$row["opening_time"].'</td>
                    <td>'.$row["closing_time"].'</td>
                    
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
        </footer>
</html>