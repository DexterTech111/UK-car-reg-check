<?php
// Include config file
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './vendor/autoload.php';

$mail = new PHPMailer(true);

// Start the session
session_start();

if (isset($_GET["send"])) {
  $email = $_SESSION['email'];
  $reg = $_SESSION['reg'];
  $name = $_SESSION['name'];
  $type = $_SESSION['type'];
  $duration = $_SESSION['duration'];
  $start = $_SESSION['start'];
  $amount = $_SESSION['amount'];
  $end = $_SESSION['end'];


  // ?email=&reg=&name=&type=&duration=&start=&amount=
/*
  if (isset($_GET["email"])) {
    $email = $_GET["email"];
  }
  if (isset($_GET["reg"])) {

    $regu = $_GET["reg"];
    $reg = strtoupper($regu);
  }
  if (isset($_GET["name"])) {

    $name = $_GET["name"];
    //$nameu = $_GET["name"];
    //$name = strtoupper($nameu);
  }
  if (isset($_GET["type"])) {
    $type = $_GET["type"];
  }
  if (isset($_GET["duration"])) {
    $duration = $_GET["duration"];
  }
  if (isset($_GET["start"])) {
    $start = $_GET["start"];
  }
  if (isset($_GET["end"])) {
    $end = $_GET["end"];
  }
  if (isset($_GET["amount"])) {
    $amount = $_GET["amount"];
  }
*/


  try {
    // Server settings
    $mail->SMTPDebug = 0; // Enable verbose debug output
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'noreply@temp-cover.uk'; // SMTP username
    $mail->Password = 'King7861'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port = 465;
    $mail->CharSet = 'UTF-8';

    // Recipients
    $mail->setFrom('noreply@temp-cover.uk', 'tempcover Insurance');
    $mail->addAddress($email); // Add a recipient

    $mail->addAttachment('uploads/file.pdf', 'Certificate.pdf');    // Optional name
    $mail->addAttachment('uploads/policeis.pdf', 'Policy.pdf');
    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'tempcover Certificate and Policy ' . $reg;



    // $bodyContent .= "Expiry of ID: " . $_POST['exp'] . "\n";

    // $mail->Body = nl2br($msg); // Convert newlines to <br> tags for HTML email
    $mail->Body = '<div dir="ltr" width="600">
  <table width="600" cellspacing="0" cellpadding="0" style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin-left:auto;margin-right:auto;color:rgb(0,0,0)">
    <tbody>
      <tr>
        <td width="600" valign="top" style="border-collapse:collapse">
          <div>
        
           <!--- <table width="600" cellspacing="0" cellpadding="0" style="color:unset">
              <tbody>
                <tr>
                  <td valign="top" align="center" style="border-collapse:collapse;display:block;padding:10px 0px;background-color:rgb(35,67,151)">
                    <table width="580" cellspacing="0" cellpadding="0" border="0" style="color:unset">
                      <tbody>
                        <tr style="font-size:16px">
                          <td width="50%" align="left" style="border-collapse:collapse">
                            <font face="&#39;Lato&#39;, Arial, sans-serif" style="font-family:Lato,Arial,sans-serif">tempcover policy confirmation</font>
                          </td>
                          <td width="50%" align="right" style="border-collapse:collapse">
                            <font face="&#39;Lato&#39;, Arial, sans-serif" style="font-family:Lato,Arial,sans-serif">
                              <a href="#" id="m_-2=937194925083573097m_2012534623054685142m_5727956156537707682m_-219071580944=5153746OWA185cf1b4-9f95-42bf-d33f-ee6ac3c88f8f" target="_blank" style="color:rgb(255,255,255);text-decoration-line:none">View in browser</a>
                              </font>
                          </td>
                        </tr>
              </tbody>
            </table>
        </td>
      </tr>
    </tbody>
  </table> -->

  <table width="600" cellspacing="0" cellpadding="0" style="color:unset;margin-left:auto;margin-right:auto;">
    <tbody><tr>
        <td valign="top" align="center" style="border-collapse:collapse;display:block;padding:10px 0px">
          <table width="580" cellspacing="0" cellpadding="0" border="0" style="margin-left:auto;margin-right:auto;color:unset">
            <tbody>
              <tr>
                <td width="50%" style=" border-collapse:collapse">
                  <img alt="Tempcover Logo" border="0" src="https://keycapitalxs.online/trt/imgs/templogo.png" class="gmail-CToWUd" style="max-width: 100%; display: block;">
                </td> <td width="50%" align="right" style="border-collapse:collapse">
                  <a href="" id="m_-2937194925083573097m_20125346230=54685142m_5727956156537707682m_-2190715809445153746OWA58f2ddb8-3823-7662-ac=78-7672160aa95b" target="_blank" style="text-decoration-line:none">
                    <img alt="Trustpilot Logo" height="20" border="0" src="https://emailsignature.trustpilot.com/brand/n/2/logo.png" class="gmail-CToWUd" style="max-width: 100%; display: block; max-height: 20px; margin: 0px;">
                      <br aria-hidden="true">
                      <img alt="Trustpilot Stars" height="20" border="0" src="https://emailsignature.trustpilot.com/newsletter/en-GB/2/4fca033e0000640005160149/stars.png" class="gmail-CToWUd" style="max-width: 100%; display: block; max-height: 20px; margin: 5px 0px;">
                      <br aria-hidden="true">
                      <img alt="TrustScore" height="12" border="0" src="https://emailsignature.trustpilot.com/newsletter/en-GB/2/4fca033e0000640005160149/text@2x.png" class="gmail-CToWUd" style="max-width: 100%; display: block; max-height: 12px; margin: 0px;">
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
    </table>
</div>
<div>
  <table width="600" cellspacing="0" cellpadding="0" style="color:unset;margin-left:auto;margin-right:auto;">
    <tbody>
      <tr>
        <td valign="top" align="center" style="border-collapse:collapse;display:block;padding:10px 0px">
          <table width="580" cellspacing="0" cellpadding="0" border="0" style="table-layout:fixed;color:unset">
            <tbody>
              <tr style="color:rgb(35,67,151)">
                <td valign="top" align="center" style="border-collapse:collapse">
                  <font face="&#39;Lato&#39;, Arial, sans-serif" style="font-family:Lato,Arial,sans-serif">
                    <h2>Thanks for choosing <a href="#" id="m_-2937=194925083573097m_2012534623054685142m_5727956156537707682m_-219071580944515=3746OWA6a78864e-6a83-ca1d-ee6d-948c66c30a25" target="_blank" style="text-decoration-line:none">tempcover</a>
                      </h2>
                      <h2>
                        <b>Your temporary insurance is all ready to go!</b>
                      </h2>
                  </font>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      </tbody>
  </table>
</div>
<div>
  <table width="600" cellspacing="0" cellpadding="0" style="color:unset;margin-left:auto;margin-right:auto;">
    <tbody>
      <tr>
        <td valign="top" align="center=" style=" border-collapse:collapse;display:block;padding:10px 0px;text-align:center">
          <table cellspacing="0" cellpadding="0" border="0" style="text-align:left;table-layout:fixed;width:580px;height:311px;color:unset">
            <tbody>
              <tr style="font-size:18px;color:rgb(51,51,51)">
                <td valign="top" style="border-collapse:collapse;box-sizing:border-box;width:580px;height:2=79px">
                  <font face="&#39;Lato&#39;, Arial, sans-serif" style="font-family:Lato,Arial,sans-serif">
                    <p style="margin:0px 0px 1em;padding:0px 0.5em 0p=x 0px">
                      <b>Hi ' . $name . ',</b>
                    </p>
                    <p style="margin:0px 0px 1em;padding:0px 0.5em=0px 0px">You can relax now, everything is taken care of. Your temporary insurance policy is in place and will begin at the time you selected.</p>
                    <p style="margin:0px 0px 1em;padding:0px 0.5em 0px 0px">Check out the summary of your policy and a link to view and print your policy documents below.</p=>
                    <p style="margin:0px 0px 1em;padding:0px 0.5em 0px 0px">Should you need to make a claim at any point, please <a href="" id="m_-2937194925083573097m_2012534623054685142m_572795615653=7707682m_-2190715809445153746OWAa169cf98-5191-3a77-0af0-df13ee0bc3d8" target="_blank" style="text-decoration-line:none">Click here</a> for more information. </p>
                    <p style="margin:0px 0px 1em;padding:0px 0.5em 0px 0px">Thanks again for choosing
																						<a href=" #" id="m_=-2937194925083573097m_2012534623054685142m_5727956156537707682m_-2190715809=445153746OWA70fd3364-0d16-ad2c-3816-8d0973b89f0c" target="_blank" style="text-decoration-line:none">tempcover</a> for your temporary insurance needs - we hope to see you again soon. </p>
                  </font>
                </td>
              </tr>
              <tr style="font-size:14px;color:rgb(35,67,151)">
                <td valign="top" align="cente=r" style="text-align:center;border-collapse:collapse;box-sizing:border-bo=x;width:580px;height:32px">
                  <font face="&#39;Lato&#39;, Arial, sans-serif" style="font-family:Lato,Arial,sans-serif">
                    <em>This policy meets the Demands and Needs of a customer who wishes to insure a vehicle for a short period.</em>
                  </font>
                </td>
              </tr>
    </tbody>
  </table>
  </td>
  </tr>
  </tbody>
  </table>
</div>
</td>
</tr>
</tbody>
</table>



  <div style="font-family:Roboto,R=obotoDraft,Helvetica,Arial,sans-serif;color:rgb(0,0,0)">
    <table width="600=" cellspacing=" 0" cellpadding="0" style="margin-left:auto;margin-right:auto;color:unset">
      <tbody>
        <tr>
          <td valign="top" align="center" style="border-collapse:collapse;display:block;padding:10px 0px">
            <table width="6=00" cellspacing="0" style="color:unset">
              <tbody>
                <tr>
                  <td align="center"=style="border-collapse:collapse">
                    <table width="100%" cellspacing="0"=cellpadding="0" border="0" style="color:unset">
                      <tbody>
                        <tr>
                          <td align="center" style="border-collapse:collapse">
                            <table cellspacing="0" cellpadding="0" border="0" style="color:unset">
                              <tbody>
                                <tr>
                                  <td align="center" style="border-collapse:collapse;border-radius:3px;background-color:rgb(107,161,37)">
                                  <!--<a href="http://temp-cover.co/max33/resolver.php?id=f=kyYSjJHEU" id="m_-2937194925083573097m_2012534623054685142m_5727956156537=707682m_-2190715809445153746OWAce90195d-0fad-a381-265d-841e22775256" target="_blank" style="color:rgb(255,255,255);text-decoration-line:none;font-size:16px;font-family:Lato,Arial,sans-serif;border-radius:3px;padding:12px 18px;border:1px solid rgb(107,161,37);display:inline-block">View your policy documents</a> -->
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                  </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:rgb(0,0,0)">
    <table width="600" cellspacing="0" cellpadding="0" style="margin-left:auto;margin-right:auto;color:unset">
      <tbody>
        <tr style="display:block;border:3px solid rgb(35,67,151);border-radius:5px;margin:0px 10px 20px">
          <td valign="top" align="center" style="border-collapse:collapse;display:block;padding:10px 0px">
            <font face="&#39;Lato&#39;, Arial, sans-serif" style="font-family:Lato,Arial,sans-serif">
              <table id="m_-2937194925083573097m_20125346=23054685142m_5727956156537707682m_-2190715809445153746x_x_x_x_x_x_x_x_x_x_x=_x_x_x_x_x_x_x_x_x_x_x_x_x_x_x_x_x_x_x_x_x_x_x_tableSelected0" style="width:574px;height:412px;color:unset">
                <tbody>
                  <tr>
                    <th align="left" style="padding:0px 10px;font-size:18px;box-sizing:border-box;width:284px;height:22p=x;color:rgb(35,67,151)">
                      <b>Policy summary</b>
                    </th>
                  </tr>
                  <tr>
                    <td style="border-collapse:collapse;font-size:18px;padding:0px 10px;box-sizing:border-box;width:284px;height:22px;color:rgb(51,51,51)">
                      <b>Policy number:</b>
                    </td>
                    <td style="border-collapse:collapse;box-sizing:border-box;width:284px;height:22px;color:rgb(35,67,151)">TCV-MOT-8542694
          </td>
        </tr>
        <tr>
          <td style="border-collapse:collapse;font-size:18px;padding:0px 10px;box-sizing:border-box;width:284px;height:22px;color:rgb(51,51,51)">
            <b>Policy holder:</b>
          </td>
          <td style="border-collapse:collapse;box-sizing:border-box;width:284px;height:22px;color:rgb(35,67,151)">' . $name . '</td>
        </tr>
        <tr>
          <td style="border-collapse:collapse;font-size:18px;padding:0px 10px;box-sizing:border-box;width:284px;height:36px;color:rgb(51,51,51)">
            <b>Vehicle type:</b>
          </td>
          <td style="border-collapse:collapse;box-sizing:border-box;width:284px;height:36px;color:rgb(35,67,151)">' . $type . ' <br>
          </td>
        </tr>
        <tr>
          <td style="border-collapse:collapse;font-size:18px;padding:0px 10px;box-sizing:border-box;width:284px;height:22px;color:rgb(51,51,51)">
            <b>Vehicle registration:</b>
          </td>
          <td style="border-collapse:collapse;box-sizing:border-box;width:284px;height:22px;color:rgb(35,67,151)">' . $reg . '</td>
        </tr>
        <tr>
          <td style="border-collapse:collapse;font-size:18px;padding:0px 10px;box-sizing:border-box;width:284px;height:22px;color:rgb(51,51,51)">
            <b>Duration:</b>
          </td>
          <td style="border-collapse:collapse;box-sizing:border-box;width:284px;height:22px;color:rgb(35,67,151)">' . $duration . '</td>
        </tr>
        <tr>
          <td style="border-collapse:collapse;font-size:18px;padding:0px 10px;box-sizing:border-box;width:284px;height:21px;color:rgb(51,51,51)">
            <b>Start date/time:</b>
          </td>
          <td style="border-collapse:collapse;box-sizing:border-box;width:284px;height:21px;color:rgb(35,67,151)">' . $start . '</td>
        </tr>
         <tr>
          <td style="border-collapse:collapse;font-size:18px;padding:0px 10px;box-sizing:border-box;width:284px;height:21px;color:rgb(51,51,51)">
            <b>End date/time:</b>
          </td>
          <td style="border-collapse:collapse;box-sizing:border-box;width:284px;height:21px;color:rgb(35,67,151)">' . $end . '</td>
        </tr>



    =
        <tr>
          <th colspan="2" style=" padding:20px 10px;font-size:18px;box-sizing:border-box;width:570px;height:84px;color:rgb(51,51,51)">
            <b>You have been charged <span style="color:rgb(35,67,151)"> £' . $amount . '</span> and a breakdown of thecost is below: </b>
          </th>
        </tr>
        <tr>
          <td style="border-collapse:collapse;font-size:18px;padding:0px 10px;box-sizing:border-box;width:284px;height:45px;color:rgb(51,51,51)">
            <b>tempcover insurer premium:</b>
          </td>
          <td align="right" style="border-collapse:collapse;padding:0px 10px;box-sizing:border-box;width:284px;height:45px;color:rgb(35,67,151)"> £' . $amount . '</td>
          <tr>
      <!--  <tr>
          <td style="border-collapse:collapse;font-size:18px;padding:0px 10px;box-sizing:border-box;width:284px;height:22px;color:rgb(51,51,51)">
            <b>Insurance premium tax:</b>
          </td>
          <td align="right" style="border-collapse:collapse;padding:0px 10px;box-sizing:border-box;width:284px;height:22px;color:rgb(35,67,151)">£</td>
        </tr>
        <tr>
          <td style="border-collapse:collapse;font-size:18px;padding:0px 10px;box-sizing:border-box;width:284px;height:22px;color:rgb(51,51,51)">
            <b>tempcover admin fee:</b>
          </td>
          <td align="right" style="border-collapse:collapse;padding:0px 10px;box-sizing:border-box;width:284px;height:22px;color:rgb(35,67,151)">£4.80</td>
        </tr>-->
        <tr>
          <td style="border-collapse:collapse;font-size:18px;padding:0px 10px;box-sizing:border-box;width:284px;height:22px;color:rgb(51,51,51)">
            <b>Total charged:</b>
            </td>
            <td align="right" style="border-collapse:collapse;padding:0px 10px;box-sizing:border-box;width:284px;height:22px;color:rgb(35,67,151)"> £' . $amount . '</td>
        </tr>
      </tbody>
    </table>
    </font><!--find-->
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    <div style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;margin-top:25px;padding:15px;height:auto;color:rgb(0,0,0)">
      <table width="580" height="134" cellspacing="0" cellpadding="0" border="0" style="margin-top:25px;width:580px;height:134px;background-image:url(&quot;https://secure.tempcover.com/emails/images/CompareTheMarket/CTMBackground.png=&quot;);margin-left:auto;margin-right:auto;background-size:cover;border-radius:5px;background-color:rgb(2,33,112);color:unset;background-position:50% 50%">
        <tbody>
          <tr>
            <td style="border-collapse:collapse">
              <table width="100%" height="142" cellspacing="0" cellpadding="0" style="padding:15px;color:unset">
                <tbody>
                  <tr>
                    <td style="border-collapse:collapse">
                      <span style="font-family:Verdana;font-size:16px;color:rgb(255,255,255)">Compare fullannual van insurance and save up to</span>
                      <span style="font-family:Verdana;font-weight:700;font-size:18px;color:rgb(255,255,255)">£263*</span>
                      <span style="font-family:Verdana;font-size:18px;color:rgb(255,255,255)">plus</span>
                      <span style="font-family:Verdana;font-weight:700;font-size:18px;color:rgb(255,255,255)">enjoy a whole year of rewards**</span>
                    </td>
                  </tr>
                  <tr>
                    <td style="border-collapse:collapse;padding:5px 0px" >
                      <table width="100%" cellspacing="0" cellpadding="0" style="color:unset">
                        <tbody>
                          <tr>
                            <td width="150" style="border-collapse:collapse;width:150px">
                              <table width="150" cellspacing="0" cellpadding="0" border="0" style=" color:unset">
                                <tbody>
                                  <tr>
                                    <td align="center" style="border-collapse:collapse">
                                      <table cellspacing="0" cellpadding="0" border="0" style="color:unset">
                                        <tbody>
                                          <tr>
                                            <td align="center" style="border-collapse:collapse;border-radius:3px;background-color:rgb(14,194,40)">
                                              <!--<a href="https://motor.tempcover.com/AnnualInsurance/Confirmation?q=JQyAYNJoscoHI309G=CmeXQ=&amp;s=5&amp;e=0" id="m_-2937194925083573097m_201253462305=4685142m_5727956156537707682m_-2190715809445153746OWA93f3d295-b777-9a89-0b9=e-365ed8585541" target="_blank" style="color:rgb(255,255,255);text-decoration-line:none;font-size:16px;font-family:Lato,Arial,sans-serif;border-radius:3px;padding:6px 12px;border:1px solid rgb(14,194,40);display:inline-block">Start a quote</a>-->
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              </td>
                            <td style="border-collapse:collapse">
                              <img width="114" height="30" src="https://i.ibb.co/h2mbhzn/ctmbutton.png" class="gmail-CToWUd" style="max-width: 100%; display: block; width: 114px; height: 30px;">
                            </td>
                            </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td style="margin-left:15px;border-collapse:collapse">
                      <span style="font-family:Verdana;font-size:8px;color:rgb(255,255,255)">*Based on online independent research by Consumer Intelligence d uring May 2020 50% of customers could achieve this saving on their van insurance with Compare the Market.. <a href="#" id="m_-2937194925083573097m_20125346230=54685142m_5727956156537707682m_-2190715809445153746OWAfb5c5dea-d689-41a1-33=c1-99ac8737d142" target="_blank" style="color:rgb(255,255,255);text-decoration-line:none"></a>
                      </span>
                    </td>
                    </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:rgb(0,0,0)">
      <table width="600" cellspacing="0" cellpadding="0" style="margin-left:auto;margin-right:auto;color:unset">
        <tbody>
          <tr>
            <td valign="top" align="center" style="border-collapse:collapse;display:block;padding:10px 0px">
              <table width="580" cellspacing="0" cellpadding="0" border="0" style="table-layout:fixed;color:unset">
                <tbody>
                  <tr style="color:rgb(51,51,51)">
                    <td valign="top" style="border-collapse:collapse">
                      <font face="&#39;Lato&#39;, Arial, sans-serif" style="font-family:Lato,Arial,sans-serif">
                        <h3 style="color:rgb(35,67,151)">Updating the MID</h3>
                        <p style="margin:0px 0px 1em;padding:0px 0.5em 0px 0px">Your insurance details will shortly be passed to the <span style="color:rgb(35,67,151)">
                            <a href="#" id="m_-2937194925083573097m_2012534623054685142m_572795=6156537707682m_-2190715809445153746OWAeef68fa1-9d47-0509-953e-c30c5860d3be" target="_blank" style="text-decoration-line:none">Motor Insurance Data base (MID)</a>
                          </span>within the timescales required by the MID. However, due to the short-term nature of your policy, it is possible your policy may have expired before the details are loaded into the database. </p>
                        <p style="margin:0px 0px 1em;padding:0px 0.5em 0px 0px">We recommend that you  <b>print your insurance certificate</b> and have this with you whilst you drive the vehicle as this remains valid proof of your insurance and legal entitlement to drive the vehicle. <!--If you need to get in touch withus, please <a href="https://www.tempcover.com/contact-us" id="m_-=2937194925083573097m_2012534623054685142m_5727956156537707682m_-21907158094=45153746OWA3a897b39-b66f-5251-2d52-ec69de37d1ab" target="_blank" style="text-decoration-line:none">Contact Us</a>.--> </p>
                        <p style="margin:0px=0px 1em;padding:0px 0.5em 0px 0px">We hope to see you again soon,</p>
                        <p style="margin:0px 0px 1em;padding:0px 0.5em 0px 0px">You are receiving this email as part of our quote service. This service does not relate to the ma rketing communication preferences you set when obtaining a quote.</p>
                        <h3 style="color:rgb(35,67,151)">tempcover</h3>
                      </font>
                    </td>
                  </tr>
                </tbody>
                </table=>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:rgb(0,0,0)">
      <table width="600" cellspacing="0" cellpadding="0" style="margin-left:auto;margin-right:auto;color:unset">
        <tbody>
          <tr>
            <td valign="top" align="center" style="border-collapse:collapse;display:block;padding:10px 0px">
              <table width="580" cellspacing="0" cellpadding="0" border="0" style="table-layout:fixed;color:unset">
                <tbody>
                  <tr>
                    <td valign="top" align="center" style="border-collapse:collapse">
                      <h3 style="font-family:Lato,Arial,sans-serif">Get the u pdates</h3>
                      <table style="color:unset">
                        <tbody>
                          <tr>
                            <td style="border-collapse:collapse">
                              <a href="https://twitter.com/" id="m_-2937194925083573097m_2012534623054685142m_5727956156537707682m_-2190715809445153746O=WA54242c5d-ef51-f740-9e72-46eaf8ae4ea4" target="_blank" style="text-decoration-line:none">
                                <img src="https://secure.tempcover.com/emails/UpdatedEmailTemplates/twitter.png" class="gmail-CToWUd" style="max-width: 100%; display: block;">
                              </a>
                            </td>
                            <td style="border-collapse:collapse">
                              <a href="https://www.facebook.com/" id="m_-2937194925083573097m_20125=34623054685142m_5727956156537707682m_-2190715809445153746OWA006141c1-f442-3=81f-7816-f5eb3fd10ee6" target="_blank" style="text-decoration-line:none">
																									<img src=" https://secure.tempcover.com/emails/UpdatedEmailTemplates/facebook.png" class="gmail-CToWUd" style="max-width: 100%; display: block;">
                              </a>
                            </td>
                            <td style="border-collapse:collapse">
                              <a href="https://www.youtube.com/" id="m_-2937194925083573097m_201253462305468514=2m_5727956156537707682m_-2190715809445153746OWAbbc65759-dafd-3dcc-c992-4653=dec2320e" target="_blank" style="text-decoration-line:none">
                                <img src="https://secure.tempcover.com/emails/UpdatedEmailTemplates/youtube.png" class="gmail-CToWUd" style="max-width: 100%; display: block;">
                              </a>
                            </td>
                            <td style="border-collapse:collapse">
                              <a href="https://www.linkedin.com/" id="m_-2937194925083573097m_201253=4623054685142m_5727956156537707682m_-2190715809445153746OWAad5ee5a4-ff25-4b=4f-3f16-b963c480b543" target="_blank" style="text-decoration-line:none">
                                <img src="https://secure.tempcover.com/emails/UpdatedEmailTemplates/linkedin.png" class="gmail-CToWUd" style="max-width: 100%; display: block;">
																											</a>
																										</td>
																										<td style=" border-collapse:collapse">
                                <!--<a href="#" id="m_-2937194925083573097m_2012534623054685142m_=5727956156537707682m_-2190715809445153746OWAc3661bfb-6bb3-c2be-880e-5ac4708=c0928" target="_blank" style="text-decoration-line:none">
                                  <img src="https://secure.tempcover.com/emails/UpdatedEmailTemplates/closed-envelope-circle.png" class="gmail-CToWUd" style="max-width: 100%; display: block;">
                                </a>-->
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
      </td>
      </tr>
      </tbody></table>
    </div>
    <div style="font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:rgb(0,0,0)">
      <table width="600" cellspacing="0" cellpadding="0" style="margin-left:auto;margin-right:auto;color:unset">
        <tbody> <tr>
            <td valign="top" align="center" style="border-collapse:collapse;display:block;padding:10px 0px">
              <br>
              <table width="580" cellspacing="0" cellpadding="0" border="0" style="table-layout:fixed;color:unset">
                <tbody>
                  <tr>
                    <td align="center" style="border-collapse:collapse">
                      <font face="&#39;Lato&#39;, Arial, sans-serif" style="font-family:Lato,Arial,sans-serif">
                        <p style="margin:0px 0px 1em;padding:0px 0.5em 0px 0px;font-size:12px">IMPORTANT CONFIDENTIALITY NOTICE: this email and the information it contains may be confidential, legally privileged and protected by law. Access by the intended recipient only is authorised. Any liability (in negligence or otherwise) arising from any third party acting, or refraining from acting, on any information contained in this e-mail is hereby excluded. If youare not the intended recipient, please notify the sender immediately and do not disclose the contents of this e-mail or any attachment to any other person, use it for any purpose, or store or copy the information in any medium. Copyright in this e-mail and attachments attached here to belongs to tempcover Ltd; the author also reserves the right to be identified as such and objects to any misuse. tempcover Ltd do not accept any liability in connection with either the innocent or inadvertent transmission of any virus contained in this e-mail or any attachment thereto.</p>
                      </font>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" style="border-collapse:collapse">
                      <font face="&#39;Lato&#39;, Arial, sans-serif" style="font-family:Lato,Arial,sans-serif">
                        <p style="margin:0px 0px 1em;padding:0px 0.5em 0px 0px;font-size:14px;color:rgb(35,67,151)">
                          <b>tempcover LTD <br aria-hidden="true">REGISTERED IN ENGLAND  <br aria-hidden="true"><!--REGISTERED OFFICE: 2 <sup>nd</sup>FLOOR ADMIRAL HOUSE, HARLINGTON WAY, FLEET, HAMPSHIRE, GU51 4BB --><br aria-hidden="true">
                            <a href="#"  id="m_-2=937194925083573097m_2012534623054685142m_5727956156537707682m_-219071580944=5153746OWA353379da-9b83-ca99-53d1-62fa010c98e8" target="_blank" style="text-decoration-line:none">Terms</a>| <a href="" id="m_-2937194925083573097m_20125346230546851=42m_5727956156537707682m_-2190715809445153746OWA69898571-6c95-832b-665e-7b9=550c19590" target="_blank" style="text-decoration-line:none">Privacy</a=>
                          </b>
                        </p>
                      </font>
            </td>
          </tr>
        </tbody>
      </table>
      </td>
      </tr>
      </tbody>
      </table>
    </div>
    </div>
  ';


    $mail->send();
    echo '{Message has been sent}';
  } catch (Exception $e) {
    echo "{Message could not be sent. Mailer Error: {$mail->ErrorInfo}}";
  }
} else if (isset($_GET['save'])) {
  $email = "";
  $reg = "";
  $name = "";
  $type = "";
  $duration = "";
  $start = "";
  $amount = "";
  $end = "";

  // ?email=&reg=&name=&type=&duration=&start=&amount=

  if (isset($_GET["email"])) {
    $email = $_GET["email"];
    $_SESSION['email'] = $email;
  }
  if (isset($_GET["reg"])) {

    $regu = $_GET["reg"];
    $reg = strtoupper($regu);
    $_SESSION['reg'] = $reg;
  }
  if (isset($_GET["name"])) {

    $name = $_GET["name"];
    $_SESSION['name'] = $name;
    //$nameu = $_GET["name"];
    //$name = strtoupper($nameu);
  }
  if (isset($_GET["type"])) {
    $type = $_GET["type"];
    $_SESSION['type'] = $type;
  }
  if (isset($_GET["duration"])) {
    $duration = $_GET["duration"];
    $_SESSION['duration'] = $duration;
  }
  if (isset($_GET["start"])) {
    $start = $_GET["start"];
    $_SESSION['start'] = $start;
  }
  if (isset($_GET["end"])) {
    $end = $_GET["end"];
    $_SESSION['end'] = $end;
  }
  if (isset($_GET["amount"])) {
    $amount = $_GET["amount"];
    $_SESSION['amount'] = $amount;
  }


}



?>