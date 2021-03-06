<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>District</h5>
                </div>
                <div class="card-body">
                    <div class="btn-popup pull-right">
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Add District</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title f-w-600" id="exampleModalLabel">Add District</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" id="frmDistrict" method="post" action="<?=base_url('District/create_dist')?>">
                                            <input type="hidden" name="txtid" id="txtid" value="0">
                                            <div class="form">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="mb-1">State id:</label>
                                                    <select name="cbostate" class="form-control" id="cbostate">
                                                        <option value="0">Select State</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="mb-1">Code:</label>
                                                    <input class="form-control" id="txtCode" name="txtCode" maxlength="50" minlength="3" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="mb-1">District Name:</label>
                                                    <input class="form-control" id="txtdistrict" name="txtdistrict" maxlength="50" minlength="3" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="mb-1">Status:</label><br>
                                                    <button class="btn btn-secondary">Enable</button>
                                                    <button class="btn btn-primary">Disable</button>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" type="button" data-dismiss="modal">Close</button>
                                                <button class="btn btn-secondary" type="submit" id="btnSubmit" name="btnSubmit">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class='table table-bordered table-striped' id="showtablereport">
                            <thead class="bg-secondary text-white">
                            <tr >
                                <th class="text-center">Sl.no</th>
                                <th class="text-center">state Id</th>
                                <th class="text-center">Code</th>
                                <th class="text-center">District Name</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody id="showReportDist"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
