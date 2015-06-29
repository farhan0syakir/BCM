        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('assets/js/jquery.easing.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.fittext.js')?>"></script>
    <script src="<?php echo base_url('assets/js/wow.min.js')?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/js/creative.js')?>"></script>

    <!-- Data table -->
    <script src="<?php echo base_url('assets/js/jquery.dataTables.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js')?>"></script>
</body>

<script>
$(document).ready(function() {
    $('.table').dataTable(  );
} );

    var counter = 0;
    var limit = 10;
    var isShowAlert = True;
    function addInput(divName, nameForInput,myLimit,myIsShowAlert){
         limit = myLimit;
         isShowAlert = myIsShowAlert;
         if (counter >= limit)  {
              if(isShowAlert){
                alert("You have reached the limit of adding " + counter + " inputs");
              }
         }else {
              var newdiv = document.createElement('div');
              newdiv.innerHTML = " <br><input class='form-control' placeholder='Enter text' name='"+nameForInput +"[]'>";
              document.getElementById(divName).appendChild(newdiv);
              counter++;
         }
    };

    function removeDiv(divName){
      document.getElementById(divName).innerHTML="";
    }

    function changeDeleteId(id){
      $('#linkDeleteButtonModal').attr("href", "<?php echo current_url().'/delete/'?>"+id);
    }

    function disableMyRight(selectId,myNumber,Length){
      // alert($(this).find('option:selected'));
      for (i = myNumber+1; i <= Length; i++) {
        var thisDiv = selectId+i;
        document.getElementById(thisDiv).disabled=true;
      }
    }

    function enableMyRight(selectId,myNumber,Length){
      // alert($(this).find('option:selected'));
      for (i = myNumber+1; i <= Length; i++) {
        var thisDiv = selectId+i;
        document.getElementById(thisDiv).disabled=false;
      }
    }
</script>