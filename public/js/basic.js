$(document).ready(function(){
  var data = [
      { label: "Game Companies", data:10 },
      { label: "Indian Restaurants", data: 20 },
      { label: "Industries", data: 30 },
      { label: "Banks", data: 15 },
      { label: "Digital Media", data: 10 }
  ];

  // $.plot('#recommended_interests', data, {
  //     series: {
  //         pie: {
  //           innerRadius: 0.4,
  //           show: true,
  //         }
  //     },
  //     grid: {
  //       hoverable: true,
  //       clickable: true
  //     },
  //     legend: {
  //         show: false
  //     }
  // });

  $('#your_portfolio').dataTable();

  $('[data-toggle="tooltip"]').tooltip({
    html: true
  });

});

function labelFormatter(label, series) {
  return "<div style='font-size:14px; text-align:center; padding:12px; color: white'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
}
