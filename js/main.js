// JavaScript Document





var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
    labels: ["04:00", "08:00", "12:00", "16:00", "20:00", "24:00"],
    datasets: [
        {
            label: "Daily Usage",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor:"#EFF20C",			
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(226,14,17,1.00)",
            pointBackgroundColor: "#EFF20C",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "#EFF20C",
            pointHoverBorderColor: "#EFF20C",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [2.5,3,5,12,14],
            spanGaps: false,
			
        }
    ]
},

scales:{
  xAxes:[{
    gridLines:{
      color:"rgba(226,14,17,1.00)",
      zeroLineColor:"rgba(226,14,17,1.00)"
    }
  }],
  yAxes:[{
    display:false
  }],
}
   
	
	
});



function myFunction() {
    var x = document.getElementById('myDIV');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}




 