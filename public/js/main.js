let Theme = 'blue';
let tabButtonIdValue = '';

function addBranch() {
let regionid = $('#addBranchRegionId').val();
let constituencyId = $('#addBranchConstituencyId').val();
let addBranchBranchName = $('#addBranchBranchName').val();

if (addBranchBranchName === ''){

}
else {

}

    $.post('requestAddBranch.php',{region: regionid,branchName: addBranchBranchName ,constituencyId: constituencyId},
        function (data) {

            $('#addBranchStatus').html(data);
        }
    );
}

function addConstituency() {


    // Attach a submit handler to the form
    $( "#formAddConstituency" ).submit(function( event ) {

        let regionId = $('#AddConstituencyRegionId').val();
        let constituencyName = $('#AddConstituencyConstituencyName').val();
        let url = 'requestAddConstituency.php';

        // Send the data using post
        let posting = $.post( url, { regionalId:regionId, constituencyName: constituencyName} );
        alert(posting);
        // Put the results in a div
        posting.done(function( data ) {

            $('#addConstituencyStatus').html(data);

        });
    });

}

function addRegion() {
    let regionalName = $('#regionNameAddRegion').val();
    
    $.post('requestAddRegion.php',{
        regionalName:regionalName
        
    },function (data) {
        $('#AddRegionStatus').html(data);
    });
}

function addPosition() {
    let positionName = $('#positionNameAddPosition').val();

    $.post('requestAddPosition.php',{
        positionName:positionName

    },function (data) {
        $('#addPositionStatus').html(data);

    });
}

function loadConstituency(place,RegionID){
    if (RegionID==='None'){

    }
    else {
        let url = 'http://brainsoft.eb/loadConstituency/' + RegionID;
        $.get(url,{

            }

            ,function (data) {

                $(place).html(data);
            });
    }
}


function loadRegion(placeItHere) {
    $.post('../inc/loadRegion.php',{


        }

        ,function (data) {

            $(placeItHere).html(data);
        });




}


function loadBranch(place,regionalID,constituencyID){

    if(regionalID==='None' || constituencyID==='None'){

    }
    else {
        let url = 'http://brainsoft.eb/loadBranch/'  + regionalID +  '/' + constituencyID;
        $.get(url,{

            }

            ,function (data) {
                $(place).html(data);
            });
    }



}



function Register() {


    if($('#Gender').val() === 'None')
    {
        w3.addClass('#Gender','w3-border-red');

    }

    if ( $('#Email').val() === '' || $('#Password').val() === '') {


        if ($('#Email').val() === '') {
            w3.addClass('#UserName', 'w3-border-red');
        }

        if ($('#Password').val() === '') {
            w3.addClass('#Password', 'w3-border-red');
        }

    }

    if ($('#Email').val() !== '') {
        w3.removeClass('#UserName', 'w3-border-red');
    }

    if ($('#Password').val() !== '') {
        w3.removeClass('#Password', 'w3-border-red');
    }

    let SignUpRegionId = $('#SignUpRegionId').val();
    let SignUpConstituencyId = $('#SignUpConstituencyId').val();
    let SignUpBranchId = $('#SignUpBranchId').val();
    let SignUpPositionId = $('#SignUpPositionId').val();
    let Email = $('#Email').val();

    if(SignUpRegionId === 'None'){
        $('#SignUpRegionId').focus();
    }
    else if (SignUpConstituencyId === 'None'){
        $('#SignUpConstituencyId').focus();
    }
    else if (SignUpBranchId === 'None'){
        $('#SignUpBranchId').focus();
    }
    else if (SignUpPositionId === 'None'){
        $('#SignUpPositionId').focus();
    }

    else {
        w3.removeClass('#Email','w3-border-red');
        w3.removeClass('#Password','w3-border-red');
        w3.hide('#FormContainer');
        w3.removeClass('#UserName','w3-border-red');
        w3.removeClass('#Password','w3-border-red');
        alert("Please Wait >>>");

    }

}


function remove(data) {
    w3.addClass(data,'animated fadeOut');
    setTimeout(function () {
        $(data).remove();
    },1000);}

function hideNow(data) {
    w3.addClass(data,'animated rollOut');
    setTimeout(function () {
        w3.hide(data);
    },1000);}

function hideAndShow(hide,show) {

    hideNow(hide);

    setTimeout(function () {
        w3.removeClass(show,'w3-hide');
    },1000);
    }


function logIn() {

    let LogInUserName = $('#LogInUsername').val();
    let LogInPassword = $('#LogInPassword').val();

    if ( LogInUserName === "" || LogInPassword === ""){
        alert("Please Enter Your Username and Password.")
        $('#LogInUsername').focus();
    }
    else {
        $.post('userLogIn.php',{txtUserName: LogInUserName,txtUserPassword:LogInPassword},

            function (data)
            {
                if (data === 'user')
                {
                    window.location = '../member/';
                }
                else if (data === 'admin'){
                    window.location = '../admin/';
                }
                else {
                    $('#ContainerStatusLogIn').html(data);
                }
            }
        );
    }
}


function checkPassword(){
    if ($('#Password').val().length < 6) {
        w3.addClass('#PasswordStatus','w3-text-red');
        w3.removeClass('#PasswordStatus','w3-text-yellow');
        w3.removeClass('#PasswordStatus','w3-text-green');
        $('#PasswordStatus').html('Weak Password');


    }
    else if ($('#Password').val().length > 6 && $('#Password').val().length < 8 )
    {
        w3.addClass('#PasswordStatus','w3-text-yellow');
        w3.removeClass('#PasswordStatus','w3-text-red');
        w3.removeClass('#PasswordStatus','w3-text-green');

        $('#PasswordStatus').html('Medium Password');

    }
    else if ($('#Password').val().length > 10 )
    {
        w3.addClass('#PasswordStatus','w3-text-green');
        w3.removeClass('#PasswordStatus','w3-text-red');
        w3.removeClass('#PasswordStatus','w3-text-yellow');


        $('#PasswordStatus').html('Strong Password');
    }

}


function checkEmail(){
    let Email = $('#Email').val();

    if (Email==='')
    {
        w3.addClass('#Email','w3-border-red');
    }
    else {
        w3.removeClass('#Email','w3-border-red');

        let url = 'http://brainsoft.eb/check-email/' + Email;
        $.get(url,{

            }

            ,function (data) {
            if (data === 'true') {


                $('#userNameStatus').html('Username Exist!');
                w3.removeClass('#userNameStatus','w3-text-green');
                w3.addClass('#userNameStatus','w3-text-red');


            }
            else {

                $('#userNameStatus').html('');
                w3.addClass('#userNameStatus','w3-text-green');
                w3.removeClass('#userNameStatus','w3-text-red');


            }

            });
    }
}

function removePreviousTheme() {
    w3.removeClass('.Theme-light','yellow-light');
    w3.removeClass('.Theme-light','cyan-light');
    w3.removeClass('.Theme-light','indigo-light');
    w3.removeClass('.Theme-light','purple-light');
    w3.removeClass('.Theme-light','green-light');
    w3.removeClass('.Theme-light','blue-light');

    w3.removeClass('.Theme-dark','yellow-dark');
    w3.removeClass('.Theme-dark','cyan-dark');
    w3.removeClass('.Theme-dark','indigo-dark');
    w3.removeClass('.Theme-dark','purple-dark');
    w3.removeClass('.Theme-dark','green-dark');
    w3.removeClass('.Theme-dark','blue-dark');

}


function green() {
    Theme = 'green';
    removePreviousTheme();

    w3.addClass('.Theme-light','green-light');
    w3.addClass('.Theme-dark','green-dark');
    // TabLinkTheme(tabButtonIdValue);
}

function blue() {
    Theme = 'blue';
    removePreviousTheme();

    w3.addClass('.Theme-light','blue-light');
    w3.addClass('.Theme-dark','blue-dark');
    // TabLinkTheme(tabButtonIdValue);
}

function purple() {
    Theme = 'purple';
    removePreviousTheme();

    w3.addClass('.Theme-light','purple-light');
    w3.addClass('.Theme-dark','purple-dark');
    // TabLinkTheme(tabButtonIdValue);
}

function yellow() {
    Theme = 'yellow';
    removePreviousTheme();

    w3.addClass('.Theme-light','yellow-light');
    w3.addClass('.Theme-dark','yellow-dark');
    // TabLinkTheme(tabButtonIdValue);
}

function cyan() {
    Theme = 'cyan';
    removePreviousTheme();

    w3.addClass('.Theme-light','cyan-light');
    w3.addClass('.Theme-dark','cyan-dark');
    // TabLinkTheme(tabButtonIdValue);
}

function indigo() {
    Theme = 'indigo';
    removePreviousTheme();

    w3.addClass('.Theme-light','indigo-light');
    w3.addClass('.Theme-dark','indigo-dark');
    // TabLinkTheme(tabButtonIdValue);
}





function toggleDashboard() {
    w3.toggleClass('#mainBody','openDashboard','closeDashboard');
    w3.toggleClass('#dashboard','openDashboardD','closeDashboardD');
}


function myFunction() {
    let x = document.getElementById("Demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

/*function TabLinkTheme(tabButtonId) {
    /!*remove Theme class from all buttons with class btnTablink*!/
    w3.removeClass('.btnTabLink','yellow-light');
    w3.removeClass('.btnTabLink','cyan-light');
    w3.removeClass('.btnTabLink','indigo-light');
    w3.removeClass('.btnTabLink','purple-light');
    w3.removeClass('.btnTabLink','green-light');
    w3.removeClass('.btnTabLink','blue-light');

    /!*Add the current Theme to the Current btnTablink*!/
    w3.addClass(tabButtonId,Theme + '-light');
}*/


function showCurrentContent(tabButtonId,tabContentId) {
    /*show tab button*/
    tabButtonIdValue = tabButtonId;
    w3.removeClass(tabButtonId,'w3-hide');

    /*hide all tab content*/
    w3.addStyle('.tabContent','display','none');

    TabLinkTheme(tabButtonId);

    w3.addStyle(tabContentId,'display','block');



}

function toSignUp() {
    $("#logIn").toggle(1000);
    $("#signUp").toggle(1000);
}



function confirmPasswordMatch() {
    var password = $("#password").val();
    var confirmPassword = $("#confirmPassword").val();
    if ( password == confirmPassword)
    {
        return true;
    }
    else {
        $("#confirmPassword").val("");

        alert("Password dont match");
        $("#password").val("");

        return false;
    }
}

$(function () {
    let table = $('#table').DataTable({
        paging:true,
        select:true,
        scrollY:true,
        scrollX:true,
        autoWidth:false,
        "pageLength": 1,
        "lengthChange":true,
        "lengthMenu": [ 6,10, 25, 50, 75, 100 ],
        buttons: [
            { extend:'copy', attr: { id: 'allan' }, className:'' }, 'csv', 'excel', 'pdf', 'print'
        ],
        dom: 'Bfrtip',

    }).page.len( 7 ).draw();


    $('#image').change (function (e) {

        loadImage(e.target.files[0] ,function (img)
            {
                $('#imageH').html(img);
            },
            {
                maxWidth:250,
                crop:true
            }
        );

        w3.addClass('canvas','w3-round-xlarge w3-image');

        setTimeout(1,function () {
            $('canvas').attr('id','imageM');
            $('#imageH').addClass('w3-image');
            alert('Done');
        });


       /* Jcrop.attach('imageH',{
            shadeColor: 'red',
            multi: true});*/

    });


});



/*
w3.addClass('input','w3-round-xlarge w3-margin-bottom');
w3.addClass('select','w3-margin-bottom');
w3.addClass('input','w3-transparent');
w3.addClass('input','w3-border');
w3.addClass('select','w3-round-xlarge');
w3.addClass('select','w3-transparent');
w3.addClass('select','w3-border');
*/
