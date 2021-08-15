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
    </head>
    <body onload="fetch()">    
        
    <!--------- nav bar ------------->
    <nav class="navbar navbar-expand-lg nav-style p-3">
        <a class="navbar-brand pl-5 nav-headng-style" href="#"><img src="assets/img/logo_1.png" width="120" height="50"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse"  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fa fa-bars" style="color:#000; font-size:28px;"></i></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto pr-5 text-capitalize">    
        <li class="nav-item active"><a class="nav-link" href="#about">About <span class="sr-only">(current)</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#symptom">Symptoms</a></li>
        <li class="nav-item"><a class="nav-link" href="#prevention">Prevention</a></li>  
        <li class="nav-item"><a class="nav-link" href="worldcorona.php">WorldCoronaLive</a></li>
        <li class="nav-item"><a class="nav-link" href="indiacorona.php">IndiaCoronaLive</a></li>
        </ul>
      </div>
    </nav>  
     
    <!--------- main header ------------->
    <div class="main_header">
        <div class="row w-100 h-100">
            <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                <img src="https://images.unsplash.com/photo-1584118624012-df056829fbd0?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29yb25hdmlydXN8ZW58MHx8MHx8&ixlib=rb-1.2.1" width="500" height="300">
                </div> 
            </div>
          
            <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1 ">
                <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                <h1>Let's Stay Safe And Fight Together Against Corona Virus</h1> 
                </div>
            </div>
        </div>
    </div>
    
    
    <!--------- latest updates  ------------>
    <section class="corona_updates container-fluid">
        <div class="mb-4">
            <h3 class="text-center">COVID-19 UPDATES</h3>
        </div>
        <div class="d-flex justify-content-around align-items-center count-style">
            <div>
                <h1 class="count">191,770,038</h1>
                <p>Total Cases</p>
            </div>
            <div>
                <h1 class="count">72,092</h1>
                <p>New Cases</p>
            </div>
            <div>
                <h1 class="count">174,647,227</h1>
                <p>Cured</p>
            </div>
            <div>
                <h1 class="count">4,115,242</h1>
                <p>Deaths</p>
            </div>
        </div>
        
        <div class="row pt-2">
            <div class="col-lg-5 col-md-6 col-12 ml-5 pt-4 about-response ">
                    <center>
                    <button class="btn">
                        <a href="worldcorona.php" target="_blank">World Updates</a>
                    </button>
                    </center>
            </div>
            <div class="col-lg-6 col-md-6 col-12 pt-4">
                    <center>
                    <button class="btn">
                        <a href="indiacorona.php" target="_blank">India Updates</a>
                    </button>
                    </center>
            </div>
        </div>
        
    </section>
    
    <!--------- about section  ------------->
    <section id="about">
        <div class="container-fluid sub_section pb-5 mt-3 pt-2"">
            <div class="section_header text-center mt-4 mb-5 ">
                <h1>About COVID-19</h1>
            </div>
            <div class="row pt-">
                <div class="col-lg-5 col-md-6 col-12 ml-5 about-response">
                    <img src="https://static.theprint.in/wp-content/uploads/2020/03/Coronavirus-diagram.jpg" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-12 pt-4">
                    <h2 class="text-center">What is Covid-19??</h2> 
                    <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly 
                        discovered coronavirus.Most people who fall sick with COVID-19 will 
                        experience mild to moderate symptoms and recover without special treatment.</p> 
                    <p>The virus that causes COVID-19 is mainly transmitted through droplets generated 
                        when an infected person coughs, sneezes, or exhales. These droplets are too 
                        heavy to hang in the air, and quickly fall on floors or surfaces.You can be
                        infected by breathing in the virus if you are within close proximity of someone
                        who has COVID-19, or by touching a contaminated surface and then your eyes, nose or mouth.</p>  
                </div>
            </div>
    </section>
    
    <!--------- symptoms section  ------------->
    <section id="symptom">
        <div class="container-fluid pb-5 mt-3 pt-2"">
            <div class="section_header text-center mt-4 mb-3 ">
                <h1>COVID-19 Symptopms</h1>
            </div>
        </div> 
        
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-2">
                    <figure  class="text-center">
                        <img src="https://creazilla-store.fra1.digitaloceanspaces.com/cliparts/33866/woman-runny-nose-clipart-xl.png" class="img-fluid" width="90" height="90" >
                    </figure>
                    <figcaption class="text-center">running nose</figcaption>
                </div> 
                <div class="col-lg-4 col-md-4 col-12 mt-2">
                    <figure class="text-center">
                        <img src="https://img.freepik.com/free-vector/sad-cute-little-kid-boy-sneeze-because-flu_97632-2455.jpg?size=338&ext=jpg" class="img-fluid" width="150" height="150">
                    </figure>
                    <figcaption class="text-center">Cough</figcaption>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-2">
                    <figure  class="text-center">
                        <img src="assets/img/cold.png" class="img-fluid" width="120" height="120">
                    </figure>
                    <figcaption class="text-center">cold</figcaption>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5 mb-3">
                    <figure  class="text-center">
                        <img src="https://images.vexels.com/media/users/3/193269/isolated/preview/0f317e26cfe6c2eff8351b28e8283741-covid-19-symptom-character-fever.png" class="img-fluid" width="120" height="120">
                    </figure>
                    <figcaption class="text-center">Fever</figcaption>
                </div>
                 <div class="col-lg-4 col-md-4 col-12 mt-5 mb-3">
                    <figure class="text-center">
                        <img src="https://www.pinclipart.com/picdir/big/156-1568472_fatigue-is-a-common-phenomenon-occurring-because-of.png" class="img-fluid"  width="160" height="160">
                    </figure>
                    <figcaption class="text-center">tiredness</figcaption>
                </div>          
                <div class="col-lg-4 col-md-4 col-12 mt-5 mb-3">
                   <figure class="text-center">
                        <img src="https://illustoon.com/photo/thum/4256.png" class="img-fluid" width="120" height="120">
                    </figure>
                    <figcaption class="text-center">Difficult breath</figcaption>
                </div>
            </div>
        </div>
    </section>
    
    <!--------- prevention section  ------------->
    <section id="prevention">
        <div class="container-fluid sub_section pb-5 mt-3 pt-2">
            <div class="section_header text-center mt-4 mb-3 ">
                <h1>Prevention Steps Against COIVD</h1>
            </div>
        <div class="container">
            <div class="row">
                
                <div class="col-lg-4 col-md-4 col-12 mt-4">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure  class="text-center">
                            <img src="https://p.kindpng.com/picc/s/40-400922_washing-hands-clipart-clean-vector-illustration-wash-hd.png" class="img-fluid" width="90" height="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Wash your hands regularly for 20 seconds with soap and water or alcohol-based hand rub.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-12 mt-4">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure  class="text-center">
                            <img src="https://icon2.cleanpng.com/20180130/aow/kisspng-allergic-rhinitis-due-to-pollen-nose-common-cold-a-cover-your-nose-picture-5a710e213948a6.8452963315173586252346.jpg" class="img-fluid" width="90" height="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Cover your nose and mouth with a disposbale tissue or flexed elbow when you cough or sneeze.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-12 mt-4">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure  class="text-center">
                            <img src="https://images.squarespace-cdn.com/content/v1/5e1f434ccd77826bfdc5d847/1585620029702-2X0G9VXCKI3EU50AH1LO/Asset+6.png" class="img-fluid" width="90" height="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Avoid close contact with people who are unwell (atleast 1 meter).</p>
                        </div>
                    </div>
                </div>
                
                
            </div>
            
            <div class="row">
                
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure  class="text-center">
                            <img src="https://img.freepik.com/free-vector/stay-home-vector-sticker-isolated-transparent-background_95169-1485.jpg?size=626&ext=jpg" class="img-fluid" width="90" height="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Stay home and self-isolated from others in the house if you feel unwell.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure  class="text-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStKiYJqtSHauBBSU1IdDWWxqajoWnew0UNgI8CaYbfTNzr9OYH094W3vE9z5Upa_YkKDk&usqp=CAU" class="img-fluid" width="90" height="90">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>Stay updated by watching news &amp; follow the recommended practices.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-12 mt-5 ">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <figure  class="text-center">
                            <img src="https://cdn.prdaily.com/wp-content/uploads/2020/11/empathy-health-care-marketing.jpg" class="img-fluid" width="100" height="100">
                            </figure>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p>If you feel fever, cough or any other <a href="#symptoms">symptoms</a> then seek medical care earliest.</p>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
        </div>
    </section>
     
    <!--------- footer section  ------------->
    <div class="container scrolltop float-right pr-5">
        <i class="fa fa-arrow-up" onclick="topFunction()" id="mybtn"> </i>
    </div>   
    <footer class="mt-5"> 
        <div class="footer_style text-white text-center container-fluid">
            <p>Copyright by Archana Bisht & Aayushi Goyal </p>
        </div>
    </footer>
    
    <!--------- scripts  ------------->
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
    </body>
</html>
