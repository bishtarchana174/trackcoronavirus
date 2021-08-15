<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Corona Tracker</title>
        <?php include 'assets/links/link.php'; ?>
        <?php include 'assets/css/style.php'; ?>
        <style>
            #mybtn{
         display: none;
         position: fixed;
         bottom:30px;
         right:40px;
         z-index:99;
         border:none;
         outline:none;
         background-color: black;
         color: white;
         cursor: pointer;
         padding: 10px;
         border-radius: 10px;
     }
     #mybtn:hover{
         background:aqua;
         color: black;
     }
     
            </style>
    </head>
    <body onload="fetch()"> 
    <!--------- nav bar ------------->
    <nav class="navbar navbar-expand-lg nav-style p-3">
      <a class="navbar-brand pl-5 nav-headng-style" href="index.php"><img src="assets/img/logo_1.png" width="120" height="50"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fa fa-bars" style="color:#000; font-size:28px;"></i></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto pr-5 text-capitalize">   
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li> 
        <li class="nav-item"><a class="nav-link" href="indiacorona.php">IndiaCovidData</a></li>
        </ul>
      </div>
    </nav>
        <!--------- data table ------------->
        <section class="corona_updates container-fluid">
        <div class="mb-4 mt-4">
            <h3 class="text-center"> COVID-19 Live Update Of WORLD!! </h3>
        </div>
        <div class="table-responsive tableFixHead">
            <table class="table table-bordered table-striped text-center" id="tbval">
                <thead>
                <tr>
                    <th>Country</th> 
                    <th>Total Confirmed</th>
                    <th>Total Recovered</th>
                    <th>Total Deaths</th>
                    <th>New Confirmed</th>
                    <th>New Recovered</th>
                    <th>New Deaths</th>
                </tr>
                </thead>
            </table>
        </div
        </section>
        
    <div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" id="mybtn"> </i>
    </div>   
     
    <script class="text/javascript">
        
        $('.count').counterUp({
            delay:10,
            time:3000
        })
        
        mybutton = document.getElementById("mybtn");
        window.onscroll=function() {scrollFunction()};
        function scrollFunction(){
            if(document.body.scrollTop>100 || document.documentElement.scrollTop > 100){
                 mybutton.style.display = "block";
            }  else{
                mybutton.style.display = "none";
            }
        }
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>    
           
    <script>
     function fetch(){
         $.get("https://api.covid19api.com/summary",
            function (data){
            // console.log(data['Countries'].length);
            var tbval = document.getElementById('tbval');
            for(var i=1;i<(data['Countries'].length);i++) {
            var x = tbval.insertRow();
            x.insertCell(0);
            tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
            tbval.rows[i].cells[0].style.background = '#7a4a91';
            tbval.rows[i].cells[0].style.color= '#000';
                     
            x.insertCell(1);
            tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
            tbval.rows[i].cells[1].style.background = '#4bb7d8';
            tbval.rows[i].cells[1].style.color= '#000';
                     
            x.insertCell(2);
            tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
            tbval.rows[i].cells[2].style.background = '#9cc850';
            tbval.rows[i].cells[2].style.color= '#000';
                     
            x.insertCell(3);
            tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
            tbval.rows[i].cells[3].style.background = '#f36e23';
            tbval.rows[i].cells[3].style.color= '#000';
                     
            x.insertCell(4);
            tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
            tbval.rows[i].cells[4].style.background = '#4bb7d8';
            tbval.rows[i].cells[4].style.color= '#000';
                     
            x.insertCell(5);
            tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
            tbval.rows[i].cells[5].style.background = '#9cc850';
            tbval.rows[i].cells[5].style.color= '#000';
                     
            x.insertCell(6);
            tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
            tbval.rows[i].cells[6].style.background = '#f36e23';
            tbval.rows[i].cells[6].style.color= '#000';
            }
          } 
       );
    }
    </script>
    
    </body>
</html>
