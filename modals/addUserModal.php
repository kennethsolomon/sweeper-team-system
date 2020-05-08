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
                                    <input id="middleName" name="middleName" type="text" class="form-control" placeholder="Middle Name" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pl-1">
                                <div class="form-group">
                                    <input id="birthDate" name="birthDate" type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <input id="age" name="age" type="number" class="form-control" placeholder="Age" value="">
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <select id="sex" name="sex" class="form-control">
                                        <option value="M">M</option>
                                        <option value="F">F</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pl-1">
                                <div class="form-group">
                                    <input id="origin" name="origin" type="text" class="form-control" placeholder="Origin" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pl-1">
                                <div class="form-group">
                                    <input id="barangay" name="barangay" type="text" class="form-control" placeholder="Barangay" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pl-1">
                                <div class="form-group">
                                    <select id="municipality" name="municipality" class="form-control">
                                        <option value=""></option>
                                        <option value="Sorsogon City">Sorsogon City</option>
                                        <option value="Barcelona">Barcelona</option>
                                        <option value="Bulan">Bulan</option>
                                        <option value="Bulusan">Bulusan</option>
                                        <option value="Casiguran">Casiguran</option>
                                        <option value="Castilla">Castilla</option>
                                        <option value="Donsol">Donsol</option>
                                        <option value="Gubat">Gubat</option>
                                        <option value="Irosin">Irosin</option>
                                        <option value="Juban">Juban</option>
                                        <option value="Magallanes">Magallanes</option>
                                        <option value="Matnog">Matnog</option>
                                        <option value="Pilar">Pilar</option>
                                        <option value="Prieto Diaz">Prieto Diaz</option>
                                        <option value="Sta. Magdalena">Sta. Magdalena</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pl-1">
                                <div class="form-group">
                                    <input id="contactNumber" name="contactNumber" type="text" class="form-control" placeholder="Contact Number" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                            </div>
                            <div class="col-md-6 pl-1">
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