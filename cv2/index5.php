<?php 
    include_once dirname(__FILE__) . "/../functions/database.php";
    include_once dirname(__FILE__) . "/../functions/library.php";
    include_once dirname(__FILE__) . "/../functions/action.php";

    $action = new action();

    $ung_vien = $action->getDetail('ung_vien', 'id', $_GET['id']);//var_dump($ung_vien);
    $ho_so = $action->getDetail('ho_so', 'ung_vien_id', $ung_vien['id']);
    // $kinhnghiem = $action->getDetail('ex');

    $work_progress = json_decode($ho_so['work_progress']);
    $knlv_1 = json_decode($ho_so['knlv_1']);
    $knlv_2 = json_decode($ho_so['knlv_2']);
    $knlv_3 = json_decode($ho_so['knlv_3']);
    $knlv_4 = json_decode($ho_so['knlv_4']);
    $knlv_5 = json_decode($ho_so['knlv_5']);

    if (!isset($_GET['color'])) {
        $color = "#246B81";
    } else {
        if ($_GET['color']==1) {
            $color = "#246B81";
        }
        if ($_GET['color']==2) {
            $color = "#2f5177";
        }
        if ($_GET['color']==3) {
            $color = "#de5449";
        }
        if ($_GET['color']==4) {
            $color = "#286898";
        }
        if ($_GET['color']==5) {
            $color = "#19a05e";
        }
    }
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
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <script src="/cv1/build/new/html2canvas.js"></script>
    <script type="text/javascript" src="/cv1/jquery.responsiveheight.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script> -->
    <!-- <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script> -->
</head>
<body>
<style>
body {
    background: #efebeb;
}
.img-ho-so {
    width: 100%;
    border-radius: 75%;
}
.thong-tin-ho-so ul {
    list-style-type: none;
  margin: 0;
  padding: 0;
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
    <div class="container canvas_div_pdf" id="html-content-holder" style="width: 911px;border: 1px solid #000;padding: 40px;background: #fff;min-height: 1100px;">
        <div class="row">
            <div class="col-md-3">
                <div style="border: 3px solid <?= $color ?>;border-radius: 80%;">
                    <img src="/images/<?= $ung_vien['image']!='' ? $ung_vien['image'] : 'no-photo.png' ?>" alt="" class="img-ho-so responsive" hrelation="1">
                </div>
                
            </div>
            <div class="col-md-9" style="margin-top: 27px;">
                <div class="row">
                    <div class="col-md-6"><h1 style="color:<?= $color ?>;font-size: 32px;margin-bottom: 0;"><?= $ung_vien['name'] ?></h1></div>
                    <div class="col-md-6"><p style="color: <?= $color ?>;text-align: right;text-transform: uppercase;font-weight: bold;font-size: 12px;margin-top: 36px;margin-right: 0;"><?= $ho_so['position'] ?></p></div>
                </div>
                <hr style="width: 106%;border-top: 4px solid <?= $color ?>;margin-bottom: 8px;margin-left: -30px;margin-top: 0;">
                <div class="row">
                    <div class="col-md-6">
                        <p style="color: #000;"><i class="fa fa-phone icon_left" style=""></i> <?= $ung_vien['phone'] ?></p>
                    </div>
                    <div class="col-md-6">
                        <p style="color: #000;"><i class="fa fa-envelope-o icon_left" style=""></i> <?= $ung_vien['email'] ?></p>
                    </div>
                    <div class="col-md-12">
                        <p style="color: #000;"><i class="fa fa-map-marker icon_left" style=""></i> <?= $ho_so['address'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-right: 0;margin-left: 0;">
            <h2 style="color: <?= $color ?>;text-transform: uppercase;font-size: 28px;">Thông tin hồ sơ</h2>
            <hr style="margin-top: 0;margin-bottom: 10px;border-top: 3px solid #CCCCCC;">
            <div class="thong-tin-ho-so">
                <?php 
                    // if ($ung_vien['type'] == 0) {
                        include dirname(__FILE__) . "/../template/others/MS_OTHER_VIECLAM_0001_1.php";
                    // } else {
                    //     include dirname(__FILE__) . "/../template/others/MS_OTHER_VIECLAM_0002.php";
                    // }
                    ?> 
            </div>
            <h2 style="color: <?= $color ?>;text-transform: uppercase;font-size: 28px;">Mục tiêu nghề nghiệp</h2>
            <hr style="margin-top: 0;margin-bottom: 10px;border-top: 3px solid #CCCCCC;">
            <p style="color: #000;">
                        <?php
                            $thong_tin_item = str_replace("\r\n", "<br>", $ho_so['muc_tieu']);
                            echo $thong_tin_item ;
                            ?>
                    </p>
            <h2 style="color: <?= $color ?>;text-transform: uppercase;font-size: 28px;">Kỹ năng của bản thân</h2>
            <hr style="margin-top: 0;margin-bottom: 10px;border-top: 3px solid #CCCCCC;">
            <!-- <p>
                            <?php
                            $thong_tin_skill = str_replace("\r\n", "<br>", $ho_so['skill']);
                            echo $thong_tin_skill ;
                            ?>
                        </p> -->
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
            <h2 style="color: <?= $color ?>;text-transform: uppercase;font-size: 28px;">Ngoại ngữ</h2>
            <hr style="margin-top: 0;margin-bottom: 10px;border-top: 3px solid #CCCCCC;">
            <p style="color: #000;">
                        <?php
                            echo $action->getDetail('ngoai_ngu_1', 'id', $ho_so['ngoai_ngu_tin_hoc'])['name'] ;
                            ?>
                    </p>
            <h2 style="color: <?= $color ?>;text-transform: uppercase;font-size: 28px;">Kinh nghiệm làm việc</h2>
            <hr style="margin-top: 0;margin-bottom: 10px;border-top: 3px solid #CCCCCC;">
            <p>
                            <?php
                            // $thong_tin_work = str_replace("\r\n", "<br>", $ho_so['work_progress']);
                            // echo $thong_tin_work ;
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
    </div>
    <div style="text-align: center;margin-top: 20px;" class="row">
        <a title="">Màu</a>
        <a href="index5.php?id=<?= $_GET['id'] ?>&color=1" title="" style="background: #246B81;color: #fff;padding: 3px 11px;border-radius: 15px;margin-left: 10px"></a>
        <a href="index5.php?id=<?= $_GET['id'] ?>&color=2" title="" style="background: #2f5177;color: #fff;padding: 3px 11px;border-radius: 15px;margin-left: 10px"></a>
        <a href="index5.php?id=<?= $_GET['id'] ?>&color=3" title="" style="background: #de5449;color: #fff;padding: 3px 11px;border-radius: 15px;margin-left: 10px"></a>
        <a href="index5.php?id=<?= $_GET['id'] ?>&color=4" title="" style="background: #286898;color: #fff;padding: 3px 11px;border-radius: 15px;margin-left: 10px"></a>
        <a href="index5.php?id=<?= $_GET['id'] ?>&color=5" title="" style="background: #19a05e;color: #fff;padding: 3px 11px;border-radius: 15px;margin-left: 10px"></a>
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

            // $("#previewImage").append(canvas);
                
            
            console.log(canvas.height+"  "+canvas.width);
            
            
            var imgData = canvas.toDataURL("image/jpeg", 1.0);
            var pdf = new jsPDF('p', 'pt',  [PDF_Width, PDF_Height]);
            // pdf.addPage(PDF_Width, PDF_Height);
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