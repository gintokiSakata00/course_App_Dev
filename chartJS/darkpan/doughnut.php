<div class="container-fluid pt-5 px-5">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-9">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">TASK 3 DOUGHNUT CHART</h6>
                                <a href="">CUSTOMER ORDERS COUNT</a>
                            </div>
                            <canvas id="dougnutchart"></canvas>
                        </div>
          
                        <?php
                              

                                $query = 'SELECT cus.CompanyName as Company_Name, cus.customerID,
                                  COUNT(ord.OrderID) AS "Count" FROM orders ord, customers cus
                                  WHERE ord.customerID = cus.customerID
                                  GROUP BY cus.CompanyName
                                  HAVING COUNT(ord.OrderID) > 15';
                                $query_result = mysqli_query($conn, $query);
                                $Name = array();
                                $Count = array();
                                while($row = mysqli_fetch_array($query_result)) {
                                  $Name[] = $row['Company_Name'];
                                  $Count[] = $row['Count'];
                                }

                                mysqli_free_result($query_result);
                                mysqli_close($conn);
                              ?>
<script>
                                const name = <?php echo json_encode($Name); ?>;
                                const count = <?php echo json_encode($Count); ?>;
                                const data = {
                                  labels: name,
                                  datasets: [
                                    {
                                      label: 'Count of Orders',
                                      data: count,
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
                                      radius: 300
                                    }
                                  ]
                                };
                                const config = {
                                  type: 'doughnut',
                                  data: data
                                 
                                }
                                const chart_dougnut = new Chart(
                                  document.getElementById('dougnutchart'),
                                  config
                                );
                              </script>

        </div>
    </div>
</div>
