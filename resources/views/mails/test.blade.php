<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="x-apple-disable-message-reformatting" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="color-scheme" content="light dark" />
    <meta name="supported-color-schemes" content="light dark" />
    <title></title>
    <style type="text/css" rel="stylesheet" media="all">
        /* Base ------------------------------ */
        @import url("https://fonts.googleapis.com/css?family=Nunito+Sans:400,700&display=swap");

        /* ... (Your existing styles) ... */

    </style>
</head>
<body>
    <span class="preheader">Congratulations! Your application for admission has been approved. We're excited to welcome you to [Your School Name].</span>
    <table class="email-wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td align="center">
                <table class="email-content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                        <td class="email-masthead">
                            <a href="https://kdscnm.edu.ng" class="f-fallback email-masthead_name">
                                <img src="{{ asset('/assets/img/logo.png') }}" alt="School Banner" class="email-masthead_logo">
                            </a>
                        </td>
                    </tr>
                    <!-- Email Body -->
                    <tr>
                        <td class="email-body" width="570" cellpadding="0" cellspacing="0">
                            <table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                                <!-- Body content -->
                                <tr>
                                    <td class="content-cell">
                                        <div class="f-fallback">
                                            <h1>Congratulations, {{ $name }}!</h1>
                                            <p>We are pleased to inform you that your application for admission to [Course Name] at Kaduna State College of Nursing and Midwifery has been approved.!</p>
                                            <p>Your next steps:</p>
                                            <ol>
                                                <li>Complete the registration process by logging in to the portal using the provided credentials.</li>
                                                <li>Review the admission documents and requirements on the portal.</li>
                                                <li>If you have any questions or need assistance, feel free to contact our admissions office at [Admissions Office Email/Phone].</li>
                                            </ol>
                                            <!-- Action -->
                                            <table class="body-action" align="center" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                                                <tr>
                                                    <td align="center">

                                                    </td>
                                                </tr>
                                            </table>
                                            <p>For your reference, here are your login details:</p>
                                            <table class="attributes" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                                                <tr>
                                                    <td class="attributes_content">
                                                        <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                                                            <tr>
                                                                <td class="attributes_item">
                                                                    <span class="f-fallback">
                                                                        <strong>Username:</strong> [Username]
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="attributes_item">
                                                                    <span class="f-fallback">
                                                                        <strong>Password:</strong> [Password]
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <p>Best regards,
                                                <br>Admissions Office</p>
                                            <!-- Sub copy -->
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="email-footer" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                                <tr>
                                    <td class="content-cell" align="center">
                                        <p class="f-fallback sub align-center">
                                            KDSCNM @ 2024 All Rights Reserved
                                            <br>Yusuf Dantsoho Memorial Hospital
                                            <br>Kaduna, Kaduna State.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
