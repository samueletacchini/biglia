
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <style>
        .datepicker{z-index:1151 !important;}
    </style>
    <div class="modal  in" id="newMember" style="display: block; " aria-hidden="false">
        <div class="modal-header">
            <button class="close" data-dismiss="modal" type="button">×</button>
            <h3>New Member Form</h3>
        </div>
        <form accept-charset="UTF-8" action="/players" class="form-horizontal" id="new_user" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="KdL6cc2Vb53qeMY+PpBUS70myT4HX1uWofMUBolLea8="></div>
            <div class="modal-body">
                <div class="widget-content nopadding">
                    <div class="control-group">
                        <label class="control-label" for="user_role">Role</label>
                        <div class="controls">
                            <select id="user_role" name="user[role]" style="display: none; " class="chzn-done"><option value="">Select member role</option>
                                <option value="1">Player</option>
                                <option value="2">Coach</option>
                                <option value="3">Parent</option>
                                <option value="4">Manager</option>
                                <option value="5">Non-player</option></select><div id="user_role_chzn" class="chzn-container chzn-container-single" style="width: 222px; "><a href="javascript:void(0)" class="chzn-single"><span>Select member role</span><div><b></b></div></a><div class="chzn-drop" style="left: -9000px; width: 220px; top: 0px; "><div class="chzn-search" style=""><input type="text" autocomplete="off" style="width: 212px; "></div><ul class="chzn-results"><li id="user_role_chzn_o_0" class="active-result result-selected" style="">Select member role</li><li id="user_role_chzn_o_1" class="active-result" style="">Player</li><li id="user_role_chzn_o_2" class="active-result" style="">Coach</li><li id="user_role_chzn_o_3" class="active-result" style="">Parent</li><li id="user_role_chzn_o_4" class="active-result" style="">Manager</li><li id="user_role_chzn_o_5" class="active-result" style="">Non-player</li></ul></div></div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="user_full_name">Full name</label>
                        <div class="controls">
                            <input id="user_first_name" name="user[first_name]" placeholder="First Name" size="30" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="user_last_name">Last name</label>
                        <div class="controls">
                            <input id="user_last_name" name="user[last_name]" placeholder="Last Name" size="30" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="user_email">Email</label>
                        <div class="controls">
                            <input id="user_email" name="user[email]" placeholder="Email Address" size="30" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="user_date_of_birth">Date of birth</label>
                        <div class="controls">
                            <input class="datepicker" data-date-format="dd/mm/yyyy" id="user_dob" name="user[dob]" placeholder="dd/mm/yyyy" readonly="readonly" size="30" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="user_gender">Gender</label>
                        <div class="controls">
                            <select id="user_gender" name="user[gender]" style="display: none; " class="chzn-done"><option value="">Select gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option></select><div id="user_gender_chzn" class="chzn-container chzn-container-single" style="width: 222px; "><a href="javascript:void(0)" class="chzn-single"><span>Select gender</span><div><b></b></div></a><div class="chzn-drop" style="left: -9000px; width: 220px; top: 0px; "><div class="chzn-search" style=""><input type="text" autocomplete="off" style="width: 212px; "></div><ul class="chzn-results"><li id="user_gender_chzn_o_0" class="active-result result-selected" style="">Select gender</li><li id="user_gender_chzn_o_1" class="active-result" style="">Male</li><li id="user_gender_chzn_o_2" class="active-result" style="">Female</li></ul></div></div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="user_team">Team</label>
                        <div class="controls">
                            <select id="user_team_id" name="user[team_id]" style="display: none; " class="chzn-done"><option value="">None</option>
                                <option value="4">Metro 3 East</option>
                                <option value="1">State League 3</option>
                                <option value="2">State League 4</option>
                                <option value="3">Metro 3 South</option>
                                <option value="5">Pennant E</option>
                                <option value="6">Under 9 White</option>
                                <option value="7">Under 9 Navy</option>
                                <option value="8">Under 13 Pennant South East</option>
                                <option value="9">Under 17 Pennant South East</option>
                                <option value="10">Under 15 South (1)</option>
                                <option value="11">Under 11 Pennant South East</option>
                                <option value="12">Under 11 South</option></select><div id="user_team_id_chzn" class="chzn-container chzn-container-single" style="width: 222px; "><a href="javascript:void(0)" class="chzn-single"><span>None</span><div><b></b></div></a><div class="chzn-drop" style="left: -9000px; width: 220px; top: 0px; "><div class="chzn-search" style=""><input type="text" autocomplete="off" style="width: 212px; "></div><ul class="chzn-results"><li id="user_team_id_chzn_o_0" class="active-result result-selected" style="">None</li><li id="user_team_id_chzn_o_1" class="active-result" style="">Metro 3 East</li><li id="user_team_id_chzn_o_2" class="active-result" style="">State League 3</li><li id="user_team_id_chzn_o_3" class="active-result" style="">State League 4</li><li id="user_team_id_chzn_o_4" class="active-result" style="">Metro 3 South</li><li id="user_team_id_chzn_o_5" class="active-result" style="">Pennant E</li><li id="user_team_id_chzn_o_6" class="active-result" style="">Under 9 White</li><li id="user_team_id_chzn_o_7" class="active-result" style="">Under 9 Navy</li><li id="user_team_id_chzn_o_8" class="active-result" style="">Under 13 Pennant South East</li><li id="user_team_id_chzn_o_9" class="active-result" style="">Under 17 Pennant South East</li><li id="user_team_id_chzn_o_10" class="active-result" style="">Under 15 South (1)</li><li id="user_team_id_chzn_o_11" class="active-result" style="">Under 11 Pennant South East</li><li id="user_team_id_chzn_o_12" class="active-result" style="">Under 11 South</li></ul></div></div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="user_mobile">Mobile</label>
                        <div class="controls">
                            <input id="user_mobile" maxlength="10" name="user[mobile]" placeholder="i.e 0421813529" size="10" type="tel">
                            <span class="help-block">
                                <input name="user[private_mobile]" type="hidden" value="0"><div class="checker" id="uniform-user_private_mobile"><span><div class="checker" id="uniform-user_private_mobile"><span><input id="user_private_mobile" name="user[private_mobile]" type="checkbox" value="1" style="opacity: 0; "></span></div></span></div>
                                <a href="javascript:void(0)" class="tip-bottom" data-original-title="Normally, all members of the team can see this information. If you don't want teammates to see this information, just click this checkbox. (Note: Team managers will always see this information.)">Private</a>
                            </span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="user_manager_access">Manager access</label>
                        <div class="controls">
                            <input name="user[manager]" type="hidden" value="0"><div class="checker" id="uniform-user_manager"><span><div class="checker" id="uniform-user_manager"><span><input id="user_manager" name="user[manager]" type="checkbox" value="1" style="opacity: 0; "></span></div></span></div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="user_admin_access">Admin access</label>
                        <div class="controls">
                            <input name="user[admin]" type="hidden" value="0"><div class="checker" id="uniform-user_admin"><span><div class="checker" id="uniform-user_admin"><span><input id="user_admin" name="user[admin]" type="checkbox" value="1" style="opacity: 0; "></span></div></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="pull-right">
                    <input class="btn btn-primary" name="commit" type="submit" value="Create User">
                    <a class="btn btn-danger" data-dismiss="modal" href="#">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>