<div class="container-fluid pt-5 px-5">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-9">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">TASK 4 HORIZONTAL BAR</h6>
                                <a href="">CHEAPEST PRODUCTS</a>
                            </div>
                            <canvas id="cheap_Chart"></canvas>
                        </div>
          
<?php
                               
                                $query = 'SELECT productName AS "Products", UnitPrice AS "Price"
                                          FROM products ORDER BY UnitPrice asc LIMIT 5';
                                $query_results = mysqli_query($conn, $query);
                                $product_name = array();
                                $product_price = array();
                                while($row = mysqli_fetch_array($query_results)) {
                                  $product_name[] = $row['Products'];
                                  $product_price[] = $row['Price'];
                                }

                                mysqli_free_result($query_results);
                                mysqli_close($conn);
                              ?>
<script>
                                const labels = <?php echo json_encode($product_name); ?>;
                                const prices = <?php echo json_encode($product_price); ?>;
                                const data = {
                                  labels: labels,
                                  datasets: [
                                    {
                                      label: 'Prices of orders',
                                      data: prices,
                                      borderColor: [
                                        'rgba(255, 99, 132, 0.75',
                                        'rgba(54, 162, 235, 0.75',
                                        'rgba(255, 206, 86, 0.75',
                                        'rgba(75, 192, 192, 0.75',
                                        'rgba(153, 102, 255, 0.75',
                                        'rgba(255, 159, 64, 0.75'
                                      ],
                                      backgroundColor: [
                                        'rgba(255, 99, 132, 0.5)',
                                        'rgba(54, 162, 235, 0.5)',
                                        'rgba(255, 206, 86, 0.5)',
                                        'rgba(75, 192, 192, 0.5)',
                                        'rgba(153, 102, 255, 0.5)',
                                        'rgba(255, 159, 64, 0.5)'
                                      ],
                                    }
                                  ]
                                };
                                const config = {
                                  type: 'bar',
                                  data: data,
                                  options: {
                                    indexAxis: 'y',
                                    // Elements options apply to all of the options unless overridden in a dataset
                                    // In this case, we are setting the border of each horizontal bar to be 2px wide
                                    elements: {
                                      bar: {
                                        borderWidth: 2,
                                      }
                                    },
                                    responsive: true,
                                    plugins: {
                                      legend: {
                                        position: 'right',
                                      },
                                      title: {
                                        display: true,
                                        text: 'Top 5 Most Cheapest Products'
                                      }
                                    }
                                  }
                                }
                                const bar_Chart = new Chart(
                                  document.getElementById('cheap_Chart'),
                                  config
                                );
                              </script>

        </div>
    </div>
</div>
