<div class="col-md-8">
                    <div class="card">
                    <div class="header">
                    <h4 class="title"style="text-align: center;">Shippers Statistics</h4>
                    <p class="category" style="text-align: center;">Orders shipped by every Shipper</p>
                    </div>
                    <div class="content">
                    <canvas id="chartShippers"></canvas>
                    <?php
                   
                    $query01 = "SELECT shippers.CompanyName, (Count(*)/(SELECT COUNT(*) FROM
                    northwind.orders) * 100) as Count_Orders FROM northwind.orders,
                    northwind.shippers WHERE shippers.ShipperID=orders.ShipVia GROUP BY ShipVia;";
                    $result01 = mysqli_query($conn, $query01);
                    if(mysqli_num_rows($result01) > 0){

                        $Count_Orders = array();
                        $label_piechart = array();
                        while ($row = mysqli_fetch_array($result01)){
                        $Count_Orders[] = $row['Count_Orders'];
                        $label_piechart[] = $row['CompanyName'];
                        }
                        mysqli_free_result($result01);
                        
                        }else{
                        echo "No records matching your query were found.";
                        }
                        ?>
                    <script>
                        // <!-- setup block -->
                        const Count_Orders = <?php echo json_encode($Count_Orders); ?>;
                        const label_piechart = <?php echo json_encode($label_piechart); ?>;
                        const data1 = {
                        labels: label_piechart,
                        datasets: [{
                        label: 'My First Dataset',
                        data: Count_Orders,
                        backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255,165,0)'
                        ],
                        hoverOffset: 4
                        }]
                        };
                        // <!-- config block -->
                        const config = {
                        type: 'pie',
                        data: data1,
                        };
                        // <!-- render block -->
                        const chartShippers = new Chart(
                        document.getElementById('chartShippers'),
                        config
                        );
                </script>
                    
           
                </div>
</div>
</div>