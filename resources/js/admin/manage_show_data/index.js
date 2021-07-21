$(function() {
    let ctx = document.getElementById('myChart')
let myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: 'Visitpr Stats',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1,
            fill: true,
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

let ctx1 = document.getElementById('mayChart1');
let myChart1 = new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: ['Ghost rider', 'Big World','Stand me'],
        datasets: [{
            label: 'POPULAR BOOK',
            data: [10,6,20],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
            ],
            borderWidth: 1,
        }],
        options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          },
    }
})

let ctx2 = document.getElementById('myChart2');

let data2 = {
    labels: [
      'Red',
      'Blue',
      'Yellow'
    ],
    datasets: [{
      label: 'My First Dataset',
      data: [300, 50, 100],
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)'
      ],
      hoverOffset: 4
    }]
  };

let config = {
    type: 'pie',
    data: data2,
  };
  let myChart2 = new Chart(ctx2, config);


  let dtt = [];
  let typedata;
  let typeofbooks = $('#typeofbook')
  typeofbooks.change (function(){
   
    $.ajaxSetup({
      beforeSend: function(xhr, type) {
          if (!type.crossDomain) {
              xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
            }
        },
    });
    $.ajax({
      type: 'POST',
      url: 'http://127.0.0.1:8000/search',
      data: {
        [$(this).attr('name')]: $(this).val(),
      },
      success: function(res) {
        dtt = res;
        typedata = Object.keys((res[0]))[0];
        console.log(res);
      },
      error: function(jqXHR, textStatus, errorThrown) {

      }
    })
    
  })
 //type book

 $('#searchinput').on('keyup', function() {
    
    if(dtt.length == 0){
    
      document.querySelector('.dashboard-money-content-search-listsearch-list').innerHTML = '<li>please choose type to search</li>';

      return;
    } else {

        if($(this).val() == '') document.querySelector('.dashboard-money-content-search-listsearch-list').innerHTML = '<li>type some thing</li>';
        else {
        let rsSearch = dtt.reduce((arr, value) => {
          
          return arr.concat( value[typedata].toLowerCase().search($(this).val().toLocaleLowerCase()) != -1 ? `<li>${value[typedata]}</li>` : undefined).filter(x => x!= undefined);
        },[]);
        
      document.querySelector('.dashboard-money-content-search-listsearch-list').innerHTML = Array.from(new Set(rsSearch)).join('');
     
        }
    }
   
 })


$('#searchinput').on('focusout', function() {
  document.querySelector('.dashboard-money-content-search-listsearch ').style.display = 'none';
})
$('#searchinput').on('focusin', function() {
  document.querySelector('.dashboard-money-content-search-listsearch ').style.display = 'block';
})



})


