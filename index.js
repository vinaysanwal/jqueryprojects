<script type="text/javascript">
$("#removeStock").submit(function(event) {
                            event.preventDefault();

                            // get and check values wherehouse id and stock
                            whereHouseID =    $("#warehouse").val();
                            var stock = $("#stockCount").val();
                                var stockComments = $("#removeStockcomments").val();





                            $(".loader_wrap").fadeIn();
                             $.ajax({
                                url: '<?php echo @$siteRoot;?>/mPanel/post/remove_stock.php',
                                type: 'POST',
                                data: new FormData(this),
                                contentType: false,
                                cache: false,
                                processData:false,
                                success: function(data){


                                    location.reload();
                                }
                            }); // end of ajex calle  */
                        });
<script>
