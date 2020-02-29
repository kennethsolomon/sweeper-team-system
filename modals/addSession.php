<!-- Mini Modal -->
<div class="modal fade modal modal-primary" id="sessionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <div class="modal-profile">
                    <i class="nc-icon nc-single-copy-04"></i>
                </div>
            </div>
            <div class="modal-body text-center">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Session for Today!</h4>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="row">
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <input name="pId" id="pId" type="hidden" class="form-group-input" value="<?php echo $_GET['uId'] ?>">
                                        <input name="Breakfast" id="Breakfast" type="checkbox" class="form-group-input">
                                        <label class="form-control" for="Breakfast">Breakfast</label>
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <input name="Lunch" id="Lunch" type="checkbox" class="form-group-input">
                                        <label class="form-control" for="Lunch">Lunch</label>
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <input name="Dinner" id="Dinner" type="checkbox" class="form-group-input">
                                        <label class="form-control" for="Dinner">Dinner</label>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <input name="Npo" id="Npo" type="checkbox" class="form-group-input">
                                        <label class="form-control" for="Npo">NPO</label>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <input name="Gl" id="Gl" type="checkbox" class="form-group-input">
                                        <label class="form-control" for="Gl">GL</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pl-1">
                                    <div class="form-group">
                                        <input id="sessionDate" name="sessionDate" type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" id="addSessionBtn" name="addSessionBtn" class="btn btn-info btn-fill ">Update Session</button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-link btn-simple"></button>
            <button type="button" class="btn btn-link btn-simple" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>
<!--  End Modal -->