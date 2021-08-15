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
        <li class="nav-item"><a class="nav-link" href="worldcorona.php">WorldCovidData</a></li>
        </ul>
      </div>
    </nav>
        <!--------- data table ------------->
        <section class="corona_updates container-fluid">
        <div class="mb-4 mt-4">
            <h3 class="text-center"> COVID-19 Live Update Of INDIA!! </h3>
        </div>
        <div class="table-responsive tableFixHead">
            <table class="table table-bordered table-striped text-center" id="tbval">
                <thead>
                <tr>
                    <th>LastUpdateTime</th> 
                    <th>States</th>
                    <th>Confirmed</th>
                    <th>Active</th>
                    <th>Recovered</th>
                    <th>Deaths</th>
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
         $.get("https://data.covid19india.org/data.json",
            function (data){
            // console.log(data['Countries'].length);
            var tbval = document.getElementById('tbval');
            for(var i=1;i<(data['statewise'].length);i++) {
            var x = tbval.insertRow();
            x.insertCell(0);
            tbval.rows[i].cells[0].innerHTML = data['statewise'][i]['lastupdatedtime'];
            tbval.rows[i].cells[0].style.background = '#eeacac';
            tbval.rows[i].cells[0].style.color= '#000';
                     
            x.insertCell(1);
            tbval.rows[i].cells[1].innerHTML = data['statewise'][i]['state'];
            tbval.rows[i].cells[1].style.background = '#4bb7d8';
            tbval.rows[i].cells[1].style.color= '#000';
                     
            x.insertCell(2);
            tbval.rows[i].cells[2].innerHTML = data['statewise'][i]['confirmed'];
            tbval.rows[i].cells[2].style.background = '#6cee82';
            tbval.rows[i].cells[2].style.color= '#000';
            
            x.insertCell(3);
            tbval.rows[i].cells[3].innerHTML = data['statewise'][i]['active'];
            tbval.rows[i].cells[3].style.background = '#f6b551';
            tbval.rows[i].cells[3].style.color= '#000';
                     
            x.insertCell(4);
            tbval.rows[i].cells[4].innerHTML = data['statewise'][i]['recovered'];
            tbval.rows[i].cells[4].style.background = '#f36e23';
            tbval.rows[i].cells[4].style.color= '#000';
                     
            x.insertCell(5);
            tbval.rows[i].cells[5].innerHTML = data['statewise'][i]['deaths'];
            tbval.rows[i].cells[5].style.background = '#e5afc2';
            tbval.rows[i].cells[5].style.color= '#000';
                    
            }
          } 
       );
    }
    </script>
    
    </body>
</html>
