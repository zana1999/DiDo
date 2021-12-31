// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
var demo=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
var ctx = document.getElementById("myBarChart");
var stdcount=document.getElementById('var1').innerHTML;
var grpcount=document.getElementById('var2').innerHTML;
var groups=[];
var gg=[];
for(var i=0;i<grpcount;i++)
{
    groups[demo[i]]=parseInt(document.getElementById(demo[i]).innerHTML);
    gg[i]="Group"+" "+demo[i];
}

var myLineChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: gg,
        datasets: [{
            label: "Students",
            backgroundColor: "rgba(2,117,216,1)",
            borderColor: "rgba(2,117,216,1)",
            data: [groups['A'],groups['B'],groups['C'] ,groups['D'],groups['E'],groups['F'],groups['G'],groups['H'],groups['I'],groups['J'],groups['K'],groups['L'],groups['M'],groups['N'],groups['O'],groups['P'],groups['Q'],groups['R'],groups['S'],groups['T'],groups['U'],groups['V'],groups['W'],groups['X'],groups['Y'],groups['Z']],
        }],
    },
    options: {
        scales: {
            xAxes: [{
                time: {
                    unit: 'month'
                },
                gridLines: {
                    display: false
                },
                ticks: {
                    maxTicksLimit: 5
                }
            }],
            yAxes: [{
                ticks: {
                    min: 0,
                    max: parseInt(stdcount),
                    maxTicksLimit: 5
                },
                gridLines: {
                    display: true
                }
            }],
        },
        legend: {
            display: false
        }
    }
});
