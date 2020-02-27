<!-- Mini Modal -->
<div class="modal fade modal modal-primary" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <div class="modal-profile">
                    <i class="nc-icon nc-bulb-63"></i>
                </div>
            </div>
            <div class="modal-body text-center">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Patient</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 pl-1">
                                <div class="form-group">
                                    <input id="lastName" name="lastName" type="text" class="form-control" placeholder="Last Name" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pl-1">
                                <div class="form-group">
                                    <input id="firstName" name="firstName" type="text" class="form-control" placeholder="First Name" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pl-1">
                                <div class="form-group">
                                    <input id="middleName" name="middleName" type="text" class="form-control" placeholder="Middle Name" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pl-1">
                                <div class="form-group">
                                    <input id="dateOfBirth" name="dateOfBirth" type="date" class="form-control" placeholder="Last Name" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Wards</label>
                                    <select id="ward" class="form-control">
                                        <option value="General">General</option>
                                        <option value="Pedia/Surgery">Pedia/Surgery</option>
                                        <option value="OB">OB</option>
                                        <option value="Rehy/ISO">Rehy/ISO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 pl-1 mt-5">
                                <div class="form-group">
                                    <button type="submit" id="saveBtn" class="btn btn-info btn-fill pull-right">Save Patient</button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
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