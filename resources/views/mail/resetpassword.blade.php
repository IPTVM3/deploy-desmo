<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="format-detection" content="telephone=no">
    <!--[if !mso]>
        <!-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300&subset=latin" rel="stylesheet"
          type="text/css">
    <!--<![endif]-->
    <title>{{ config('app.name') }}- Forgot Password</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            font-family: 'OpenSans-Light', "Helvetica Neue", "Helvetica", Calibri, Arial, sans-serif;
            font-size: 100%;
            line-height: 1.6;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: none;
            width: 100% !important;
            height: 100%;
        }

        a {
            color: #348eda;
        }

        .btn-primary {
            text-decoration: none;
            color: #FFF;
            background-color: #a55bff;
            border: solid #a55bff;
            border-width: 10px 20px;
            line-height: 2;
            font-weight: bold;
            margin-right: 10px;
            text-align: center;
            cursor: pointer;
            display: inline-block;
        }

        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .padding {
            padding: 10px 0;
        }

        table.body-wrap {
            width: 100%;
            padding: 0px;
            padding-top: 20px;
            margin: 0px;
        }

        table.body-wrap .container {
            border: 1px solid #f0f0f0;
        }

        table.footer-wrap {
            width: 100%;
            clear: both !important;
        }

        .footer-wrap .container p {
            font-size: 12px;
            color: #666;
        }

        table.footer-wrap a {
            color: #999;
        }

        .footer-content {
            margin: 0px;
            padding: 0px;
        }

        h1, h2, h3 {
            color: #660099;
            font-family: 'OpenSans-Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
            line-height: 1.2;
            margin-bottom: 15px;
            margin: 40px 0 10px;
            font-weight: 200;
        }

        h1 {
            font-family: 'Open Sans Light';
            font-size: 45px;
        }

        h2 {
            font-size: 28px;
        }

        h3 {
            font-size: 22px;
        }

        p, ul, ol {
            margin-bottom: 10px;
            font-weight: normal;
            font-size: 14px;
        }

        ul li, ol li {
            margin-left: 5px;
            list-style-position: inside;
        }

        .container {
            display: block !important;
            max-width: 600px !important;
            margin: 0 auto !important;
            clear: both !important;
        }

        .body-wrap .container {
            padding: 0px;
        }

        .content, .footer-wrapper {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px 33px 20px 37px;
            display: block;
        }

        .content table {
            width: 100%;
        }

        .content-message p {
            margin: 20px 0px 20px 0px;
            padding: 0px;
            font-size: 22px;
            line-height: 38px;
            font-family: 'OpenSans-Light', Calibri, Arial, sans-serif;
        }

        .preheader {
            display: none !important;
            visibility: hidden;
            opacity: 0;
            color: transparent;
            height: 0;
            width: 0;
        }
    </style>
</head>

<body bgcolor="#f6f6f6">
  <span class="preheader"
        style="display: none !important; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;">
    Make it a good one
</span>

  <!-- body -->
  <table class="body-wrap" width="600">
      <tr>
          <td class="container" bgcolor="#FFFFFF">
              <!-- content -->
              <table border="0" cellpadding="0" cellspacing="0" class="contentwrapper" width="600">
                  <tr>
                      <td style="height:25px;">
                          <img src="https://gallery.mailchimp.com/d42c37cf5f5c0fac90b525c8e/images/96288204-f67c-4ba2-9981-1be77c9fa18b.png"
                               border="0" width="600">
                      </td>
                  </tr>
                  <tr>
                      <td>
                          <div class="content">
                              <table class="content-message">
                                  <tr>
                                      <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                      <td align="left">
                                          <a href="https://jet.com">
                                              <img src="{{asset('img/'.$store->logo)}}"
                                                   width="126">
                                          </a>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="content-message"
                                          style="font-family: 'Open Sans', 'Helvetica Neue', 'Helvetica', Calibri, Arial, sans-serif; color: #595959;">
                                          <p>
                                              <img width="51" height="65" border="0"
                                                   src="https://gallery.mailchimp.com/d42c37cf5f5c0fac90b525c8e/images/940e125b-4079-4193-b880-806bba3b28b3.png"
                                                   alt="Change your password">
                                          </p>
                                          <h1 style="font-family:'Open Sans', 'Helvetica Neue', 'Helvetica', Calibri, Arial, sans-serif;">
                                              Changing your <br>
                                              password
                                          </h1>

                                          <p style="font-family: 'Open Sans','Helvetica Neue', 'Helvetica',Calibri, Arial, sans-serif; font-size:18px; line-height:26px;">
                                              Need to reset your password? No problem. Just click below to get
                                              started.</p>
                                          <table width="325" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                  <td width="325" height="60" bgcolor="#31cccc"
                                                      style="text-align:center;">


                                                      <a href="{{ $token }}"
                                                         align="center"
                                                         style="display:block; font-family:'Open Sans', 'Helvetica Neue', 'Helvetica', Calibri, Arial, sans-serif; font-size:20px; color:#ffffff; text-align: center; line-height:60px; display:block; text-decoration:none;">
                                                          Reset my password</a>
                                                  </td>
                                                  <td>&nbsp;</td>
                                                  <td>&nbsp;</td>
                                              </tr>
                                          </table>
                                          <p style="font-family: 'Open Sans','Helvetica Neue', 'Helvetica',Calibri, Arial, sans-serif; font-size:18px; line-height:26px;">
                                              If you didn't request to change your password, you don't have to do
                                              anything. So that's easy.</p>
                                      </td>
                                  </tr>
                              </table>
                          </div>
                          <p style="font-family: 'Open Sans', 'Helvetica Neue', 'Helvetica', Calibri, Arial, sans-serif; font-size:18px; line-height:26px;">
                              <img border="0"
                                   src="https://gallery.mailchimp.com/d42c37cf5f5c0fac90b525c8e/images/4d4431c8-e778-47ac-a026-a869106b2903.gif"
                                   height="50" width="200">
                          </p>
                      </td>
                  </tr>
                  <tr>
                      <td bgcolor="#F7F7F7"
                          style="max-width:600px; margin:0 auto; padding:20px 33px 20px 37px; display:block;">
                          <table cellspacing="0" cellpadding="10" width="100%">
                              <tr>
                                  <td colspan="3">
                                      <table cellspacing="0" cellpadding="10" width="100%">
                                          <tr>
                                              <td style="font-size:10px; font-weight:bold; font-family: 'Open Sans','Helvetica Neue', 'Helvetica',Calibri, Arial, sans-serif;color: #A55BFF; text-align:center;"
                                                  align="center">Free returns up to 30 days
                                              </td>

                                              <td style="width:20px; font-size:10px; font-weight:bold; font-family: 'Open Sans','Helvetica Neue', 'Helvetica',Calibri, Arial, sans-serif;color: #A55BFF; text-align:center;"
                                                  align="center">&#9679;
                                              </td>

                                              <td style="width:20px; font-size:10px; font-weight:bold; font-family: 'Open Sans','Helvetica Neue', 'Helvetica',Calibri, Arial, sans-serif;color: #A55BFF; text-align:center;"
                                                  align="center">&#9679;
                                              </td>
                                              <td style="width:20px; font-size:10px; font-weight:bold; font-family: 'Open Sans','Helvetica Neue', 'Helvetica',Calibri, Arial, sans-serif;color: #A55BFF; text-align:center;"
                                                  align="center">&#9679;
                                              </td>
                                              <td style="font-size:10px; font-weight:bold; font-family: 'Open Sans','Helvetica Neue', 'Helvetica',Calibri, Arial, sans-serif;color: #A55BFF; text-align:center;"
                                                  align="center">24/7 Customer Service
                                              </td>
                                          </tr>
                                      </table>
                                  </td>
                              </tr>
                              <tr>
                                  <td colspan="3" height="18" style="font-size:1px; line-height:1px;">&nbsp;</td>
                              </tr>
                              <tr>
                                  <td colspan="3" height="18" style="font-size:1px; line-height:1px;">&nbsp;</td>
                              </tr>
                              <tr class="text-center">

                                  <td style="font-size:10px; font-weight:normal; font-family: 'OpenSans', helvetica, sans-serif; color: #414141; text-align:left;" align="left">
                                      <a href="https://jet.com/privacy-policy" style="text-decoration:none;font-size:10px; font-weight:normal; font-family: 'OpenSans', helvetica, sans-serif; color: #414141;">{{ $store->email }}</a>
                                  </td>

                                  <td colspan="2"
                                      style="font-size:10px; font-weight:normal; font-family: 'OpenSans', helvetica, sans-serif; color: #414141; text-align:right;"
                                      align="right">
                                      <strong >@if($store->phone ){{ $store->phone }} @endif  --  @if($store->fix ){{ $store->fix }} @endif</strong>
                                  </td>
                              </tr>
                          </table>
                      </td>
                  </tr>
                  <tr>
                      <td style="height:25px;">
                          <img width="600"
                               src="https://gallery.mailchimp.com/d42c37cf5f5c0fac90b525c8e/images/4c1b3727-e048-4e80-815b-a9197acc62fe.png">
                      </td>
                  </tr>
                  <tr>
                      <td>
                          <table border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                  <td colspan="3">&nbsp;</td>
                              </tr>
                              <tr>
                                  <td width="25"></td>
                                  <td style="font-size:8px; line-height:12px; font-weight:normal; font-family: 'OpenSans', helvetica, sans-serif; color: #535352;">
                                      {{ $store->bio_desc }}
                                  </td>
                                  <td width="25"></td>
                              </tr>
                              <tr>
                                  <td colspan="3">&nbsp;</td>
                              </tr>
                              <tr>
                                  <td colspan="3">&nbsp;</td>
                              </tr>
                          </table>
                      </td>
                  </tr>
              </table>
              <!-- /content -->
          </td>
          <td></td>
      </tr>
  </table>
  <!-- /body -->
</body>

</html>