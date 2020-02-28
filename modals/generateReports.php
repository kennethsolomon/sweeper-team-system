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
                        <h4 class="card-title">Select Month</h4>
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
                                <div class="col-md-6">
                                    <select id="month" name="month" class="form-control mb-2" required>
                                        <option value="01">Janruary</option>
                                        <option value="02">February</option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">June</option>
                                        <option value="07">July</option>
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" id="year" name="year" class="form-control mb-2" required>
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