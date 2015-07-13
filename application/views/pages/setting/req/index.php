
<div  class="left-gap content-wrapper">
<div  class="row">
    <div class=" col-lg-12">
         <h3 class="title page-header">Requirements</h3>
     </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">        
            <div class="panel-heading">
                <h4>List of Requirements</h4>
            </div>                               
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr class="tr-gap">
                            <h4 class="label-bold"> Software Requirements</h4>
                             <table class="table table-striped">
                            <div id="softwareRequirementId">
                                <?php foreach ($software as $key) :?>
                                <tr class="tr-gap">
                                    <td class="col-md-6">
                                        <label><?php echo $key->name?></label>
                                    </td>
                               <td  class="td-button text-right">
                                        <a class="edit-button-gap crud" href="">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                        <a class="delete-button-gap crud" data-toggle="modal" data-target="#modalDeleteId" href="#" >
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                                    </td>
                                </tr>
                                <?php endforeach?>
                            </div>
                               
                                <tr class="tr-gap">
                                    <td class="col-md-6">
                                        <input type="Add" id="inputRequirement" class="form-control" placeholder="Name of Software">
                                    </td>
                                     <td class="col-md-3 text-right"> <a class="button-gap" onClick="addDirectly('softwareRequirementId')">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                                    </td>
                                </tr>
                            </table>
                        </tr>

                        <tr class="tr-gap">
                            <h4 class="label-bold"> Hardware Requirements</h4>
                             <table class="table table-striped">
                                <?php foreach ($hardware as $key) :?>
                                <tr class="tr-gap">
                                    <td class="col-md-6">
                                        <label><?php echo $key->name?></label>
                                    </td>
                               <td  class="td-button text-right">
                                        <a class="edit-button-gap crud" href="">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                        <a class="delete-button-gap crud" data-toggle="modal" data-target="#modalDeleteId" href="#" onClick="">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                                    </td>
                                </tr>
                                <?php endforeach?>
                                <tr class="tr-gap">
                                    <td class="col-md-6">
                                        <input type="Add" class="form-control" placeholder="Name of Hardware">
                                    </td>
                                   <td class="col-md-3 text-right"> <a class="button-gap">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                        <tr class="tr-gap">
                            <h4 class="label-bold"> Equipment Requirements</h4>
                             <table class="table table-striped">
                                <?php foreach ($equipment as $key) :?>
                                <tr class="tr-gap">
                                    <td class="col-md-6">
                                        <label><?php echo $key->equipment?></label>
                                    </td>
                               <td  class="td-button text-right">
                                        <a class="edit-button-gap crud" href="">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                        <a class="delete-button-gap crud" data-toggle="modal" data-target="#modalDeleteId" href="#" onClick="">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                                    </td>
                                </tr>
                                <?php endforeach?>
                                <tr class="tr-gap">
                                    <td class="col-md-6">
                                        <input type="Add" class="form-control" placeholder="Name of Hardware">
                                    </td>
                                   <td class="col-md-3 text-right"> <a class="button-gap">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                                    </td>
                                </tr>
                            </table>
                        </tr>
                         <tr class="tr-gap">
                            <h4 class="label-bold"> Record, Item, Clerical Requirements</h4>
                             <table class="table table-striped">
                                <?php foreach ($record as $key) :?>
                                <tr class="tr-gap">
                                    <td class="col-md-6">
                                        <label><?php echo $key->name?></label>
                                    </td>
                               <td  class="td-button text-right">
                                        <a class="edit-button-gap crud" href="">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                        <a class="delete-button-gap crud" data-toggle="modal" data-target="#modalDeleteId" href="#" onClick="">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                                    </td>
                                </tr>
                                <?php endforeach?>
                                <tr class="tr-gap">
                                    <td class="col-md-6">
                                        <input type="Add" class="form-control" placeholder="Name of Hardware">
                                    </td>
                                   <td class="col-md-3 text-right"> <a class="button-gap">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                                    </td>
                                </tr>
                            </table>
                        </tr>  
                    </table>
                <div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<?php $this->load->view('pages/general/modalDelete');?>