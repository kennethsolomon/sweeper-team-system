<!-- Mini Modal -->
<div class="modal fade modal modal-primary" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <div class="modal-profile">
                    <i class="nc-icon nc-circle-09"></i>
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
                                    <input id="middleName" name="middleName" type="hidden" class="form-control" placeholder="Middle Name" value="  ">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <input name="breakfastModal" id="breakfastModal" type="checkbox" class="form-group-input">
                                    <label class="form-control" for="breakfastModal">Breakfast</label>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <input name="lunchModal" id="lunchModal" type="checkbox" class="form-group-input">
                                    <label class="form-control" for="lunchModal">Lunch</label>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <input name="dinnerModal" id="dinnerModal" type="checkbox" class="form-group-input">
                                    <label class="form-control" for="dinnerModal">Dinner</label>
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <input name="npoModal" id="npoModal" type="checkbox" class="form-group-input">
                                    <label class="form-control" for="npoModal">NPO</label>
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <input name="glModal" id="glModal" type="checkbox" class="form-group-input">
                                    <label class="form-control" for="glModal">GL</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pl-1">
                                <div class="form-group">
                                    <input id="sessionDateModal" name="sessionDateModal" type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  End Modal -->