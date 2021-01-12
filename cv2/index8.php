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
        $color = "#02A18B";
    } else {
        if ($_GET['color']==1) {
            $color = "#02A18B";
        }
        if ($_GET['color']==2) {
            $color = "#ffce45";
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="/cv1/build/new/html2canvas.js"></script>
    <script type="text/javascript" src="/cv1/jquery.responsiveheight.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
</head>
<body>
<style>
body {
    background: #efebeb;
}
.img-ho-so {
    width: 100%;

}
.thong-tin-ho-so ul {
    list-style-type: none;
  margin: 0;
  padding: 0;
}
.icon_left {
    border-radius: 11%;
    padding: 5px;
    background: <?= $color ?>;
    color: #fff;
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
    <div class="container canvas_div_pdf" id="html-content-holder" style="width: 780px;border: 1px solid #000;padding-top: 40px;background: #fff;">
        <div class="row" style="background: <?= $color ?>;text-align: right;height: 35px;">
            <span style="background: #fff;margin-right: 20px;color: <?= $color ?>;font-size: 16px;text-transform: uppercase;padding: 10px 5px;position: relative;top: 7px;"><?= $ho_so['position'] ?></span>
        </div>
        <div style="padding: 0 40px 40px 40px">
            <h1 style="color: <?= $color ?>;text-transform: uppercase;font-size: 30px;"><?= $ung_vien['name'] ?></h1>
            <div class="row">
                <div class="col-md-9">
                    <p style="color: #000;"><i class="fa fa-intersex icon_left" style=""></i> Giới tính: <?= $ung_vien['sex']==1 ? 'Nam' : 'Nữ' ?></p>
                    <p style="color: #000;"><i class="fa fa-birthday-cake icon_left" style=""></i> Ngày sinh: <?= date('d-m-Y', strtotime($ung_vien['birthday'])) ?></p>
                    
                    <p style="color: #000;"><i class="fa fa-map-marker icon_left" style=""></i> Địa chỉ: <?= $ho_so['address'] ?></p>
                    <p style="color: #000;"><i class="fa fa-phone icon_left" style=""></i> ĐT: <?= $ung_vien['phone'] ?></p>
                    <p style="color: #000;"><i class="fa fa-envelope-o icon_left" style=""></i> Email: <?= $ung_vien['email'] ?></p>
                </div>
                <div class="col-md-3">
                    <img src="/images/<?= $ung_vien['image']!='' ? $ung_vien['image'] : 'no-photo.png' ?>" alt="" class="img-ho-so responsive" hrelation="1">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 style="color: <?= $color ?>;font-size: 17px;text-transform: uppercase;">Thông tin hồ sơ</h2>
                    <div class="thong-tin-ho-so">
                        <?php 
                            // if ($ung_vien['type'] == 0) {
                                include dirname(__FILE__) . "/../template/others/MS_OTHER_VIECLAM_0001_1.php";
                            // } else {
                            //     include dirname(__FILE__) . "/../template/others/MS_OTHER_VIECLAM_0002.php";
                            // }
                            ?> 
                    </div>
                    <h2 style="color: <?= $color ?>;font-size: 17px;text-transform: uppercase;">Mục tiêu nghề nghiệp</h2>
                    <p style="color: #000;">
                        <?php
                            $thong_tin_item = str_replace("\r\n", "<br>", $ho_so['muc_tieu']);
                            echo $thong_tin_item ;
                            ?>
                    </p>

                <h2 style="color: <?= $color ?>;font-size: 17px;text-transform: uppercase;">Kỹ năng của bản thân</h2>
                    <!-- <p>
                            <?php
                            $thong_tin_skill = str_replace("\r\n", "<br>", $ho_so['skill']);
                            // echo $thong_tin_skill ;
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
                    <h2 style="color: <?= $color ?>;font-size: 17px;text-transform: uppercase;">Ngoại ngữ</h2>
                    <p style="color: #000;">
                        <?php
                            echo $action->getDetail('ngoai_ngu_1', 'id', $ho_so['ngoai_ngu_tin_hoc'])['name'] ;
                            ?>
                    </p>
                    <h2 style="color: <?= $color ?>;font-size: 17px;text-transform: uppercase;">Kinh nghiệm làm việc</h2>
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
        </div>
        <hr style="border-top: 30px solid <?= $color ?>;">
    </div>
    <div style="text-align: center;margin-top: 20px;" class="row">
        <a title="">Màu</a>
        <a href="index8.php?id=<?= $_GET['id'] ?>&color=1" title="" style="background: #02A18B;color: #fff;padding: 3px 11px;border-radius: 15px;margin-left: 10px"></a>
        <a href="index8.php?id=<?= $_GET['id'] ?>&color=2" title="" style="background: #ffce45;color: #fff;padding: 3px 11px;border-radius: 15px;margin-left: 10px"></a>
        <a href="index8.php?id=<?= $_GET['id'] ?>&color=3" title="" style="background: #de5449;color: #fff;padding: 3px 11px;border-radius: 15px;margin-left: 10px"></a>
        <a href="index8.php?id=<?= $_GET['id'] ?>&color=4" title="" style="background: #286898;color: #fff;padding: 3px 11px;border-radius: 15px;margin-left: 10px"></a>
        <a href="index8.php?id=<?= $_GET['id'] ?>&color=5" title="" style="background: #19a05e;color: #fff;padding: 3px 11px;border-radius: 15px;margin-left: 10px"></a>
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
