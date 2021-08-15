<style type="text/css">
    
    hmtl{
        scroll-behavior: smooth;
    }
    .row{
        margin-left: 0!important;
        margin-right: 0!important;
        padding: 0!important;
    }
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      scroll-behavior: smooth;
      font-family: 'Mulish', sans-serif;
    }
    
    body{
        margin: 0!important;
    }
    /* ====== nav-bar ====== */
    .nav-style{
        background-color:#ff7675!important;
    }
    .nav-style button span{
        color: black;
    }
    .nav-style a{
        color: white;
    }
    
    /* ======= main header ======== */
    .main_header{
        height: 450px;
        width: 100%;
    }
    .rightside h1{
        font-size: 3rem;
    }
    .leftside img{
        animation: beat 5s linear infinite;
    }
    @keyframes beat{
        0% {transform : scale( 1 ); }
        20% {transform : scale( .75 ); }
        40% {transform : scale( 1 ); }
        60% {transform : scale( .75 ); }
        80% {transform : scale( 1 ); }
        100% {transform : scale( .75 ); }
    }
    
    /* ======= corona upadtes ======== */
    .corona_updates{
        margin: 0 0 30px 0;
    }
    .corona_updates h3{
        color: #ff7675;
    }
    
    .corona_updates h1{
        font-size: 2rem;
        text-align: center;
    }
    .corona_updates .btn{
        background-color: #ff7675;
        font-size: 24px;
    }
    .corona_updates .btn a{
        color: white;
        font-weight: bolder; 
    }
    .corona_updates .btn:hover{
        background-color: #0563bbab;
        font-size: 24px;
    }
    .corona_updates .btn a:hover{
        text-decoration: none;
        color: black;
    }
    .count-style p{
        text-align: center;
    }
    /* ======= about section ======== */
    .sub_section{
        background-color: #fbfafd;
        width: 100%!important;
    }
    
     .tableFixHead {
        overflow-y: auto;
        height: 1000px;
        border: 1px solid grey;
      }
      .tableFixHead thead th {
        position: sticky;
        top: 0;
        background-color: white;
      }
      
      
     /* ======= footer style =======*/
     .footer_style{
         
         background-color: grey!important;
     }
     .footer_style p{
         height: 30px!important;
         margin-bottom: 0!important;
     }
     #mybtn{
         display: none;
         position: fixed;
         bottom:30px;
         right:40px;
         z-index:99;
         border:none;
         outline:none;
         background-color: #ff7675;
         color: white;
         cursor: pointer;
         padding: 10px;
         border-radius: 10px;
     }
     #mybtn:hover{
         background:aqua;
     }
     
     /* ======= responsive ======= */
     @media(max-width:768px){
         .main-header{
             height: 700px;
             text-align: center;
         }
         .main_header img{
             width: 350px;
             height: 200px;
             margin-top: 0;
         }
         .main_header h1{
             text-align: center;
             padding: 0;
             width: 100%;
             font-size: 32px;
         }
         .corona_updates{
             margin-top: 30px;
         }
         .count-style{
             display: inline!important;
             text-align: center!important;
         }
         .count-style p{
             text-align: center!important;
         }
         .about-response{
             margin-left: 0!important;
         }
         .nav-headng-style{
             padding-left: 0!important;
         }
     }
     
</style>