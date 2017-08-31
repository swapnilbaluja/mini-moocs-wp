<?php get_header(); ?>
    <style>
        
       
        h1,
        h2,
        h3,
        h4 {
            margin: 20px auto;
        }
        
        #error-square1 {
            height: 200px;
            width: 200px;
            background-color: #99cce9;
            position: absolute;
            -ms-transform: rotate(-15deg);
            /* IE 9 */
            -webkit-transform: rotate(-15deg);
            /* Chrome, Safari, Opera */
            transform: rotate(-15deg);
            margin-left: auto;
            margin-right: auto;
            z-index: 100;
            position: absolute;
            margin: auto;
            margin-top: 60px;
            left: 0;
            right: 0;
            z-index: 100;
            color: white !important;
            max-width: 200px;
            max-height: 200px;
            overflow: hidden;
            text-align: center;
        }
        
        #error-square2 {
            height: 200px;
            width: 200px;
            background-color: #0980c9;
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            z-index: 200;
            left: 0px;
            right: 0px;
            max-width: 200px;
            text-align: center;
            margin-top: 60px;
            max-height: 200px;
            overflow: hidden;
            color: white;
            padding-top: 30px;
        }
        
        .errorpage {
            padding: 30px !important;
        }
        
        .error-box {
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            height: 100%;
        }
        
        .error-message {
            text-align: center;
            margin: 50px auto;
            margin-top: 300px;
        }
        
        @media (max-width:600px) {
            .error-message h1,
            h3 {
                display: none;
            }
        }
    </style>
    <div class="wrap container-fluid">
        <div class="row">
            <div class="col-xs-12  error-box">
                <div id="error-square1"></div>
                <div id="error-square2">
                    <h1 class=" " style="font-size:56px;">404</h2>
                <h2 class=" " style="font-size:24px;">error page</h3>
            </div>
        
        </div>
        <div class="col-xs-12 error-message ">
        
            <div>
            <h1 class="">OOPS...</h1>
                    <h3 class="">"We were unable to find the page you were looking for."</h3>
                    <button class="btn1" onclick="window.location.href='/'">Take me away</button>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>