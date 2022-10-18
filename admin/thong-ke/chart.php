<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load("current", {
    packages: ["corechart"]
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Loại', 'Số Lượng'],
        <?php
            foreach ($items as $item) {
                echo "['$item[ten_loai]',     $item[so_luong]],";
            }
            ?>
    ]);

    var options = {
        title: 'TỶ LỆ HÀNG HÓA',
        is3D: true,
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
    chart.draw(data, options);
}
</script>
</head>

<body>
    <a href="index.php" class="btn btn-info text-white" style="margin-left: 5%;">Bảng thống kê<i class="fas fa-eye ml-2"></i></a>
    <center><h3 style="background-color: white;width: 90%;margin: 0;padding: 30px;margin-top: 10px;">BIỂU ĐỒ THỐNG KÊ</h3></center>
    <center><div id="piechart_3d" style="width: 90%; height: 700px;"></div></center>
</body>

</html>