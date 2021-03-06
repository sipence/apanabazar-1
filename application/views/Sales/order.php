<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Manage Order</h5>
                </div>
                <div class="card-body order-datatable table-responsive">
                    <table class="table table-bordered" id="basic-1">
                        <thead>
                        <tr>
                            <th>Sl#</th>
                            <th>Order_Date</th>
                            <th>User_id</th>
                           <?php
                           if($this->session->adminLogin['usertype']=="Admin"){
                               ?>
                               <th>Vendor</th>
                               <?php
                           }
                           ?>
                            <th>Inventory_Id</th>
                            <th>product</th>
                            <th>Item</th>
                            <th>Brand</th>
                            <th>Quantity</th>
                            <th>MRP</th>
                            <th>SP</th>
                            <th>Ordered</th>
                            <th>Image</th>
                            <th colspan="2">Action</th>
                        </tr>
                        </thead>
                        <tbody id="order_list_details">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="invoiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title f-w-600" id="exampleModalLabel">Invoice</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body" id="load_invoice">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Close</span></button>
            </div>
        </div>
    </div>
</div>

<!-- Container-fluid Ends-->
<!-- Modal -->
<div class="modal fade" id="rejectCaue" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rejection Cause</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="rejctCauseBody">
                <form action="">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>


