<?php 
    include_once dirname(__FILE__) . "/../functions/database.php";
    include_once dirname(__FILE__) . "/../functions/library.php";
    include_once dirname(__FILE__) . "/../functions/action.php";

    $action = new action();

    $ung_vien = $action->getDetail('ung_vien', 'id', $_GET['id']);//var_dump($ung_vien);
    $ho_so = $action->getDetail('ho_so', 'ung_vien_id', $ung_vien['id']);
    // $kinhnghiem = $action->getDetail('ex');
    if (!isset($_GET['color'])) {
        $color = "#1F2022";
        // $color1 = "#7f6d58";
    } else {
        if ($_GET['color']==1) {
            $color = "#1F2022";
            // $color1 = "#7f6d58";
        }
        if ($_GET['color']==2) {
            $color = "#3AA368";
            // $color1 = "#28BC9C";
        }
        if ($_GET['color']==3) {
            $color = "#546D8C";
            // $color1 = "#3281BC";
        }
        if ($_GET['color']==4) {
            $color = "#de5449";
            // $color1 = "#3281BC";
        }
        if ($_GET['color']==5) {
            $color = "#ffce45";
            // $color1 = "#3281BC";
        }
    }

    $work_progress = json_decode($ho_so['work_progress']);
    $knlv_1 = json_decode($ho_so['knlv_1']);
    $knlv_2 = json_decode($ho_so['knlv_2']);
    $knlv_3 = json_decode($ho_so['knlv_3']);
    $knlv_4 = json_decode($ho_so['knlv_4']);
    $knlv_5 = json_decode($ho_so['knlv_5']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CV</title>
    <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> -->
    <!-- <link rel="stylesheet" href=""> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="/css/style-ruouvang.css"> -->
    <!-- <link href="https://doannguyennet.github.io/iconsfont/linearicons.min.css" rel="stylesheet"/> -->
    <link href="/cv1/style.css" rel="stylesheet"/>
    <link href="/cv1/style1.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/plugin/fonts/font-awesome/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="/cv1/build/new/html2canvas.js"></script>
    <script type="text/javascript" src="/cv1/jquery.responsiveheight.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <!-- <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script> -->
</head>
<body>
<style>
body {
    background: #efebeb;
}
.tri {
    width: 100%;
    /*height: 0;*/
    /*border-bottom: 30px solid #fff;*/
    /*border-left: 789px solid transparent;*/
    /*border-top: 0;*/
    /*border-right: 0;*/
    position: absolute;
    bottom: 0;
}
.img-ho-so {
    border-radius: 60%;
    width: 100%;
}
.title-item {
    text-transform: uppercase;
    font-size: 22px;
    font-weight: bold;
}
.info-hoso ul {
    list-style-type: none;
  margin: 0;
  padding: 0;
}
#html-content-holder {
    
}

.bar {
  width: 100%;
  background-color: #ddd;
}
.skills {
  text-align: right;
  padding-top: 3px;
  padding-bottom: 3px;
  color: white;
    background-color: #2196F3;
}
#skill p {
    /*color: #fff;*/
    margin-top: 7px;
    margin-bottom: 0px;
}
</style>
    <div class="container canvas_div_pdf" id="html-content-holder" style="width: 780px;border: 0px solid #000;background: #fff;">
        <div style="background: <?= $color ?>;height: 250px;position: relative;">
            <div class="row">
                <div class="col-xs-4">
                    <div style="padding: 26px 54px;">
                        <img src="/images/<?= $ung_vien['image']!='' ? $ung_vien['image'] : 'no-photo.png' ?>" alt="" class="img-ho-so responsive" style="" hrelation="1">
                    </div>
                </div>
                <div class="col-xs-8" style="margin-top: 30px;">
                    <h1 style="font-weight: bold;color: #fff;"><?= $ung_vien['name'] ?></h1>
                    <p style="color: #fff;font-family: cursive;font-size: 16px;"><?= $ho_so['position'] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <p style="color:#fff;padding-left: 38px;"><?= $ho_so['address'] ?></p>
                </div>
                <div class="col-xs-4">
                    <p style="color:#fff;padding-left: 38px;"><?= $ung_vien['email'] ?></p>
                </div>
                <div class="col-xs-4">
                    <p style="color:#fff;padding-left: 38px;"><?= $ung_vien['phone'] ?></p>
                </div>
            </div>
            <?php if ($color == "#1F2022") { ?>
            <div class="tri"><img src="/cv1/tri/triangle.PNG" alt="" style="width: 100%;"></div>
            <?php } ?>
            <?php if ($color == "#3AA368") { ?>
            <div class="tri"><img src="/cv1/tri/triangle-1.PNG" alt="" style="width: 100%;"></div>
            <?php } ?>
            <?php if ($color == "#546D8C") { ?>
            <div class="tri"><img src="/cv1/tri/triangle-2.PNG" alt="" style="width: 100%;"></div>
            <?php } ?>
        </div>
        <div style="padding: 10px 30px 30px;background: #fff;">
            <h2 class="title-item">Thông tin hồ sơ</h2>
            <div class="info-hoso">
                <?php 
                // if ($ung_vien['type'] == 0) {
                    include dirname(__FILE__) . "/../template/others/MS_OTHER_VIECLAM_0001_1.php";
                // } else {
                //     include dirname(__FILE__) . "/../template/others/MS_OTHER_VIECLAM_0002.php";
                // }
                ?>
            </div>
            
            <h2 class="title-item">Mục tiêu nghề nghiệp</h2>
            <p>
                <?php
                $thong_tin_item = str_replace("\r\n", "<br>", $ho_so['muc_tieu']);
                echo $thong_tin_item 
                ?>
            </p>
            <h2 class="title-item">Kỹ năng bản thân</h2>
                    <div style="max-width: 80%;" id="skill">
                        <?php if ($ho_so['skill_1']==1) { ?>
                        <p>Kỹ năng tổ chức</p>
                        <div class="bar">
                          <div class="skills" style="width: 55%;"></div>
                        </div>
                        <?php } ?>
                        <?php if ($ho_so['skill_2']==1) { ?>
                        <p>Kỹ năng giao tiếp</p>
                        <div class="bar">
                          <div class="skills" style="width: 80%;"></div>
                        </div>
                        <?php } ?>
                        <?php if ($ho_so['skill_3']==1) { ?>
                        <p>Kỹ năng làm việc độc lập</p>
                        <div class="bar">
                          <div class="skills" style="width: 90%;"></div>
                        </div>
                        <?php } ?>
                        <?php if ($ho_so['skill_4']==1) { ?>
                        <p>Kỹ năng làm việc nhóm</p>
                        <div class="bar">
                          <div class="skills" style="width: 95%;"></div>
                        </div>
                        <?php } ?>
                        <?php if ($ho_so['skill_5']==1) { ?>
                        <p>Kỹ năng lãnh đạo</p>
                        <div class="bar">
                          <div class="skills" style="width: 80%;"></div>
                        </div>
                        <?php } ?>
                        <?php if ($ho_so['skill_6']==1) { ?>
                        <p>Kỹ năng thuyết trình</p>
                        <div class="bar">
                          <div class="skills" style="width: 95%;"></div>
                        </div>
                        <?php } ?>
                        <?php if ($ho_so['skill_7']==1) { ?>
                        <p>Giải quyết vấn đề</p>
                        <div class="bar">
                          <div class="skills" style="width: 80%;"></div>
                        </div>
                        <?php } ?>
                        <?php if ($ho_so['skill_8']==1) { ?>
                        <p>Tư duy sáng tạo</p>
                        <div class="bar">
                          <div class="skills" style="width: 85%;"></div>
                        </div>
                        <?php } ?>
                        <?php if ($ho_so['skill_9']==1) { ?>
                        <p>Giao tiếp ngoại ngữ</p>
                        <div class="bar">
                          <div class="skills" style="width: 75%;"></div>
                        </div>
                        <?php } ?>
                        <?php if ($ho_so['skill_10']==1) { ?>
                        <p>Thành thạo window excel</p>
                        <div class="bar">
                          <div class="skills" style="width: 97%;"></div>
                        </div>
                        <?php } ?>
                    </div>
            <h2 class="title-item">Ngoại ngữ</h2>
            <p>
                <?php
                echo $action->getDetail('ngoai_ngu_1', 'id', $ho_so['ngoai_ngu_tin_hoc'])['name'] ; 
                ?>
            </p>
            <h2 class="title-item">Kinh nghiệm làm việc</h2>
            <p>
                <?php
                // $thong_tin_work = str_replace("\r\n", "<br>", $ho_so['work_progress']);
                // echo $thong_tin_work 
                ?></p>
            <?php
                $d = -1;
                foreach ($work_progress as $item) { 
                    $d++;
                ?>
                <div class="row">
                    <div class="col-xs-6" style="font-weight: bold;text-transform: uppercase;"><?= $knlv_1[$d] ?></div>
                    <div class="col-xs-6" style="font-weight: bold;text-align: right;"><?= $knlv_2[$d] ?></div>
                    <div class="col-xs-12">Vị trí: <?= $knlv_3[$d] ?></div>
                    <div class="col-xs-12">Mô tả:<br><?= str_replace("\r\n", "<br>", $item) ?></div>
                    <div class="col-xs-6"><strong>Người tham chiếu:</strong><br> <?= $knlv_4[$d] ?></div>
                    <div class="col-xs-6" style="text-align: right;"><br>ĐT: <?= $knlv_5[$d] ?></div>
                </div>
                <br>
                <?php } ?>
            
        </div>
        <hr style="border-top: 8px solid <?= $color ?> !important;background: #fff;">
    </div>
    <div style="text-align: center;margin-top: 20px;" class="row">
        <a title="">Màu</a>
        <a href="index3.php?id=<?= $_GET['id'] ?>&color=1" title="" style="background: #1F2022;color: #fff;padding: 3px 11px;border-radius: 15px;margin-left: 10px"></a>
        <a href="index3.php?id=<?= $_GET['id'] ?>&color=2" title="" style="background: #3AA368;color: #fff;padding: 3px 11px;border-radius: 15px;margin-left: 10px"></a>
        <a href="index3.php?id=<?= $_GET['id'] ?>&color=3" title="" style="background: #546D8C;color: #fff;padding: 3px 11px;border-radius: 15px;margin-left: 10px"></a>
        <a href="index3.php?id=<?= $_GET['id'] ?>&color=4" title="" style="background: #de5449;color: #fff;padding: 3px 11px;border-radius: 15px;margin-left: 10px"></a>
        <a href="index3.php?id=<?= $_GET['id'] ?>&color=5" title="" style="background: #ffce45;color: #fff;padding: 3px 11px;border-radius: 15px;margin-left: 10px"></a>
    </div>
    <br/>

<!-- <div style="text-align: center;">
    <input id="btn-Preview-Image" type="button" value="Preview"/>
    <a id="btn-Convert-Html2Image" href="#">Download</a>
    <br/>
    <h3>Preview :</h3>
    <div id="previewImage" style="display: ;">
    </div>
</div> -->

<!-- <script>
$(document).ready(function(){

    
var element = $("#html-content-holder"); // global variable
var getCanvas; // global variable
 
    $("#btn-Preview-Image").on('click', function () {
         html2canvas(element, {
         onrendered: function (canvas) {
                $("#previewImage").append(canvas);
                getCanvas = canvas;
                // document.getElementById("btn-Convert-Html2Image").click();
             }
         });
    });

    $("#btn-Convert-Html2Image").on('click', function () {
    var imgageData = getCanvas.toDataURL("image/png");
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
    $("#btn-Convert-Html2Image").attr("download", "info_cv.png").attr("href", newData);
    });

});

</script> -->
<script type="text/javascript">
    $(document).ready(function(){
        $('.responsive').responsiveheight();
    });
</script>

<div style="text-align: center;">
    <button type="button" onclick="getPDF()">Tải CV</button>
</div>

<script>
    function getPDF(){

        var HTML_Width = $(".canvas_div_pdf").width();
        var HTML_Height = $(".canvas_div_pdf").height();
        var top_left_margin = 15;
        var PDF_Width = HTML_Width+(top_left_margin*2);
        var PDF_Height = (PDF_Width*1.5)+(top_left_margin*2);
        var canvas_image_width = HTML_Width;
        var canvas_image_height = HTML_Height;
        
        var totalPDFPages = Math.ceil(HTML_Height/PDF_Height)-1;
        

        html2canvas($(".canvas_div_pdf")[0],{allowTaint:true}).then(function(canvas) {
            canvas.getContext('2d');
            
            console.log(canvas.height+"  "+canvas.width);
            
            
            var imgData = canvas.toDataURL("image/jpeg", 1.0);
            var pdf = new jsPDF('p', 'pt',  [PDF_Width, PDF_Height]);
            pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin,canvas_image_width,canvas_image_height);
            
            
            for (var i = 1; i <= totalPDFPages; i++) { 
                pdf.addPage(PDF_Width, PDF_Height);
                pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
            }
            
            pdf.save("cv.pdf");
        });
    };
</script>
</body>