<!-- <?php if($this->session->userdata('id_user_role')!= 1){redirect('login');};?>
<html>
<head>
    <title>Dynamic Column Chart in Codeigniter using Ajax</title>
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container">
  <br />
  <h3 align="center">Dynamic Column Chart in Codeigniter using Ajax</h3>
  <br />
  <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-9">
                        <h3 class="panel-title">Month Wise Profit Data</h3>
                    </div>
                    <div class="col-md-3">
                        <select name="tanggal" id="tanggal" class="form-control">
                            <option value="">Select tanggal</option>
                        <?php
                        foreach($antrian->result_array() as $row)
                        {
                            echo '<option value="'.$row["tanggal"].'">'.$row["tanggal"].'</option>';
                        }
                        ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div id="chart_area" style="width: 1000px; height: 620px;"></div>
            </div>
        </div>
 </div>
</body>
</html>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

google.charts.load('current', {packages:['corechart', 'bar']});
google.charts.setOnLoadCallback();

function load_monthwise_data(tanggal, title)
{
    var temp_title = title + ' ' + tanggal;
    $.ajax({
        url:"<?php echo base_url(); ?>adminclient/fetch_data",
        method:"POST",
        data:{tanggal:tanggal},
        dataType:"JSON",
        success:function(data)
        {
            drawMonthwiseChart(data, temp_title);
        }
    })
}

function drawMonthwiseChart(chart_data, chart_main_title)
{
    var jsonData = chart_data;
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'nomor');
    data.addColumn('number', 'id_layanan');

    $.each(jsonData, function(i, jsonData){
        var nomor = jsonData.nomor;
        var id_layanan = parseFloat($.trim(jsonData.id_layanan));
        data.addRows([[nomor, id_layanan]]);
    });

    var options = {
        title:chart_main_title,
        hAxis: {
            title: "nomors"
        },
        vAxis: {
            title: 'id_layanan'
        },
        chartArea:{width:'80%',height:'85%'}
    }

    var chart = new google.visualization.ColumnChart(document.getElementById('chart_area'));

    chart.draw(data, options);
}

</script>

<script>
    
$(document).ready(function(){
    $('#tanggal').change(function(){
        var tanggal = $(this).val();
        if(tanggal != '')
        {
            load_monthwise_data(tanggal, 'Month Wise id_layanan Data For');
        }
    });
});

</script> -->
