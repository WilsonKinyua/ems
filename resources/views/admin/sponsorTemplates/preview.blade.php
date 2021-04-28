
@extends('layout.admin')

@section('title')
Sponsor || Preview Template - {{ trans('panel.site_title') }}
@endsection

@section('content')


<div class="layout-px-spacing">

    <div class="row layout-top-spacing" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
             <!-- Page Header -->
            <div class="page-header">
                <div class="page-header-1">
                    <h1 class="main-content-title tx-30">Sponsor / Preview Template</h1>
                </div>
            </div>

            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <a class="btn btn-success btn-lg" href="{{ route('admin.sponsor-templates.edit',$template->id) }}">
                        Edit Template
                    </a>
                    {{-- <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#sponsorsModal">
                        Send Mail
                    </button> --}}
                    <a class="btn btn-warning btn-lg" href="{{ route('admin.sponsor-send.page',$template->id)}}">Send Mail</a>
                     {{-- @include('modals.sponsors') --}}

                </div>
            </div>
        </div>
    </div>

    <div class="widget-content widget-content-area br-6">
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    {{-- <div class="">
                        Email Preview
                    </div> --}}
                    <div class=>

                        <div class="es-wrapper-color" style="background-color:#BDC8C8">

                            <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0"
                            style=" mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;background-color:#BDC8C8">
                            <tr style="">
                              <td class="es-m-margin" valign="top" style="padding:0;">
                                <table class="es-header" cellspacing="0" cellpadding="0" align="center"
                                  style="margin-top:60px; mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top">
                                  <tr>
                                    <td align="center" style="padding:0;Margin:0">
                                      <table class="es-header-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center"
                                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:790px">
                                        <tr>
                                          <td align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px">
                                            <!--[if mso]><table style="width:750px" cellpadding="0" cellspacing="0"><tr><td style="width:270px" valign="top"><![endif]-->
                                            <table cellpadding="0" cellspacing="0" class="es-left" align="left"
                                              style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                                              <tr>
                                                <td class="es-m-p0r es-m-p20b" align="center" style="padding:0;Margin:0;width:250px">
                                                  <table cellpadding="0" cellspacing="0" width="100%" role="presentation"
                                                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                    <tr>
                                                      <td align="left" style="padding:0;Margin:0">
                                                        <p
                                                          style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'times new roman', times, baskerville, georgia, serif;line-height:21px;color:#333333;font-size:14px">
                                                          <br></p>
                                                      </td>
                                                    </tr>
                                                  </table>
                                                </td>
                                                <td class="es-hidden" style="padding:0;Margin:0;width:20px"></td>
                                              </tr>
                                            </table>
                                            <!--[if mso]></td><td style="width:230px" valign="top"><![endif]-->
                                            <table cellpadding="0" cellspacing="0" class="es-left" align="left"
                                              style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                                              <tr>
                                                <td class="es-m-p20b" align="center" style="padding:0;Margin:0;width:230px">
                                                  <table cellpadding="0" cellspacing="0" width="100%" role="presentation"
                                                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                    <tr>
                                                      <td align="center" style="padding:0;Margin:0;font-size:0px"><img class="adapt-img"
                                                          src="{{ asset($template->logo) }}"
                                                          alt
                                                          style="width:200px; height:63px; display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"
                                                          width="230" height="129"></td>
                                                    </tr>
                                                  </table>
                                                </td>
                                              </tr>
                                            </table>
                                            <!--[if mso]></td><td style="width:20px"></td><td style="width:230px" valign="top"><![endif]-->
                                            <table cellpadding="0" cellspacing="0" class="es-right" align="right"
                                              style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
                                              <tr>
                                                <td align="center" style="padding:0;Margin:0;width:230px">
                                                  <table cellpadding="0" cellspacing="0" width="100%" role="presentation"
                                                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                    <tr>
                                                      <td align="left" style="padding:0;Margin:0">
                                                        <p
                                                          style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'times new roman', times, baskerville, georgia, serif;line-height:21px;color:#333333;font-size:14px">
                                                          <br></p>
                                                      </td>
                                                    </tr>
                                                  </table>
                                                </td>
                                              </tr>
                                            </table>
                                            <!--[if mso]></td></tr></table><![endif]-->
                                          </td>
                                        </tr>
                                        <tr>
                                          <td align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px">
                                            <table cellspacing="0" cellpadding="0" width="100%"
                                              style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                              <tr>
                                                <td class="es-m-p0r" valign="top" align="center" style="padding:0;Margin:0;width:750px">
                                                  <table width="100%" cellspacing="0" cellpadding="0" role="presentation"
                                                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                    <tr>
                                                      <td align="left" style="padding:0;Margin:0;padding-left:10px">
                                                        <p
                                                          style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'times new roman', times, baskerville, georgia, serif;line-height:21px;color:#000000;font-size:14px">
                                                        {{ $template->date }}<br>
                                                        {!! $template->address !!}
                                                          <br>Dear Madam/Sir,</p>
                                                      </td>
                                                    </tr>
                                                  </table>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </table>
                                    </td>
                                  </tr>
                                </table>
                                <table class="es-content" cellspacing="0" cellpadding="0" align="center"
                                  style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
                                  <tr>
                                    <td align="center" style="padding:0;Margin:0">
                                      <table class="es-content-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center"
                                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:790px">
                                        <tr>
                                          <td align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px">
                                            <table width="100%" cellspacing="0" cellpadding="0"
                                              style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                              <tr>
                                                <td valign="top" align="center" style="padding:0;Margin:0;width:750px">
                                                  <table width="100%" cellspacing="0" cellpadding="0" role="presentation"
                                                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                    <tr>
                                                      <td align="left" style="padding:0;Margin:0;padding-left:10px">
                                                        <p
                                                          style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'times new roman', times, baskerville, georgia, serif;line-height:24px;color:#333333;font-size:16px">
                                                          <strong><u>REF:&nbsp; {!! $template->ref !!}</u></strong></p>
                                                      </td>
                                                    </tr>
                                                  </table>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </table>
                                    </td>
                                  </tr>
                                </table>
                                <table class="es-footer" cellspacing="0" cellpadding="0" align="center"
                                  style="margin-bottom:60px !important; mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top">
                                  <tr>
                                    <td align="center" style="padding:0;Margin:0">
                                      <table class="es-footer-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center"
                                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:790px">
                                        <tr>
                                          <td align="left" style="padding:30px;Margin:0">
                                            <table cellpadding="0" cellspacing="0" width="100%"
                                              style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                              <tr>
                                                <td align="center" valign="top" style="padding:0;Margin:0;width:730px">
                                                  <table cellpadding="0" cellspacing="0" width="100%" role="presentation"
                                                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                    <tr>
                                                      <td align="left" style="padding:0;Margin:0">
                                                        <p
                                                          style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'times new roman', times, baskerville, georgia, serif;line-height:21px;color:#000000;font-size:14px">
                                                          {!! $template->body !!}
                                                        </p>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" style="padding:10px;Margin:0"><span class="es-button-border"
                                                          style="border-style:solid;border-color:transparent;background:#333333;border-width:0px 0px 2px 0px;display:inline-block;border-radius:10px;width:auto"><a
                                                            href="#" class="es-button es-button-1" target="_blank"
                                                            style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:16px;border-style:solid;border-color:#333333;border-width:5px 20px;display:inline-block;background:#333333;border-radius:10px;font-family:'times new roman', times, baskerville, georgia, serif;font-weight:normal;font-style:normal;line-height:19px;width:auto;text-align:center">
                                                            View Attachment
                                                          </a></span></td>
                                                    </tr>
                                                  </table>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td align="left" style="padding:30px;Margin:0">
                                            <!--[if mso]><table style="width:730px" cellpadding="0" cellspacing="0"><tr><td style="width:259px" valign="top"><![endif]-->
                                            <table cellpadding="0" cellspacing="0" class="es-left" align="left"
                                              style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                                              <tr>
                                                <td class="es-m-p0r es-m-p20b" align="center" style="padding:0;Margin:0;width:239px">
                                                  <table cellpadding="0" cellspacing="0" width="100%"
                                                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;border-radius:24px"
                                                    role="presentation">
                                                    <tr>
                                                        <td align="left" style="padding:0;Margin:0;font-size:0px"><img class="adapt-img"
                                                            src="{{ asset($template->signature) }}"
                                                            alt
                                                            style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"
                                                            width="100" height="40"></td>
                                                      </tr>
                                                    <tr>
                                                      <td align="left" style="padding:0;Margin:0">
                                                        <p
                                                          style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'times new roman', times, baskerville, georgia, serif;line-height:21px;color:#333333;font-size:14px">
                                                          <strong>{{ $template->name }}<br>{{ $template->company_organisation }}</strong></p>
                                                      </td>
                                                    </tr>
                                                  </table>
                                                </td>
                                                <td class="es-hidden" style="padding:0;Margin:0;width:20px"></td>
                                              </tr>
                                            </table>
                                            <!--[if mso]></td><td style="width:226px" valign="top"><![endif]-->
                                            <table cellpadding="0" cellspacing="0" class="es-left" align="left"
                                              style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                                              <tr>
                                                <td class="es-m-p20b" align="center" style="padding:0;Margin:0;width:226px">
                                                  <table cellpadding="0" cellspacing="0" width="100%" role="presentation"
                                                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                    <tr>
                                                      <td align="left" style="padding:0;Margin:0">
                                                        <p
                                                          style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'times new roman', times, baskerville, georgia, serif;line-height:21px;color:#333333;font-size:14px">
                                                          <br></p>
                                                      </td>
                                                    </tr>
                                                  </table>
                                                </td>
                                              </tr>
                                            </table>
                                            <!--[if mso]></td><td style="width:20px"></td><td style="width:225px" valign="top"><![endif]-->
                                            <table cellpadding="0" cellspacing="0" class="es-right" align="right"
                                              style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
                                              <tr>
                                                <td align="center" style="padding:0;Margin:0;width:225px">
                                                  <table cellpadding="0" cellspacing="0" width="100%" role="presentation"
                                                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                    <tr>
                                                      <td align="left" style="padding:0;Margin:0">
                                                        <p
                                                          style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'times new roman', times, baskerville, georgia, serif;line-height:21px;color:#333333;font-size:14px">
                                                          <br></p>
                                                      </td>
                                                    </tr>
                                                  </table>
                                                </td>
                                              </tr>
                                            </table>
                                            <!--[if mso]></td></tr></table><![endif]-->
                                          </td>
                                        </tr>
                                        <tr>
                                          <td align="left" style="padding:5px;Margin:0">
                                            <table cellpadding="0" cellspacing="0" width="100%"
                                              style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                              <tr>
                                                <td class="es-m-p0r" align="center" style="padding:0;Margin:0;width:780px">
                                                  <table cellpadding="0" cellspacing="0" width="100%" role="presentation"
                                                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                    <tr>
                                                      <td align="left"
                                                        style="Margin:0;padding-top:5px;padding-bottom:5px;padding-right:5px;padding-left:15px">
                                                        <p
                                                          style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'times new roman', times, baskerville, georgia, serif;line-height:18px;color:#000000;font-size:12px">
                                                          {{ $template->phone_number }}<br>{{ $template->email }}<br>{{ $template->website_link }}</p>
                                                      </td>
                                                    </tr>
                                                  </table>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </table>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                          </div>

                        </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

