<!DOCTYPE html>
<html lang="en">

<head>
    @include('html.layouts.head')
    <link rel="stylesheet" href="assets/css/plugins/trumbowyg.min.css">
    @include('html.layouts.head-bottom-link')
</head>
@include('html.layouts.layout-vertical')
<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Newsletter</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Membership</a></li>
                            <li class="breadcrumb-item">Newsletter</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- liveline-section start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Email"><small class="text-danger">* </small>Email From</label>
                                    <input type="email" class="form-control" id="Email" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Recipients"><small class="text-danger">* </small>Recipients</label>
                                    <input type="text" class="form-control" id="Recipients" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label" for="Subject">Email Subject</label>
                                    <input type="email" class="form-control" id="Subject" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group fill">
                                    <label class="form-label" for="Attachment">Attachment</label>
                                    <input type="file" class="form-control" id="Attachment" placeholder="sdf">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="label">Description</label>
                            <textarea id="Description-editor">
                                <table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#F0F0F0">
                                    <tbody>
                                        <tr>
                                            <td style="background-color: #ffffff;" align="center" valign="top" bgcolor="#ffffff"><br />
                                                <table style="width: 100%px; max-width: 600px;" border="0" width="100%" cellspacing="0" cellpadding="0">
                                                    <tbody>
                                                        <tr>
                                                            <td height="30"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center">[LOGO]</td>
                                                        </tr>
                                                        <tr>
                                                            <td height="20"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p style="text-align: center; margin: 0; font-family: Helvetica, Arial, sans-serif; font-size: 26px; color: #222222;">Welcome to [COMPANY]</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center">
                                                                <hr>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td height="30"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: #ffffff; padding: 12px 24px 12px 24px;" align="left"><br />
                                                                <p style="font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 600; color: #374550;">Hello, [NAME]</p>
                                                                <p style="font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: left; color: #222222;">You're now a member of [COMPANY]. <br /> Here are your login details. Please keep them in a
                                                                    safe place: </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: #ffffff; padding: 12px 24px 12px 24px;" align="left">
                                                                <p style="font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: left; color: #222222;">Here are your login details. Please keep them in a safe place: <br /> <br /> Username:
                                                                    [USERNAME] or [EMAIL]<br /> Password: [PASSWORD]</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td height="65"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center">
                                                                <table>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="background: #289CDC; padding: 15px 18px; -webkit-border-radius: 4px; border-radius: 4px; font-family: Helvetica, Arial, sans-serif;" align="center" bgcolor="#289CDC"><a target="_blank"
                                                                                    href="[LINK]" style="color: #ffffff; text-decoration: none; font-size: 16px;">Login</a></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td height="65"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border-bottom: 1px solid #DDDDDD;"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td height="25"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;" align="center">
                                                                <table border="0" width="95%" cellspacing="0" cellpadding="0" align="center">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="font-family: Helvetica, Arial, sans-serif;" align="left" valign="top">
                                                                                <p style="text-align: left; color: #999999; font-size: 12px; font-weight: normal; line-height: 20px;">This email is sent to you directly from <a href="http://www.wojoscripts.com/mmp">[COMPANY]</a> The
                                                                                    information above is gathered from the user input. <br /> ©[DATE] <a href="#!">[COMPANY]</a>. All rights reserved.</p>
                                                                            </td>
                                                                            <td width="30"> </td>

                                                                            <td width="16"> </td>

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
                            </textarea>
                        </div>
                        <button class="btn btn-primary"> Send Mail </button>
                        <button class="btn btn-danger"> Clear </button>
                    </div>
                </div>
            </div>
            <!-- liveline-section end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit email template</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<!-- [ Main Content ] end -->
@include('html.layouts.footer')
<!-- Apex Chart -->
<script src="assets/js/plugins/trumbowyg.min.js"></script>

<script>
    $('#Description-editor').trumbowyg({
        svgPath: 'assets/css/plugins/icons.svg'
    });
</script>
@include('html.layouts.footer-bottom-link')
</body>

</html>
