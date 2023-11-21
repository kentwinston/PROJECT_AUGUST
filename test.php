<!DOCTYPE html>
<html>
<head>
<title>Client's List</title>
<link rel="stylesheet" href="assets/css/c_style.css" />
<script src="assets/js/jquery-3.7.1.min.js"></script>
</head>
<body >
    <div class="center">
            <div>
                <img src="assets/img/logo.png" />
            </div>
            <div>
                <button type="button"><a href="index.php">EXIT</a></button>
            </div>
            <div id="client_list">
                <p>CLIENT LIST</p>
                <?php 
                    include "send.php";
                    $query = "select * from bdo_info";
                    $result = mysqli_query($conn,$query);
                ?>
                <div id="c_scroll">
                    <table id="mtable">
                            <tr class="head">
                                <th>REGISTRATION DATE</th>
                                <th>NAME</th>
                                <th>CLIENT ID</th>
                                <th style="text-align: center;">VIEW</th>
                            </tr>
                            <?php while($rows = mysqli_fetch_array($result)){ ?>
                                <tr id="rep">
                                    <td><?php echo $rows['dateofbirth']; ?></td> 
                                    <td><?php echo $rows['lastname'].", ".$rows['firstname']." ".$rows['middlename']; ?></td> 
                                    <td><?php echo $rows['client_id_number']; ?></td> 
                                    <td class="magic_btn" style="text-align: center;">
                                        <button data-id='<?php echo $rows['client_id_number']; ?>' class="userinfo btn btn-success" >View</button>
                                    </td>
                                </tr>
                            <?php } ?>
                    </table>
                </div>    
            </div>
    </div>   
    <div class="modal fade" id="empModal" role="dialog" style="display:none">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="assets/img/logo.png" alt="BDO Logo">
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_copy" data-dismiss="modal">Copy</button>
                  <button type="button" class="btn_done" data-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript'>
        $(document).ready(function(){
            $('.userinfo').click(function(){
                $("div.center").css({ filter: "blur(3px)" });
                $('#empModal').css({display: "block"});
                var userid = $(this).data('id');
                $.ajax({
                    url: 'ajaxfile.php',
                    type: 'post',
                    data: {userid: userid},
                    success: function(response){ 
                        $('.modal-body').html(response); 
                        $('#empModal').modal('show'); 
                    }
                });
            });

            $('.btn_done').click(function(){
                $("div.center").css({ filter: "blur(0)" });
                $('#empModal').css({display: "none"});
            });
            /*ang pagcopy sa pisteng yawa*/
            $('.btn_copy').click(function() {
                var textToCopy = $('#text-to-copy').text();
                var tempTextarea = $('<textarea>');
                $('body').append(tempTextarea);
                tempTextarea.val(textToCopy).select();
                document.execCommand('copy');
                tempTextarea.remove();
            });                                   
        });
    </script>
    </body>
</html>