@extends('layouts.theme')

@section('title')
      Preview Mail - {{ trans('panel.site_title') }}
@endsection

@section('content')

<div class="container-fluid">
    <div class="inner-body">

        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-1">
                <h1 class="main-content-title tx-30">Speaker</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Preview Template</li>
                </ol>
            </div>
        </div>

        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.speaker-templates.edit',$template->id) }}">
                    Edit Template
                </a>
                <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                    Send
                </button>
                @include('modals.speakers')
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    {{-- <div class="">
                        Email Preview
                    </div> --}}
                    <div class=>

                        <div class="es-wrapper-color" style="background-color:#BDC8C8">

                            <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0"
                              style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;background-color:#BDC8C8">
                              <tr>
                                <td class="es-m-margin" valign="top" style="padding:0;Margin:0">
                                  <table class="es-header" cellspacing="0" cellpadding="0" align="center"
                                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top">
                                    <tr>
                                      <td align="center" style="padding:0;margin:0">
                                        <table class="es-header-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center"
                                          style="margin-top:40px !important; mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:690px">
                                          <tr>
                                            <td align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px">
                                              <!--[if mso]><table style="width:650px" cellpadding="0" cellspacing="0"><tr><td style="width:230px" valign="top"><![endif]-->
                                              <table cellpadding="0" cellspacing="0" class="es-left" align="left"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                                                <tr>
                                                  <td class="es-m-p0r es-m-p20b" align="center" style="padding:0;Margin:0;width:210px">
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
                                              <!--[if mso]></td><td style="width:200px" valign="top"><![endif]-->
                                              <table cellpadding="0" cellspacing="0" class="es-left" align="left"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                                                <tr>
                                                  <td class="es-m-p20b" align="center" style="padding:0;Margin:0;width:200px">
                                                    <table cellpadding="0" cellspacing="0" width="100%" role="presentation"
                                                      style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                      <tr>
                                                        <td align="center" style="padding:0;Margin:0;font-size:0px">
                                                            <img class="adapt-img"
                                                            src="{{ asset($template->logo) }}"
                                                            alt
                                                            style="width:200px; height:63px; display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"
                                                            >
                                                        </td>
                                                      </tr>
                                                    </table>
                                                  </td>
                                                </tr>
                                              </table>
                                              <!--[if mso]></td><td style="width:20px"></td><td style="width:200px" valign="top"><![endif]-->
                                              <table cellpadding="0" cellspacing="0" class="es-right" align="right"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
                                                <tr>
                                                  <td align="center" style="padding:0;Margin:0;width:200px">
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
                                                  <td class="es-m-p0r" valign="top" align="center" style="padding:0;Margin:0;width:650px">
                                                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation"
                                                      style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                      <tr>
                                                        <td align="left" style="padding:0;Margin:0">
                                                          <p
                                                            style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'times new roman', times, baskerville, georgia, serif;line-height:23px;color:#333333;font-size:15px">
                                                            <strong>{{ $template->date }}</strong><br><br>
                                                            {!! $template->address !!}
                                                            <strong>Dear
                                                                Sir/Madam,</strong></p>
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
                                          style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:690px">
                                          <tr>
                                            <td align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px">
                                              <table width="100%" cellspacing="0" cellpadding="0"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                <tr>
                                                  <td valign="top" align="center" style="padding:0;Margin:0;width:650px">
                                                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation"
                                                      style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                      <tr>
                                                        <td align="center" style="padding:0;Margin:0">
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
                                    style="margin-bottom:40px !important; mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top">
                                    <tr>
                                      <td align="center" style="padding:0;Margin:0">
                                        <table class="es-footer-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center"
                                          style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:690px">
                                          <tr>
                                            <td align="left" style="padding:30px;Margin:0">
                                              <table cellpadding="0" cellspacing="0" width="100%"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                <tr>
                                                  <td align="center" valign="top" style="padding:0;Margin:0;width:630px">
                                                    <table cellpadding="0" cellspacing="0" width="100%" role="presentation"
                                                      style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                      <tr>
                                                        <td align="left" style="padding:0;Margin:0">
                                                          <p
                                                            style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'times new roman', times, baskerville, georgia, serif;line-height:23px;color:#333333;font-size:15px">
                                                            {!! $template->body !!}
                                                        </p>
                                                        </td>
                                                      </tr>
                                                    </table>
                                                  </td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td align="left" style="padding:30px;Margin:0">
                                              <!--[if mso]><table style="width:630px" cellpadding="0" cellspacing="0"><tr><td style="width:219px" valign="top"><![endif]-->
                                              <table cellpadding="0" cellspacing="0" class="es-left" align="left"
                                                style=" mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                                                <tr>
                                                  <td class="es-m-p0r es-m-p20b" align="center" style="padding:0;Margin:0;width:199px">
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
                                                            style="Margin:0;-webkit-text-size-adjust:none;
                                                            -ms-text-size-adjust:none;mso-line-height-rule:exactly;
                                                            font-family:'times new roman', times, baskerville, georgia, serif;
                                                            line-height:21px;color:#333333;font-size:14px">
                                                            <strong>
                                                                {{ $template->name }}
                                                                <br>
                                                                {{ $template->company_organisation }}
                                                            </strong></p>
                                                        </td>
                                                      </tr>
                                                    </table>
                                                  </td>
                                                  <td class="es-hidden" style="padding:0;Margin:0;width:20px"></td>
                                                </tr>
                                              </table>
                                              <!--[if mso]></td><td style="width:196px" valign="top"><![endif]-->
                                              <table cellpadding="0" cellspacing="0" class="es-left" align="left"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                                                <tr>
                                                  <td class="es-m-p20b" align="center" style="padding:0;Margin:0;width:196px">
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
                                              <!--[if mso]></td><td style="width:20px"></td><td style="width:195px" valign="top"><![endif]-->
                                              <table cellpadding="0" cellspacing="0" class="es-right" align="right"
                                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
                                                <tr>
                                                  <td align="center" style="padding:0;Margin:0;width:195px">
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
                                                  <td class="es-m-p0r" align="center" style="padding:0;Margin:0;width:680px">
                                                    <table cellpadding="0" cellspacing="0" width="100%" role="presentation"
                                                      style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                      <tr>
                                                        <td align="left" style="padding:5px;Margin:0">
                                                          <p
                                                            style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'times new roman', times, baskerville, georgia, serif;line-height:15px;color:#91b9c0;font-size:14px">
                                                            {{ $template->phone_number }}<br>{{ $template->email }}<br>{{ $template->website_link }}
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
