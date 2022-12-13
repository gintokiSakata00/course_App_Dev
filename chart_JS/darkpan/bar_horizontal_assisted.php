<div class="container-fluid pt-5 px-5">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-9">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">TASK 2 HORIZONTAL BAR</h6>
                                <a href="">ASSISTED ORDERS</a>
                            </div>
                            <canvas id="assisted_Chart"></canvas>
                        </div>
          
<?php
                               $query = "SELECT CONCAT(emp.LastName,'',emp.FirstName) AS 'Employee_Name', COUNT(ord.OrderID) AS 'Count_Assisted'
                               FROM employees emp,orders ord WHERE emp.EmployeeID = ord.EmployeeID GROUP BY Employee_Name ORDER BY Count_Assisted DESC;";
                                $query_results = mysqli_query($conn, $query);
                                $emp_name = array();
                                $count_assist = array();
                                while($row = mysqli_fetch_array($query_results)) {
                                  $emp_name[] = $row['Employee_Name'];
                                  $count_assist[] = $row['Count_Assisted'];
                                }

                                mysqli_free_result($query_results);
                                mysqli_close($conn);
                              ?>
<script>
                                const labels = <?php echo json_encode($emp_name); ?>;
                                const assist = <?php echo json_encode($count_assist); ?>;
                                const data = {
                                  labels: labels,
                                  datasets: [
                                    {
                                      label: 'Count of assisted',
                                      data: assist,
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
                                        text: 'Employee number of orders assists'
                                      }
                                    }
                                  }
                                }
                                const chart_bar = new Chart(
                                  document.getElementById('assisted_Chart'),
                                  config
                                );
                              </script>

        </div>
    </div>
</div>
