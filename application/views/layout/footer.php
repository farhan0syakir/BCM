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

</body>

<script>
    var counter = 0;
    var limit = 10;
    function addInput(divName, labelName , nameForInput){
         if (counter == limit)  {
              alert("You have reached the limit of adding " + counter + " inputs");
         }
         else {
              var newdiv = document.createElement('div');
              newdiv.innerHTML = labelName+" " + (counter + 1) + " <br><input type='text' name='"+nameForInput +"[]'>";
              document.getElementById(divName).appendChild(newdiv);
              // document.getElementById(buttonId).attr("onClick","addInput("+buttonId+", "+(counter+1)+", "+divName+", "+labelName+" ,"+nameForInput+")");
              // $(#btnTambahVulnerability).attr("onClick","farhan");
              counter++;
         }
    }
</script>