<div class="col-md-8">
    <div class="card ">
        <div class="header">
            <h4 class="title" style="text-align: center;">Top 5 Ordered Products</h4>
            <p class="category" style="text-align: center;">Products</p>
        </div>
        <div class="content">
            <canvas id="myChartTopFive"></canvas>
            <?php
           
            $query04 = "SELECT ProductName, count(*) as order_count FROM
            northwind.order_details, northwind.products WHERE
            products.ProductID=order_details.ProductID GROUP BY products.ProductID order by
            order_count desc, products.Productname limit 5;";
            $result04 = mysqli_query($conn, $query04);
            if(mysqli_num_rows($result04) > 0){
            $order_count = array();
            $label_barchart = array();
            while ($row = mysqli_fetch_array($result04)){
            $order_count[] = $row['order_count'];
            $label_barchart[] = $row['ProductName'];
            }
            mysqli_free_result($result04);
            
            }else{
            echo "No records matching your query were found.";
            }
            ?>
         <script>
            const label_barchart = <?php echo json_encode($label_barchart); ?>;
            const order_count = <?php echo json_encode($order_count); ?>;
            const data4 ={
            labels: label_barchart,
            datasets: [{
            label: 'Number of Orders',
            data: order_count,
            backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
            }]
            };
            // <!-- config block -->
            const config4 = {
            type: 'bar',
            data: data4,
            options: {
            scales: {
            y: {
            beginAtZero: true
            }
            }
            }
            };
            // <!-- render block -->
            const myChartTopFive = new Chart(
            document.getElementById('myChartTopFive'),
            config4
            );
        </script>
        </div>
    </div>
</div>