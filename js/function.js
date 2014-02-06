$(document).ready(function(){
	$('.bd').click(function(){
		$('.webdev').hide();
	});

        function checkmsgs() {
       		setInterval(
       			function(){
       				$('.inbox-link a').remove();
                                $('.inbox-link').load('actions/checkmsgs.php?user=' + getCookie("BMS_Portal"));
       			},10000);
       }

       checkmsgs();

        function changetasklist() {
                var e = document.getElementById("sort-choice");
		var f = e.options[e.selectedIndex].value;
		if (f == "others") {
                        $('.client-select').css('display','none');
			$('.user-select').css('display','block');
                        changeuser();
		} else if (f == "self") { 
                        $('.user-select').css('display','none');
                        $('.client-select').css('display','none');               
                        $('.single-task').remove();
                } else if (f == "date") {
                        $('.user-select').css('display','none');
                        $('.client-select').css('display','none');
                        $('.single-task').remove();
                } else if (f == "client") {
                        $('.user-select').css('display','none');
                        $('.client-select').css('display','block');
                        changeclient();
                } else {
			$('.user-select').css('display','none');
                        $('.client-select').css('display','none');
                        $('.single-task').remove();
		}
        }

        function changeclient() {
             $('.single-task').remove();
             $('.task-content').load('actions/taskquery.php?sorttype='+$('#sort-choice').val()+'&sortoption='+$('#client-select').val());
        }

        $('.messagelink').click(function() {
             var input = $(this).attr('class').split('-').slice(-1);
             $('.single-message').remove();
             $('.inbox-content').load('actions/msgquery.php?input='+input);
        });

        function changeuser() {
             $('.single-task').remove();
             $('.task-content').load('actions/taskquery.php?sorttype='+$('#sort-choice').val()+'&sortoption='+$('#user-select').val());
        }

        $('#sort-choice').click(function(){
		changetasklist();
	});

        $('#user-select').click(function(){
                changeuser();
        });
        
        $('#client-select').click(function(){ changeclient(); });

        function setCookie(c_name,value,exdays) {
              var exdate=new Date();
              exdate.setDate(exdate.getDate() + exdays);
              var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
              document.cookie=c_name + "=" + c_value;
        }

        $('.mb-logout').click(function(){
                setCookie('BMS_Portal','',-1);
                window.location.href = "http://portal.businessonmarketst.com/login.php"; 
        });

        $('.clients-active').click(function(){
                $('.client-module ul li').remove();
                $('.client-module ul').load('actions/clientquery.php?sortoption=Active');
        });

        $('.clients-retired').click(function(){
                $('.client-module ul li').remove();
                $('.client-module ul').load('actions/clientquery.php?sortoption=Retired');
        });

        $('.clients-all').click(function(){
                $('.client-module ul li').remove();
                $('.client-module ul').load('actions/clientquery.php?sortoption=All');
        });

        function getCookie(cname)
{
var name = cname + "=";
var ca = document.cookie.split(';');
for(var i=0; i<ca.length; i++) 
  {
  var c = ca[i].trim();
  if (c.indexOf(name)==0) return c.substring(name.length,c.length);
  }
return "";
}

});