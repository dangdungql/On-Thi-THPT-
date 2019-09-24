<?php

include('inc/myconnect.php');
include('inc/function.php');
$query_1 = "SELECT * FROM first_level_category ORDER BY first_level_category_name ASC";
$results_1=mysqli_query($dbc,$query_1);
kt_query($results_1,$query_1);

$query_2 = "SELECT * FROM second_level_category ORDER BY second_level_category_name ASC";
$results_2=mysqli_query($dbc,$query_2);
kt_query($results_2,$query_2);

$query_3 = "SELECT * FROM third_level_category ORDER BY third_level_category_name ASC";
$results_3=mysqli_query($dbc,$query_3);
kt_query($results_3,$query_3);
?>
<!DOCTYPE html>
    <html>
        <head>
            <title>ĐỊNH HƯỚNG BẢN THÂN</title>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
        </head>

        <body>
            <br />
            <div class="container">
            <h2 align="center">ĐỊNH HƯỚNG BẢN THÂN</h2>
            <br /><br />
            <div style="width: 100%; margin:0 auto">
                <script>
                    $(document).ready(function(){

                        var form_data = "";
                        $('#sothich').multiselect({
                            nonSelectedText:'Sở thích',
                            enableFiltering: true,
                            enableCaseInsensitiveFiltering: true,
                            buttonWidth:'100%',
                                templates: {
        button: '<button type="button" class="multiselect dropdown-toggle" data-toggle="dropdown"><span class="multiselect-selected-text"></span> <b class="caret"></b></button>',
        ul: '<ul class="multiselect-container dropdown-menu" style="width: 100%"></ul>',
        filter: '<li class="multiselect-item multiselect-filter"><div class="input-group"><input class="form-control multiselect-search" type="text" style="width: 100px"></div></li>',
        filterClearBtn: '<span class="input-group-btn"><button class="btn btn-default multiselect-clear-filter" type="button"><i class="glyphicon glyphicon-remove-circle"></i></button></span>',
        li: '<li><a tabindex="0"><label></label></a></li>',
        divider: '<li class="multiselect-item divider"></li>',
        liGroup: '<li class="multiselect-item multiselect-group"><label></label></li>'
    },


                        });

                        $('#diachi').multiselect({
                            nonSelectedText: 'Địa điểm',
                            enableFiltering: true,
                            enableCaseInsensitiveFiltering: true,
                            buttonWidth:'59%',
                            templates: {
        button: '<button style="width: 100%" type="button" class="multiselect dropdown-toggle" data-toggle="dropdown"><span class="multiselect-selected-text"></span> <b class="caret"></b></button>',
        ul: '<ul class="multiselect-container dropdown-menu" style="width: 100%"></ul>',
        li: '<li><a tabindex="0"><label></label></a></li>',
        divider: '<li class="multiselect-item divider"></li>',
        liGroup: '<li class="multiselect-item multiselect-group"><label></label></li>'
    },
                        });

                        $('#quatrinh').multiselect({
                            nonSelectedText: 'Tổ hợp môn ',
                            enableFiltering: true,
                            enableCaseInsensitiveFiltering: true,
                            buttonWidth:'39%'
                         });
                     
                        $('#framework_form').on('submit', function(event){
                            //event.preventDefault();
                            var form_data = $(this).serialize();
                            //alert(form_data);
                            document.getElementById("ds").value=form_data;
                            
                        });
                    });

                </script>
                    <?php 

                if($_SERVER['REQUEST_METHOD']=='POST')
                {
                    $a=$_POST['ds'];
                    //echo $a;
                }
                ?>
                <form method="POST" id="framework_form" enctype="multipart/form-data">
                    <div class="row">
                        <!-- <label style="font-size:15px;">Sở Thích</label> -->
                        <select id="sothich" name="sothich" multiple class="mdb-select md-form" multiple >
                            <?php
                                while($answers=mysqli_fetch_array($results_1,MYSQLI_ASSOC))
                                {          
                                    echo '<option  style="font-size:15px;" value="'.$answers["id"].'">'.$answers["first_level_category_name"].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="row">
                    <!-- <label  style="font-size:15px;">Địa điểm</label> -->
                    <select id="diachi" name="diachi" multiple class="mdb-select md-form" multiple>
                        <?php
                            while($answers=mysqli_fetch_array($results_2,MYSQLI_ASSOC))
                            {          
                            echo '<option value="'.$answers["second_level_category_id"].'">'.$answers["second_level_category_name"].'</option>';
                            }
                        ?>
                    </select>
                    
                        <!-- <label  style="font-size:15px;">Tổ hợp môn</label> -->
                            <select id="quatrinh" name="quatrinh" multiple class="mdb-select md-form" multiple>
                                <?php
                                while($answers=mysqli_fetch_array($results_3,MYSQLI_ASSOC))
                                {          
                                echo '<option value="'.$answers["third_level_category_id"].'">'.$answers["third_level_category_name"].'</option>';
                                }
                                ?>
                            </select>

                    <div class="form-group" align="right">
                        <input type="hidden" id="ds" name="ds" value="">
                        <input type="submit" class="btn btn-info" name="submit" value="Chọn"/>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </body>
</html>



    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400">   <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="cs/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->
<body id="top" class="page-2">
        <div class="container-fluid">
 
            <div class="row">
                <div class="tm-section" id="tm-section-5">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <h3 class="blue-text">Danh sách trường tham khảo</h3>
              
                        <table class="table table-striped tm-full-width-large-table">
                            <thead>
                                <tr>
                                    <!-- <th>Title</th> -->
                                    <th>Tên Trường</th>
                                    <th>Khoa</th>
                                    <th>Địa chỉ</th>
                                    <th>Tổ hợp môn</th>
                                    <th>Điểm Chuẩn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!-- <td>Row 1</td> -->
                                    <td>Đại học công nghệ thông tin</td>
                                    <td>Công nghệ phần mềm</td>
                                    <td>TP Hồ Chí Minh</td>
                                    <td>A00, A01</td>
                                    <td>25.3</td>
                                </tr>
                                <tr>
                                    <!-- <td>Row 2</td> -->
                                    <td>Đại học bách khoa tp HCM</td>
                                    <td>Công nghệ thông tin</td>
                                    <td>TP Hồ Chí Minh</td>
                                    <td>A00, A01</td>
                                    <td>25.3</td>
                                </tr>
                                <tr>
                                    <!-- <td>Row 3</td> -->
                                    <td>Đại Học Khoa Học Tự Nhiên</td>
                                    <td>Khoa học máy tính</td>
                                    <td>TP Hồ Chí Minh</td>
                                    <td>A00, A01</td>
                                    <td>24.6</td>
                                </tr>
                                <tr>
                                    <!-- <td>Row 4</td> -->
                                    <td>Đại Học Khoa Học Tự Nhiên</td>
                                    <td>Toán học</td>
                                    <td>TP Hồ Chí Minh</td>
                                    <td>A00, A01</td>
                                    <td>16.1</td>
                                </tr>
                                <tr>
                                    <!-- <td>Row 5</td> -->
                                    <td>TRƯỜNG ĐẠI HỌC SƯ PHẠM</td>
                                    <td>Sư phạm Tin học</td>
                                    <td>Đà Nẵng</td>
                                    <td>A00, A01</td>
                                    <td>19,40</td>
                                </tr>
                            </tbody>        
                        </table>
                    </div>
                </div> <!-- tm-section -->        
            </div>
        </div>
    </body>