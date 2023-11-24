<?php $this->load->view('templates/header'); ?>

<div class="container-xxl flex-grow-1 container-p-y">
<div class="page-inner mt--5">
                <div class="row row-demo-grid" style="padding-bottom:0px;padding-top:10px;">

            <div class="col-8">
                <div class="card" style="opacity:100%">
                    <div class="card-body pb-0" style="height:80px;display: block;bottom: auto!important;">
                        <h1>Tes Kecerdasan Paket 1</h1>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-primary" style="height:79.98px; width:240px!important;margin-right:-70px;">
                    <div class="card-body pb-0" style="height:70px;">
                        <div style="display: grid;
                            grid-auto-flow: column;
                            grid-gap: 5px;
                            width: 100%;">
                            <h1 style="font-weight: bold; font-size: 36px; text-align: center;font-color:white;padding-bottom:25px!important">
                                <i style="width:50px;padding-right:30px" class="fas fa-clock"></i>
                            </h1>
                            <h1 id="timer" style="font-weight: bold; font-size: 36px; text-align: center;font-color:white;padding-bottom:25px!important">01:29:31</h1><h1>
                                    <div id="countdown" style="display:none;">5371</div>

                        </h1></div>

                    </div>

                </div>
            </div>
            <div class="col-2">
                <div id="btn_result" class="card card-primary" style="height:79.98px; width:220px!important;margin-right:70px;display:block">
                    <div class="card-body pb-0" style="height:70px;">
                        <div>
                                                        <h1 id="btn_result" class="center" onclick="location.href='https://tryout.mitrasiswa.id/user/result?attempt_id=298';" style="cursor: pointer;text-align: center;">
                                SELESAI</h1><h1>
                            
                            

                        </h1></div>

                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card" id="question">

                <div class="card-header">
        <div class="card-head-row">
            <div class="card-title">Soal 1/100</div>
        </div>
    </div>
    <div class="card-body" style="">
        <blockquote>

            <p class="blockquote blockquote-primary">
                
                BONAFIDE = ... 

               

                <br>
                <br>

                
                                </p><div class="selectgroup selectgroup-pills" style="padding-top:10px;">
                    <label class="selectgroup-item">
                        <input type="radio" name="question3002" value="A" onclick="submit_answer(this,3002)" class="selectgroup-input" idx-id="3002" idx-no="1">
                        <span class="selectgroup-button selectgroup-button-icon">A
                        </span>
                    </label>

                    <label class="selectgroup-item">
                        <span class="answer-text" style="text-align:left"><p>BONSAI</p>
                        </span>
                    </label>
                </div>
                <br>
                
                                <div class="selectgroup selectgroup-pills" style="padding-top:10px;">
                    <label class="selectgroup-item">
                        <input type="radio" name="question3002" value="B" onclick="submit_answer(this,3002)" class="selectgroup-input" idx-id="3002" idx-no="1">
                        <span class="selectgroup-button selectgroup-button-icon">B
                        </span>
                    </label>

                    <label class="selectgroup-item">
                        <span class="answer-text" style="text-align:left"><p>SURAT</p>
                        </span>
                    </label>
                </div>
                <br>
                
                                <div class="selectgroup selectgroup-pills" style="padding-top:10px;">
                    <label class="selectgroup-item">
                        <input type="radio" name="question3002" value="C" onclick="submit_answer(this,3002)" class="selectgroup-input" idx-id="3002" idx-no="1">
                        <span class="selectgroup-button selectgroup-button-icon">C
                        </span>
                    </label>

                    <label class="selectgroup-item">
                        <span class="answer-text" style="text-align:left"><p>KAYA</p>

                        </span>
                    </label>
                </div>
                <br>
                
                                <div class="selectgroup selectgroup-pills" style="padding-top:10px;">
                    <label class="selectgroup-item">
                        <input type="radio" name="question3002" value="D" onclick="submit_answer(this,3002)" class="selectgroup-input" idx-id="3002" idx-no="1">
                        <span class="selectgroup-button selectgroup-button-icon">D
                        </span>
                    </label>

                    <label class="selectgroup-item">
                        <span class="answer-text" style="text-align:left"><p>SUKSES</p>
                        </span>
                    </label>
                </div>
                <br>
                
                                <div class="selectgroup selectgroup-pills" style="padding-top:10px;">
                    <label class="selectgroup-item">
                        <input type="radio" name="question3002" value="E" onclick="submit_answer(this,3002)" class="selectgroup-input" idx-id="3002" idx-no="1">
                        <span class="selectgroup-button selectgroup-button-icon">E
                        </span>
                    </label>

                    <label class="selectgroup-item">
                        <span class="answer-text" style="text-align:left"><p>JUJUR</p>
                        </span>
                    </label>
                </div>
                <br>
                
                
                            <p></p>
        </blockquote>
    </div>
                </div>

                <div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-6 ml-auto mr-auto">
                                <div class="card-body text-center" id="pagination" style="display:none">
                                <nav>
        <ul class="pagination" style="padding-left:100px;padding-right:100px;">
                <li class="page-item" aria-disabled="true">
                    <span class="page-link">« Previous</span>
                </li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                <li class="page-item">
                    <a class="page-link" rel="next" onclick="move_page(3003);">Next »first</a>
                </li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        </ul>
    </nav>

                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4" id="navigation"><div class="card card-primary" style="display:block;overflow:scroll;height:630px">
        <div class="card-body section-center">
									
            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3002);" type="button" class="item-center btn btn-icon btn-link btn-mobile  active-question  " style="">
                1
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3003);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                2
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3004);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                3
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3005);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                4
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3006);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                5
                </button>


                </div>
        <div class="card-body section-center">
									
            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3007);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                6
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3008);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                7
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3009);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                8
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3010);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                9
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3011);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                10
                </button>


                </div>
        <div class="card-body section-center">
									
            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3012);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                11
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3013);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                12
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3014);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                13
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3015);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                14
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3016);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                15
                </button>


                </div>
        <div class="card-body section-center">
									
            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3017);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                16
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3018);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                17
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3019);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                18
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3020);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                19
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3021);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                20
                </button>


                </div>
        <div class="card-body section-center">
									
            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3022);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                21
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3023);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                22
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3024);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                23
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3025);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                24
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3026);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                25
                </button>


                </div>
        <div class="card-body section-center">
									
            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3027);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                26
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3028);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                27
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3029);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                28
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3030);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                29
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3031);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                30
                </button>


                </div>
        <div class="card-body section-center">
									
            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3032);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                31
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3033);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                32
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3034);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                33
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3035);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                34
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3036);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                35
                </button>


                </div>
        <div class="card-body section-center">
									
            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3037);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                36
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3038);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                37
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3039);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                38
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3040);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                39
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3041);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                40
                </button>


                </div>
        <div class="card-body section-center">
									
            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3042);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                41
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3043);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                42
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3044);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                43
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3045);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                44
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3046);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                45
                </button>


                </div>
        <div class="card-body section-center">
									
            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3047);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                46
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3048);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                47
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3049);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                48
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3050);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                49
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3051);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                50
                </button>


                </div>
        <div class="card-body section-center">
									
            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3052);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                51
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3053);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                52
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3054);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                53
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3055);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                54
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3056);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                55
                </button>


                </div>
        <div class="card-body section-center">
									
            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3057);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                56
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3058);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                57
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3059);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                58
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3060);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                59
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3061);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                60
                </button>


                </div>
        <div class="card-body section-center">
									
            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3062);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                61
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3063);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                62
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3064);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                63
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3065);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                64
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3066);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                65
                </button>


                </div>
        <div class="card-body section-center">
									
            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3067);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                66
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3068);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                67
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3069);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                68
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3070);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                69
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3071);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                70
                </button>


                </div>
        <div class="card-body section-center">
									
            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3072);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                71
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3073);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                72
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3074);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                73
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3075);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                74
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3076);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                75
                </button>


                </div>
        <div class="card-body section-center">
									
            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3077);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                76
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3078);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                77
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3079);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                78
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3080);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                79
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3081);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                80
                </button>


                </div>
        <div class="card-body section-center">
									
            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3082);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                81
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3083);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                82
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3084);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                83
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3085);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                84
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3086);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                85
                </button>


                </div>
        <div class="card-body section-center">
									
            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3087);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                86
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3088);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                87
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3089);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                88
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3090);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                89
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3091);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                90
                </button>


                </div>
        <div class="card-body section-center">
									
            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3092);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                91
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3093);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                92
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3094);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                93
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3095);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                94
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3096);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                95
                </button>


                </div>
        <div class="card-body section-center">
									
            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3097);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                96
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3098);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                97
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3099);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                98
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3100);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                99
                </button>


            
            <!-- <button type="button" class="btn btn-icon btn-round btn-black">
				<i class="fa fa-align-left"></i>
            </button> -->

            <button onclick="move_page(3101);" type="button" class="item-center btn btn-icon btn-link btn-mobile  " style="">
                100
                </button>


                </div>
    
</div></div>
        </div>

                    <footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <!-- <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.themekita.com">
                        ThemeKita
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Help
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Licenses
                    </a>
                </li>
            </ul> -->
        </nav>
        <div class="copyright ml-auto">
        Copyright © Try Out Mitrasiswa 2021 <a href="https://tryout.mitrasiswa.id/#"></a> All rights reserved.

        </div>
    </div>
</footer>
        </div>
</div>

<?php $this->load->view('templates/footer'); ?>