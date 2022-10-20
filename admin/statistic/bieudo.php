<div class="mt-[-366px] ml-[459px]">
<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  <?php
  $sumdm=count($listtk);
  $i=1;
   foreach ($listtk as $show) {
    extract($show);
    if($i==$sumdm)
      $dauphay=""; else $dauphay=",";
    
    echo "['".$show['tendm']."',".$show['countpro']."]".$dauphay;
    $i+=1;
   }
  ?>

]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Biểu đồ thống kê X Shop', 'width':750, 'height':500};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
</div>