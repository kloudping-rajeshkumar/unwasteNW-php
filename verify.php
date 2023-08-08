<!DOCTYPE html>
<!-- saved from url=(0055)https://invoma.vercel.app/cleaning_service_invoice.html -->
<html class="no-js" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta Tags -->

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Laralink">
    <!-- Site Title -->
    <title>Unwaste Network Payment Invoice</title>

</head>

<body data-new-gr-c-s-check-loaded="14.1104.0" style="color: #666;
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.6em;
    overflow-x: hidden;
    background-color: #f5f6fa" data-gr-ext-installed="">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        setInterval(function () {
            var div = document.querySelector("#counter");
            var count = div.textContent * 1 - 1;
            div.textContent = count;
            if (count <= 0) {
			    localStorage.removeItem('userdata');
                window.location.replace("index.php");
            }
        }, 1000);
    </script>
    <P>YOUR SESSION ABOUT TO EXPIRE:<b id="counter"> 180</b></p>

    <?php

    require('config.php');

    session_start();

    require('razorpay-php/Razorpay.php');
    use Razorpay\Api\Api;
    use Razorpay\Api\Errors\SignatureVerificationError;

    $success = true;

    $error = "Payment Failed";
    $pid = "";
    $pid1 = "";
    if (empty($_POST['razorpay_payment_id']) === false) {
        $api = new Api($keyId, $keySecret);

        try {
            // Please note that the razorpay order ID must
            // come from a trusted source (session here, but
            // could be database or something else)
            $pid = $_POST['razorpay_payment_id'];
            $pid1 = $_SESSION['razorpay_order_id'];
            $attributes = array(
                'razorpay_order_id' => $_SESSION['razorpay_order_id'],
                'razorpay_payment_id' => $_POST['razorpay_payment_id'],
                'razorpay_signature' => $_POST['razorpay_signature']
            );

            $api->utility->verifyPaymentSignature($attributes);
        } catch (SignatureVerificationError $e) {
            $success = false;
            $error = 'Razorpay Error : ' . $e->getMessage();
        }
    }
    $date = date('Y-m-d');
    $mycheck = "";
    $mycheck1 = "";
    if(isset($_COOKIE['myCheck'])){
       $mycheck = $_COOKIE['myCheck'];
      }
      if(isset($_COOKIE['myCheck1'])){
        $mycheck1 = $_COOKIE['myCheck1'];
       }
    if ($success === true) {

        // if ($result === FALSE) { /* Handle error */
        //}
    
        //var_dump($result);
    
        $html = '
        
    <div  class="tm_container" style="margin-top: 0;line-height: 1.5em;max-width: 880px;padding: 30px 15px;
  margin-left: auto;margin-right:
                  auto;position: relative;">
        <div class="tm_invoice_wrap" style="margin-top: 0;line-height: 1.5em;">
            <div class="tm_invoice tm_style1" id="tm_download_section" style="margin-top: 0;line-height: 1.5em;background: #fff;border-radius:
                  10px;padding: 50px;">
                <div class="tm_invoice_in" style="margin-top: 0;
        line-height: 1.5em;
        position: relative;
        z-index: 100;">
                    <div class="tm_invoice_head tm_align_center tm_mb20" style="margin-top: 0;line-height: 1.5em;margin-bottom: 20px;align-items: center;display: flex;;
                   justify-content: space-between;">
                        <div class="tm_invoice_left" style="margin-top: 0;line-height: 1.5em;">
                            <div class="tm_logo tm_size1" style="margin-top: 0;line-height: 1.5em;">
                                <img src="assets/images/resources/logo.png" alt="Logo" style="border-style:
                   none;border: 0;max-width: 100%;height: auto;vertical-align: middle;max-height: 60px;" />
                            </div>
                        </div>
                        <div class="tm_invoice_right tm_text_right" style="margin-top: 0;line-height: 1.5em;text-align: right;
            flex: none;width: 60%;">
                            <div class="tm_primary_color tm_f50 tm_text_uppercase" style="margin-top: 0;line-height: 1em;
              font-size: 50px;color:#111;text-transform: uppercase;">Invoice</div>
                        </div>
                    </div>
                    <div class="tm_invoice_info_2 tm_mb20" style="margin-top: 0;line-height: 1.5em;margin-bottom: 20px;display: flex; justify-content: space-between;border-top: 1px solid #dbdfea;border-bottom: 1px solid
                     #dbdfea;padding: 11px 0;">
                        <p class="tm_invoice_number tm_m0" style="margin-top: 0;
            line-height: 1.5em;
            margin-bottom: 15px;margin: 0px;">Invoice No: <b class="tm_primary_color" style="font-weight: bold;color: #111;">' . $pid1 . '</b></p>
                        <p class="tm_invoice_date tm_m0" style="margin-top: 0;line-height: 1.5em;margin-bottom: 15px;margin: 0px;">Date: <b class="tm_primary_color" style="font-weight: bold;color: #111;">' . $date . '</b></p>
                    </div>
                    <div class="tm_invoice_head tm_mb10" style="margin-top: 0;line-height: 1.5em;margin-bottom: 10px;display: flex;
          justify-content: space-between;">
                        <div class="tm_invoice_left" style="margin-top: 0;line-height: 1.5em;">
                            <p class="tm_mb2" style="margin-top: 0;line-height: 1.5em;margin-bottom: 2px;">
                                <b class="tm_primary_color" style="font-weight:
                    bold;color: #111;">Invoice To:</b>
                            </p>
                            <p style="margin-top: 0;line-height: 1.5em;margin-bottom: 15px;">

                            ' . $_COOKIE['address'] . '<br />
                            ' . $_COOKIE['email'] . '<br />
                            </p>
                        </div>
                        <div class="tm_invoice_right tm_text_right" style="margin-top: 0;line-height: 1.5em;text-align: right; width: 60%;">
                            <p class="tm_mb2" style="margin-top: 0;line-height: 1.5em;margin-bottom: 2px;">
                                <b class="tm_primary_color" style="font-weight:
                   bold;color: #111;">Pay To:</b>
                            </p>
                            <p style="margin-top: 0;line-height: 1.5em;margin-bottom: 15px;">
                                ND Logistics PVT Ltd, <br />
                                19/33, 50 feet Road, Krishnaswamy Nagar,<br />
                                Ramanthapuram, Coimbatore 641045.<br />
                                marketing@ndlogistics.co
                            </p>
                        </div>
                    </div>
                    <div class="tm_table tm_style1 tm_mb40" style="margin-top: 0;line-height: 1.5em;margin-bottom: 40px;">
                        <div class="tm_round_border" style="margin-top: 0;line-height: 1.5em;border: 1px solid #dbdfea;
            overflow: hidden;border-radius: 6px;">
                            <div class="tm_table_responsive" style="margin-top: 0;line-height: 1.5em;overflow-x: auto;">
                                <table style="width: 100%;caption-side: bottom;
               border-collapse: collapse;min-width: 600px;">
                                    <thead>
                                        <tr>
                                            <th class="tm_width_7 tm_semi_bold tm_primary_color tm_gray_bg" style="text-align: left;padding: 10px 15px;line-height:
                                1.55em;font-weight: 600;width: 58.33333333%;color: #111;background: #f5f6fa;">Item Details</th>
                                            <th class="tm_width_2 tm_semi_bold tm_primary_color tm_gray_bg" style="text-align: left;padding: 10px 15px;line-height:
                 1.55em;font-weight: 600;width: 16.66666667%;
                 color: #111;background: #f5f6fa;">Price</th>
                                            <th class="tm_width_2 tm_semi_bold tm_primary_color tm_gray_bg " style="text-align: right;padding: 10px
                           15px;line-height: 1.55em;font-weight: 600;
                           width: 16.66666667%;color: #111;
                           background: #f5f6fa;">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="tm_width_7" style="border-top: 1px solid #dbdfea;padding: 10px 15px;
                  line-height: 1.55em;width: 58.33333333%;">
                  ' . $mycheck . ' ' . $mycheck1 . '
                                            </td>
                                            <td class="tm_width_2" style="border-top: 1px solid #dbdfea;padding: 10px 10px;
                line-height: 1.55em;width: 16.66666667%;">
                ' . $_COOKIE['amount'] . '
                                            </td>
                                            <td class="tm_width_2 " style="border-top: 1px solid #dbdfea;padding: 10px 15px;
                  line-height: 1.55em;width: 16.66666667%; text-align: right;">
                  ' . $_COOKIE['amount'] . '
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tm_width_7" style="border-top: 1px solid #dbdfea;  padding: 10px 15px;
                        line-height: 1.55em;width: 58.33333333%;">
                                            </td>
                                            <td class="tm_width_2" style="border-top: 1px solid #dbdfea;
                  padding: 10px 15px;line-height: 1.55em;width: 16.66666667%;">
                                            </td>
                                            <td class="tm_width_2 tm_text_right" style="border-top: 1px solid #dbdfea;
                  padding: 10px 15px;line-height: 1.55em;width:
                        16.66666667%;text-align: right;"> </td>
                                        </tr>
                                        <tr>
                                            <td class="tm_width_7" style="border-top: 1px solid #dbdfea; padding: 10px 15px;
                  line-height: 1.55em;width: 58.33333333%;">
                                            </td>
                                            <td class="tm_width_2" style="border-top: 1px solid #dbdfea;padding: 10px 15px;line-height: 1.55em;width: 16.66666667%;">
                                            </td>
                                            <td class="tm_width_2 tm_text_right" style="border-top: 1px solid #dbdfea; padding: 10px 15px; line-height: 1.55em;width:
                      16.66666667%;text-align: right;"> </td>
                                        </tr>
                                        <tr>
                                            <td class="tm_width_7" style="border-top: 1px solid #dbdfea;padding: 10px 15px;line-height: 1.55em;width: 58.33333333%;">
                                            </td>
                                            <td class="tm_width_2" style="border-top: 1px solid #dbdfea;padding: 10px 15px;
                         line-height: 1.55em;width: 16.66666667%;">
                                            </td>
                                            <td class="tm_width_2 tm_text_right" style="border-top: 1px solid #dbdfea;padding: 10px 15px;
                  line-height: 1.55em;width:
                       16.66666667%;text-align: right;"> </td>
                                        </tr>
                                        <tr>
                                            <td class="tm_width_7" style="border-top: 1px solid #dbdfea;padding: 10px 15px;line-height: 1.55em;width: 58.33333333%;">
                                            </td>
                                            <td class="tm_width_2" style="border-top: 1px solid #dbdfea;padding: 10px 15px;
                                           line-height: 1.55em;width: 16.66666667%;">
                                            </td>
                                            <td class="tm_width_2 tm_text_right" style="border-top: 1px solid #dbdfea;padding: 10px 15px;line-height: 1.55em;width:
                       16.66666667%;text-align: right;"> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tm_invoice_footer" style="margin-top: 0;line-height: 1.5em;display: flex;">
                            <div class="tm_left_footer" style="margin-top: 0;line-height: 1.5em;width: 58%;padding: 10px 15px;">
                                <p class="tm_mb2" style="margin-top: 0;line-height: 1.5em;margin-bottom: 2px;">
                                    <b class="tm_primary_color" style="font-weight:
                 bold;color: #111;">Payment info:</b>
                                </p>
                                <p class="tm_m0" style="margin-top: 0;line-height: 1.5em;margin-bottom: 15px;margin: 0px;">
                                   Transaction ID -
                                     <span>   ' . $pid . '</span> <br />Amount:  ' . $_COOKIE['amount'] . '
                                </p>
                            </div>
                            <div class="tm_right_footer" style="margin-top: 0;line-height: 1.5em;width: 42%;">
                                <table style="width: 100%;caption-side: bottom;border-collapse: collapse;margin-top: -1px;">
                                    <tbody>
                                        <tr>
                                            <td class="tm_width_3 tm_primary_color tm_border_none tm_bold" style="border-top: 1px solid #dbdfea;padding: 10px 15px;
                      line-height: 1.55em ;  font-weight: 700;width: 25%;color: #111;border: none !important; ">
                                                Subtotal
                                            </td>
                                            <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_bold" style="border-top: 1px solid #dbdfea;padding:
                       10px 15px;line-height: 1.55em;font-weight: 700;width: 25%;color: #111;text-align: right;border: none !important;">
                       ' . $_COOKIE['amount'] . '
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tm_width_3 tm_primary_color tm_border_none tm_pt0" style="border-top: 1px solid
                             #dbdfea;padding: 10px 15px;line-height : 1.55em ;padding-top : 0;
                             width : 25%;color: #111;border: none !important;">
                           
                                                <span class="tm_ternary_color" style="color: #b5b5b5;"> </span>
                                            </td>
                                            <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_pt0" style="border-top: 1px solid #dbdfea;padding:
              10px 15px;line-height: 1.55em;padding-top: 0;width: 25%;color: #111;
              text-align: right;border: none !important;"></td>
                                        </tr>
                                        <tr>
                                            <td class="tm_width_3 tm_primary_color tm_border_none tm_pt0" style="border-top: 1px solid #dbdfea;padding: 10px 15px;
                      line-height: 1.55em ;padding-top : 0 ;width: 25%;color: #111;border: none !important;">
                                                Tax <span class="tm_ternary_color"
                                                          style="color: #b5b5b5;">(18%)</span>
                                            </td>
                                            <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_pt0" style="border-top: 1px solid #dbdfea;padding:
                    10px 15px;line-height: 1.55em;padding-top: 0;width: 25%;color: #111;text-align: right;border: none !important;">
                    ' . (intval($_COOKIE['amount'])/118)*18 . '.00
                                            </td>
                                        </tr>
                                        <tr class="tm_border_top tm_border_bottom" style="border-bottom: 1px solid #dbdfea;border-top: 1px solid #dbdfea;">
                                            <td class="tm_width_3 tm_border_top_0 tm_bold tm_f16 tm_primary_color" style="border-top: 0;padding: 10px 15px;
                      line-height: 1.55em;font-size: 16px;font-weight: 700;width: 25%;
                      color: #111;">
                                                Grand Total
                                            </td>
                                            <td class="tm_width_3 tm_border_top_0 tm_bold tm_f16 tm_primary_color tm_text_right" style="border-top: 0;padding: 10px
                       15px;line-height: 1.55em;font-size: 16px;font-weight: 700;width: 25%;
                       color: #111;text-align: right;">
                       ' . $_COOKIE['amount'] . '
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 0;line-height: 1.5em;">
                        <p class="tm_mb5" style="margin-top: 0;line-height: 1.5em;margin-bottom: 5px;">
                            <b class="tm_primary_color" style="font-weight:
             bold;color: #111;">Terms &amp; Conditions:</b>
                        </p>
                        <ul class="tm_m0 tm_note_list" style="margin: 0px;padding-left: 15px;list-style: disc;">
                            <li>
                                All claims relating to quantity or shipping errors shall be waived by Buyer unless made in writing to Seller within thirty (30)
                                days after delivery of goods to the address stated.
                            </li>
                            <li>
                                Delivery dates are not guaranteed and Seller has no liability for damages that may be incurred due to any delay in shipment of
                                goods hereunder. Taxes are excluded unless otherwise stated.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tm_invoice_btns tm_hide_print" style="background: #252526;
  border-color: #252526; display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    margin-top: 30px;
    margin-left: 20px;
    position: absolute;
    left: 100%;
    top: 0;
    -webkit-box-shadow: -2px 0 24px -2px rgba(43, 55, 72, 0.05);
            box-shadow: -2px 0 24px -2px rgba(43, 55, 72, 0.05);
    border: 3px solid #fff;
    border-radius: 6px;
    background-color: #fff;">
        <a href="javascript:window.print()" class="tm_invoice_btn tm_color1" style="    background-color: rgba(0, 122, 255, 0.1);
    color: #007aff;
    border-radius: 5px 5px 0 0;"  >
          <span class="tm_btn_icon" style="padding: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: 42px;
    width: 42px;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512" style="width: 24px;"><path d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path><rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></rect><path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path><circle cx="392" cy="184" r="24" fill="currentColor"></circle></svg>
          </span>
          <span class="tm_btn_text" style="position: absolute;
    left: 100%;
    background-color: #111;
    color: #fff;
    padding: 3px 12px;
    display: inline-block;
    margin-left: 10px;
    border-radius: 5px;
    top: 50%;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
    font-weight: 500;
    min-height: 28px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    opacity: 0;
    visibility: hidden;">Print</span>
        </a>
        
      </div>
        </div>
    </div>
    ';

    } else {
        $html = '<div style="box-sizing:border-box;height:100%;background-color:#000000;background-image:radial-gradient(#11581E, #041607), url(&quot;https://media.giphy.com/media/oEI9uBYSzLpBK/giphy.gif&quot;);background-repeat:no-repeat;background-size:cover;font-family:"Inconsolata", Helvetica, sans-serif;font-size:1.5rem;color:rgba(128, 255, 128, 0.8);">
    <div class="noise" style="pointer-events:none;position:absolute;width:100%;height:100%;background-image:url("https://media.giphy.com/media/oEI9uBYSzLpBK/giphy.gif");background-repeat:no-repeat;background-size:cover;z-index:-1;opacity:.02;"></div>
    <div class="overlay" style="pointer-events:none;position:absolute;width:100%;height:100%;background-size:auto 4px;z-index:1;"></div>
    <div class="terminal" style="box-sizing:inherit;  position: relative;
  left: 30%;height:100%;  bottom: -20%;width:1000px;max-width:100%;padding:4rem;text-transform:uppercase;">
      <h1>Error <span class="errorcode" style="color:white;">Payment Decline</span>
      </h1>
      <p class="output" style="color:rgba(128, 255, 128, 0.8);">Your payment unsucceefully.</p>
      <p class="output" style="color:rgba(128, 255, 128, 0.8);">return to the  <a href="index.php" style="color:#fff;text-decoration:none;text-decoration: underline;">Home Page</a>
      </p>
      <p class="output" style="color:rgba(128, 255, 128, 0.8);">Good luck.</p>
      
    </div>
  </div>

'; // "<p>Your payment failed</p>
        //          <p>{$error}</p>";
    }

    echo $html
        ?>

    <script>
        debugger;
        var loc = localStorage.getItem('userdata');
        var cache = JSON.parse(atob(loc));
        var today = new Date();
        document.getElementById('date').innerHTML = today.toDateString();
        $(document).ready(function () {
            $("#firstname").text(cache.firstname);
            $("#lastname").text(cache.lastname);
            $("#mobileNumber").text(cache.mobileNumber);
            $("#emailAddress").text(cache.emailAddress);
            $("#servicetype").text(cache.servicetype);
            $("#orderid").text(cache.orderid);
            $("#amount").text(parseInt(cache.amount) / 100);
            $("#total").text(parseInt(cache.amount) / 100);
            $("#subtotal").text(parseInt(cache.amount) / 100);
            $("#tax").text(parseInt(cache.amount) / 100 * 5 / 100);
            $("#grandtotal").text((parseInt(cache.amount) / 100 * 5 / 100) + parseInt(cache.amount) / 100);
            $("#price").text((parseInt(cache.amount) / 100 * 5 / 100) + parseInt(cache.amount) / 100);
            $("#address").text(cache.address);
            $("#pincode").text(cache.postCode);





        });  
    </script>
</body>

</html>