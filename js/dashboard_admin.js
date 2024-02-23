$(document).ready(()=>{
    $("#nav").load('admin_nav.php');
    graph_line();
    graph_dunot();
    // let table = new DataTable('#datatable');
    $('.content-table>#datatable').DataTable();
    getdata();

})

function graph_line(){
    var ctx = $("#line");
    new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
}
function graph_dunot(){
    var ctx = $("#dunot");
    new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          },
          plugins: {
            legend: {
                display: false
            },
          }
        }
      });
}

function getdata(){
  $.ajax({
    url: '../includes/showdataclass_inc.php',
    type: 'POST',
    data: {
      user:'user'
    }, 
    cache: false,
    success: res =>{
      var data = JSON.parse(res); 
      display(data);
    }
  })
}

function display(data){
  html_table = '';

  for(var i=0;i<data.length;i++){
    html_table += `
    <tr>
        <td>${(data[i]).fname} ${(data[i]).lname}</td>
        <td>${(data[i]).email}</td>
        <td>${(data[i]).contact_number}</td>
        <td>${(data[i]).type_va}</td>
        <td>${(data[i]).crm_tool}</td>
        <td>${(data[i]).working_hours}</td>
        <td>${(data[i]).task}</td>
        <td>${(data[i]).time_tracker}</td>
    </tr>
    `;
  }

  $("#tbody").html(html_table);

  

}
