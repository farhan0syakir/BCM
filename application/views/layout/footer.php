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
    <script src="<?php echo base_url('assets/js/jquery.dataTables.js')?>"></script>
    

</body>

<script>
$(document).ready(function() {
    $('.table').dataTable();


} );
    
    var getDependenciesCounter = 1;
    function getDependenciesForm(divName,stream) {
      // get the time if clicked via an ajax get queury
      // see the code in the controller time.php
      $.get("/BCM/index.php/bia/getDependenciesForm/"+stream+"/"+getDependenciesCounter, function (data) {
        var newdiv = document.createElement('div');
        newdiv.innerHTML = data;
        document.getElementById(divName).appendChild(newdiv);
      });
    }

    var addInputCounter = 0;
    var limit = 10;
    var isShowAlert = True;
    function addInput(divName, nameForInput,myLimit,myIsShowAlert){
         limit = myLimit;
         isShowAlert = myIsShowAlert;
         if (addInputCounter >= limit)  {
              if(isShowAlert){
                alert("You have reached the limit of adding " + addInputCounter + " inputs");
              }
         }else {
              var newdiv = document.createElement('div');
              newdiv.innerHTML = " <br><input class='form-control' placeholder='Enter text' name='"+nameForInput +"[]'>";
              document.getElementById(divName).appendChild(newdiv);
              addInputCounter++;
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
        document.getElementById(thisDiv).readOnly = true;
        document.getElementById(thisDiv).options[5].selected = true;
      }
      setRTO(selectId,myNumber);
    }

    function enableMyRight(selectId,myNumber,Length){
      // alert($(this).find('option:selected'));
      for (i = myNumber+1; i <= Length; i++) {
        var thisDiv = selectId+i;
        document.getElementById(thisDiv).readOnly = false;
        document.getElementById(thisDiv).options[0].selected = true;
      }
      // setRTO();
    }

    var finansialImpactSelectNumber = 1000;//inisialisasi dengan angka yang besar terserah
    var nonFinansialImpactSelectNumber = 1000;
    function setRTO(selectId,myNumber){
      var rtoVal = ["","4 Hours", "1 day", "2 days", "3 days", "7 days", "More than 7 days", ""];
      if(selectId==="finansialImpactSelect"){
        finansialImpactSelectNumber = myNumber;
      }

      if(selectId==="nonFinansialImpactSelect"){
        nonFinansialImpactSelectNumber = myNumber;
      }

      if(nonFinansialImpactSelectNumber<10 && finansialImpactSelectNumber<10){//kira2 yang angkanya kecil 
        var elem = document.getElementById("rtoId");
        if(nonFinansialImpactSelectNumber===6 && finansialImpactSelectNumber===6){
          elem.readOnly=false;
        }else{
          elem.value = rtoVal[Math.min(nonFinansialImpactSelectNumber,finansialImpactSelectNumber)];
        }
        // $("#rtoId").html=Math.max(nonFinansialImpactSelectNumber,finansialImpactSelectNumber);
      }
    }

    function inputPartialForm(divName){
      var biaName = document.getElementById('bussinessNameId').value;//ini perlu karena nama bia ga masuk form
      var temporaryDiv = document.getElementById(divName);
      var data_to_send = $(temporaryDiv).serializeArray();
      data_to_send.push({ name: "name", value: biaName });
      // console.log(data_to_send);

        $.ajax({
            url:'/BCM/bia/make/'+divName,
            type:'post',
            data:data_to_send,
            success:function(data){
                console.log(data);
            }
        });
        // alert('fahran');
    }
</script>