
 <div  class="left-gap content-wrapper">
<div  class="row">

    <div class=" col-lg-12">
        <h3 class="title page-header">Home</h3>
    </div>
    <!-- /.col-lg-12 -->

    <!-- /.col-lg-4 -->
 </div>
<!-- /.row -->

<div class="row">
	<div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>Select Business Unit and Version</h5>
            </div>
            <!-- /.panel-heading -->
         
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="label-bold">Business Unit</label>
                                            <select class="form-control"> 
                                                <option value="BA1">BU1</option>
                                                <option value="BA2">BU2</option>
                                                <option value="BA3">BU3</option>
                                                <option value="BA4">BU4</option>     
                                                <option value="BA5">BU5</option> 
                                                <option value="BA6">BU6</option> 
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="label-bold">version</label>
                                            <select class="form-control"> 
                                                <option value="ver1">ver1</option>
                                                <option value="ver2">ver2</option>
                                                <option value="ver3">ver3</option>
                                                <option value="ver4">ver4</option>     
                                                <option value="ver5">ver5</option> 
                                                <option value="ver6">ver6</option> 
                                            </select>
                                        </div>
                                     
                </div>

                <!-- /.table-responsive -->
            </div>
            <div class="row text-right top-gap-narrow">
                <div class="col-lg-12">
                <a href="<?php echo base_url('bia') ?>" class="button-gap">Select</a>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
</div>
</div>
</div>

<?php $this->load->view('pages/general/modalDelete');?>