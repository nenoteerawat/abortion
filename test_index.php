<!doctype html>
<html lang="en">


<style>
.Clearboth
{
    clear: both;
}

.divright
{
float:right;
}

.divleft
{
float:left;
}

</style>
<head>  
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  
  	<link href="js/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>

    <script src="js/jquery-ui-1.8.10.offset.datepicker.min.js" type="text/javascript"></script>
    <script src="js/jquery.ui.datepicker-th.js" type="text/javascript"></script>
    <script src="js/jquery.ui.tabs.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
  
    <script>
  $(function () {
	jQuery(document).ready( function() {
		// binds form submission and fields to the validation engine
		jQuery("#form1").validationEngine();
	});
		
	$(function() {
		/*$('#tabs').tabs();*/
	$('#tabs').tabs();


	
	$( "input[type=button],button" )
      .button()
      .click(function( event ) {
        event.preventDefault();
      });
//------------------------------------- Date thai -----------------------------------  
 		    var d = new Date();
		    var toDay = d.getDate() + '/' + (d.getMonth() + 1) + '/' + (d.getFullYear() + 543); 
			
	$( "#survey_datefirst" ).datepicker({

		dateFormat: 'dd/mm/yy',
		changeMonth: true,
		changeYear: true,
		isBuddhist: true, 
		defaultDate: toDay 
     			
		}); 
	$( "#survey_dateend" ).datepicker({

		dateFormat: 'dd/mm/yy',
		changeMonth: true,
		changeYear: true,
		isBuddhist: true, 
		defaultDate: toDay 
		});
	$( "#lmp" ).datepicker({

		dateFormat: 'dd/mm/yy',
		changeMonth: true,
		changeYear: true,
		isBuddhist: true, 
		defaultDate: toDay 
		});
	
//------------------------------------- Tab ------------------------------------
	
		var selectedTab = $(document).find('div[class^="ui-tabs"]').first();
        
	//Navigation
    $(".Footer").on('click', ':button', function () {
		var selected = selectedTab.tabs("option", "active");
        if (this.id == "btnMoveLeftTab") {
            if (selected >= 1) {
                selectedTab.tabs("option", "active", selected - 1);
            }
        } else {
            selectedTab.tabs("option", "active", selected + 1);
        }
		 
	});
	
	selectedTab.tabs({
	
        activate: function (event, ui) { 
            var active = selectedTab.tabs("option", "active");
			var selected = selectedTab.tabs("option", "active");
			
            if (active == 0) {
                $("#btnMoveLeftTab").hide();
            }else if (selectedTab.find("li:not(li[style='display:none'])").size()-1 == selected){
                $("#btnMoveRightTab").hide();
			}else{
				$("#btnMoveLeftTab").show();
				$("#btnMoveRightTab").show();
            }
             
        }
    });
	//First load
	$("#btnMoveLeftTab").hide();
  });
</script>
   <!--<script src="/js/tabnavi.js"></script>-->
 



	
</head>
<body>
 <div id="tabs">
  <ul>
    <li><a href="#tabs-1">Nunc tincidunt</a></li>
    <li><a href="#tabs-2">Proin dolor</a></li>
    <li><a href="#tabs-3">Aenean lacinia</a></li>
  </ul>
  <div id="tabs-1">
    Tab 1
  </div>
  <div id="tabs-2">
    Tab 2
  </div>
  <div id="tabs-3">
    Tab 3
  </div>
</div>

 <div class="Footer">
    <div class="divleft">
        <button id="btnMoveLeftTab"  type="button" value="Previous Tab" text="Previous Tab">Previous Tab
        </button>
    </div>
    <div class="divright">
        <button id="btnMoveRightTab" type="button" value="Next Tab"  text="Next Tab">Next Tab
		</button>
    </div>
</div>
 <div class="Clearboth"></div>
</body>
</html>