<!-- Mini Modal -->
<div class="modal fade modal modal-primary" id="generateReportsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <div class="modal-profile">
                    <i class="nc-icon nc-paper-2"></i>
                </div>
            </div>
            <div class="modal-body text-center">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Date Range</h4>
                    </div>
                    <form action="report.php" method="get">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 pl-1">
                                    <div class="form-group">
                                        <input id="pId" name="pId" type="hidden" class="form-control" value="<?php echo $_GET['uId'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <input id="dateOfBirth" name="dateOfBirth" type="date" class="form-control" placeholder="Last Name" value="">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <input id="dateOfBirth" name="dateOfBirth" type="date" class="form-control" placeholder="Last Name" value="">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="generateReportBtn" class="btn btn-info btn-fill pull-right ml-3">Generate</button>
                            <div class="clearfix"></div>
                        </div>
                    </form>

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