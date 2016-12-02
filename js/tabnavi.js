 function check_form_tab(selected)
 	{
		if(selected == '0')
			{
				return true;
			}
		else if(selected == '1')
			{
				if(document.getElementById("survey_province").value=='')
					{
						alert('กรุณารอกข้อมูลในส่วนสำคัญด้วย');
						document.getElementById("survey_province").focus();
						return false;
					}
				else if(document.getElementById("survey_agency").value=='')
					{
						alert('กรุณารอกข้อมูลในส่วนสำคัญด้วย');
						document.getElementById("survey_agency").focus();
						return false;
					}
				else if(document.getElementById("file_id").value=='')
					{
						alert('กรุณารอกข้อมูลในส่วนสำคัญด้วย');
						document.getElementById("file_id").focus();
						return false;
					}
				else if(document.getElementById("survey_datefirst").value=='')
					{
						alert('กรุณารอกข้อมูลในส่วนสำคัญด้วย');
						document.getElementById("survey_datefirst").focus();
						return false;
					}
				else if(document.getElementById("survey_dateend").value=='')
					{
						alert('กรุณารอกข้อมูลในส่วนสำคัญด้วย');
						document.getElementById("survey_dateend").focus();
						return false;
					}
				else
					{
						return true;
					}
			}
		else
			{
				if(document.getElementById("cause_abortion_0").checked == false && document.getElementById("cause_abortion_1").checked == false)
					{
						alert('กรุณารอกข้อมูลในส่วนสำคัญด้วย');
						document.getElementById("cause_abortion_0").focus();
						return false;
					}
				else
					{
						return true;
					}
			}	
	
	}
 
 
 $(function () { 
	//Get the first tab in document and will assume only one
	var selectedTab = $(document).find('div[class^="ui-tabs"]').first();
        
	//Navigation button, select tab when button click.
    $(".Footer").on('click', ':button', function () {
		var selected = selectedTab.tabs("option", "active");
		
        if (this.id == "btnMoveLeftTab") {
            if (selected >= 1) {
                selectedTab.tabs("option", "active", selected - 1);
            }
        } else {
			
			value_check = check_form_tab(selected);

			if(value_check == true)
				{
            		selectedTab.tabs("option", "active", selected + 1);
				}
        }
		 
	});
	
	//Tab activated, only display next on first tab, and previous in last tab
	selectedTab.tabs({
	
        activate: function (event, ui) { 
            var active = selectedTab.tabs("option", "active");
			var selected = selectedTab.tabs("option", "active");
			/*alert('3333'+selected);*/
            if (active == 0) {
                $("#btnMoveLeftTab").hide();
            }else if (selectedTab.find("li:not(li[style='display:none'])").size()-1 == selected){
				
                $("#btnMoveRightTab").hide();
			}else{
				
				$( '#tabs' ).tabs("enable", selected);
				$("#btnMoveLeftTab").show();
				$("#btnMoveRightTab").show();
            }
             
        }
    });
	
	//First load
	$("#btnMoveLeftTab").hide();
  }); 