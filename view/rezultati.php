<!DOCTYPE html>
<html>
  <head>
    <title>JavaScript Bar Chart</title>
    <script src="https://cdn.anychart.com/releases/8.0.0/js/anychart-base.min.js"></script>
    <link rel="stylesheet" href="<?= STATIC_URL ?>style-rezultati.css">
  </head>
  
  <body>
    <header id="head">
        <img src="<?= STATIC_URL . "images/logo/logo2-greeen.png"?>" alt="">
    </header>
    <h1>Thank you for voting, every vote counts</h1>
    <div id="container"></div>
    <script>
      anychart.onDocumentReady(function() {
          
 
        // set the data
        var data = {
            header: ["Name", "Number of votes"],
            rows: [
              ["SDS", 1500],
              ["Levica", 87000],
              ["SD", 175000],
              ["Svoboda", 10000],
              ["DESUS", 242000],
              ["SNS", 25000],
        ]};
 
        // create the chart
        var chart = anychart.bar();
        var palette = anychart.palettes.distinctColors();

        palette.items(['#5CDB95', '#5CDB95', '#5CDB95', '#5CDB95']);

        chart.palette(palette);
 
        // add the data
        chart.data(data);
 
        // set the chart title
        chart.title("Current standings");
        chart.barsPadding(40);
 
        // draw
        chart.container("container");
        chart.draw();
      });
    </script>
  </body>
  <footer>
        <span>Powered By Lumpi Software Solutions</span>
    </footer>
</html>