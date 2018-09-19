<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello World</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
        $( "#sortable" ).sortable();
        $( "#sortable" ).disableSelection();
    } );
    </script>
</head>
<body>
    <div class="container">
        
        <aside>
            <div class="heading">
                <span><img src="images/plus.png"></span>
                <h5>Pages</h5>
            </div>  
            <div style="height:90%; overflow-y:scroll;">  
                <ul id="sortable">
                    <li class="ui-state-default li_1"> <img src="images/li_img.png">  <span class="li_left">Item 1 </span><span class="li_right"> <input type="checkbox" name="chk[]"/> <img src="images/delete.png" class="delete" id="1" /></span> </li>
                    <li class="ui-state-default li_2"> <img src="images/li_img.png">  <span class="li_left">Item 2 </span><span class="li_right"> <input type="checkbox" name="chk[]"/> <img src="images/delete.png" class="delete" id="2" /></span> </li>
                    <li class="ui-state-default li_3"> <img src="images/li_img.png">  <span class="li_left">Item 3 </span><span class="li_right"> <input type="checkbox" name="chk[]"/> <img src="images/delete.png" class="delete" id="3" /></span> </li>
                    <li class="ui-state-default li_4"> <img src="images/li_img.png">  <span class="li_left">Item 4 </span><span class="li_right"> <input type="checkbox" name="chk[]"/> <img src="images/delete.png" class="delete" id="4" /></span> </li>
                    <li class="ui-state-default li_5"> <img src="images/li_img.png">  <span class="li_left">Item 5 </span><span class="li_right"> <input type="checkbox" name="chk[]"/> <img src="images/delete.png" class="delete" id="5" /></span> </li>
                    <li class="ui-state-default li_6"> <img src="images/li_img.png">  <span class="li_left">Item 6 </span><span class="li_right"> <input type="checkbox" name="chk[]"/> <img src="images/delete.png" class="delete" id="6" /></span> </li>
                    <li class="ui-state-default li_7"> <img src="images/li_img.png">  <span class="li_left">Item 7 </span><span class="li_right"> <input type="checkbox" name="chk[]"/> <img src="images/delete.png" class="delete" id="7" /></span> </li>
                <li class="ui-state-default li_11"> <img src="images/li_img.png">  <span class="li_left">Item 1 </span><span class="li_right"> <input type="checkbox" name="chk[]"/> <img src="images/delete.png" class="delete" id="11" /></span> </li>
                    <li class="ui-state-default li_12"> <img src="images/li_img.png">  <span class="li_left">Item 2 </span><span class="li_right"> <input type="checkbox" name="chk[]"/> <img src="images/delete.png" class="delete" id="12" /></span> </li>
                    <li class="ui-state-default li_13"> <img src="images/li_img.png">  <span class="li_left">Item 3 </span><span class="li_right"> <input type="checkbox" name="chk[]"/> <img src="images/delete.png" class="delete" id="13" /></span> </li>
                    <li class="ui-state-default li_14"> <img src="images/li_img.png">  <span class="li_left">Item 4 </span><span class="li_right"> <input type="checkbox" name="chk[]"/> <img src="images/delete.png" class="delete" id="14" /></span> </li>
                    <li class="ui-state-default li_15"> <img src="images/li_img.png">  <span class="li_left">Item 5 </span><span class="li_right"> <input type="checkbox" name="chk[]"/> <img src="images/delete.png" class="delete" id="15" /></span> </li>
                    <li class="ui-state-default li_16"> <img src="images/li_img.png">  <span class="li_left">Item 6 </span><span class="li_right"> <input type="checkbox" name="chk[]"/> <img src="images/delete.png" class="delete" id="16" /></span> </li>
                    <li class="ui-state-default li_17"> <img src="images/li_img.png">  <span class="li_left">Item 7 </span><span class="li_right"> <input type="checkbox" name="chk[]"/> <img src="images/delete.png" class="delete" id="17" /></span> </li>
                <li class="ui-state-default li_21"> <img src="images/li_img.png">  <span class="li_left">Item 1 </span><span class="li_right"> <input type="checkbox" name="chk[]"/> <img src="images/delete.png" class="delete" id="21" /></span> </li>
                    <li class="ui-state-default li_22"> <img src="images/li_img.png">  <span class="li_left">Item 2 </span><span class="li_right"> <input type="checkbox" name="chk[]"/> <img src="images/delete.png" class="delete" id="22" /></span> </li>
                    <li class="ui-state-default li_23"> <img src="images/li_img.png">  <span class="li_left">Item 3 </span><span class="li_right"> <input type="checkbox" name="chk[]"/> <img src="images/delete.png" class="delete" id="23" /></span> </li>
                    <li class="ui-state-default li_24"> <img src="images/li_img.png">  <span class="li_left">Item 4 </span><span class="li_right"> <input type="checkbox" name="chk[]"/> <img src="images/delete.png" class="delete" id="24" /></span> </li>
                    <li class="ui-state-default li_25"> <img src="images/li_img.png">  <span class="li_left">Item 5 </span><span class="li_right"> <input type="checkbox" name="chk[]"/> <img src="images/delete.png" class="delete" id="25" /></span> </li>
                    <li class="ui-state-default li_26"> <img src="images/li_img.png">  <span class="li_left">Item 6 </span><span class="li_right"> <input type="checkbox" name="chk[]"/> <img src="images/delete.png" class="delete" id="26" /></span> </li>
                    <li class="ui-state-default li_27"> <img src="images/li_img.png">  <span class="li_left">Item 7 </span><span class="li_right"> <input type="checkbox" name="chk[]"/> <img src="images/delete.png" class="delete" id="27" /></span> </li>
                
                </ul>
            </div>
                <div class="form_block">
                <div class="form">
                    <label>Filter: </label>
                    <input type="text" id="search" >
                    <img src="images/delete.png" id="clear" style="display:none"/>
                </div>
                </div>
            
             
        </aside>
        <section>
            <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'tab1')" id="defaultOpen">Page Details</button>
                <button class="tablinks" onclick="openTab(event, 'tab2')">Page Content</button>
            </div>

            <div id="tab1" class="tabcontent">
             <p>................</p>
            </div>

            <div id="tab2" class="tabcontent">

             <p>...........</p> 
            </div>


        </section>
    </div>
 
<script>
//tab fn
function openTab(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

//deafult open tab1 
document.getElementById("defaultOpen").click();

//menu click action
$(document).on("click", ".ui-state-default", function() {
    $('.ui-state-default').removeClass('selected');
    $(this).addClass('selected');
});

//delete menu
$(document).on("click", ".delete", function() {
    if (confirm('Are you sure ?')) {
        var id=$(this).attr('id');
        var options = {};
        $(".li_"+id).hide('slide', options, 1000, callback );
    }
});

//search menu
$(document).on("keyup", "#search", function() {
    filter();
    if(document.getElementById("search").value.length>0){
        document.getElementById('clear').style.display = "block";
    }
    else{
        document.getElementById('clear').style.display = "none";
    }
});

//clear menu
$(document).on("click", "#clear", function() {
        $("#search").val('');
        filter();
        document.getElementById('clear').style.display = "none";
});

function callback() {
      setTimeout(function() {
        $( "#effect" ).removeAttr( "style" ).hide().fadeIn();
      }, 1000 );
    };

//filter fn    
function filter (argument) {
    var input, filter, ul, li, a, i;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    ul = document.getElementById("sortable");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("span")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
</body>
</html>