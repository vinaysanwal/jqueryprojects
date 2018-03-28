<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <button type="button" class="btn btn-danger btn-custom btn-rounded waves-effect waves-light" id="button-reset">Reset Stock Log</button>
  <p></p>
  <script type="text/javascript">
    $(document).ready(function(){
        $("#button-reset").click(function(){
          event.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'script.php',
                data: new FormData(this),
						    contentType:false,
						    cache:false,
						    processData:false,
                success: function(data) {
                    alert(data);
                    $("p").text(data);
                  }
            });
   });
});
</script>
<body>
</html>
