<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->data = [
            'layouts'=> 'vertical',
            'sublayouts'=> '',
            'darktheme'=> 'false',
            'rtltheme'=> 'false',
            'bodyclass'=> '',
            'menuclass'=> '',
            'headerclass'=> ''
        ];
    }

    public function auth_change_password_3() { return view('html.auth-change-password-3', $this->data); }
    public function auth_change_password_img_side() { return view('html.auth-change-password-img-side', $this->data); }
    public function auth_change_password() { return view('html.auth-change-password', $this->data); }
    public function auth_lockscreen() { return view('html.auth-lockscreen', $this->data); }
    public function auth_profile_settings() { return view('html.auth-profile-settings', $this->data); }
    public function auth_reset_password_3() { return view('html.auth-reset-password-3', $this->data); }
    public function auth_reset_password_img_side() { return view('html.auth-reset-password-img-side', $this->data); }
    public function auth_reset_password() { return view('html.auth-reset-password', $this->data); }
    public function auth_signin_3() { return view('html.auth-signin-3', $this->data); }
    public function auth_signin_img_side() { return view('html.auth-signin-img-side', $this->data); }
    public function auth_signin() { return view('html.auth-signin', $this->data); }
    public function auth_signup_3_temp() { return view('html.auth-signup-3-temp', $this->data); }
    public function auth_signup_3() { return view('html.auth-signup-3', $this->data); }
    public function auth_signup_img_side() { return view('html.auth-signup-img-side', $this->data); }
    public function auth_signup() { return view('html.auth-signup', $this->data); }
    public function auth_tabs() { return view('html.auth-tabs', $this->data); }

    public function ac_datepicker_componant() { return view('html.ac-datepicker-componant', $this->data); }
    public function ac_alert() { return view('html.ac_alert', $this->data); }
    public function ac_lightbox() { return view('html.ac_lightbox', $this->data); }
    public function ac_notification() { return view('html.ac_notification', $this->data); }
    public function ac_pnotify() { return view('html.ac_pnotify', $this->data); }
    public function ac_rangeslider() { return view('html.ac_rangeslider', $this->data); }
    public function ac_rating() { return view('html.ac_rating', $this->data); }
    public function ac_syntax_highlighter() { return view('html.ac_syntax_highlighter', $this->data); }
    public function bc_alert() { return view('html.bc_alert', $this->data); }
    public function bc_badges() { return view('html.bc_badges', $this->data); }
    public function bc_breadcrumb_pagination() { return view('html.bc_breadcrumb-pagination', $this->data); }
    public function bc_button() { return view('html.bc_button', $this->data); }
    public function bc_card() { return view('html.bc_card', $this->data); }
    public function bc_carousel() { return view('html.bc_carousel', $this->data); }
    public function bc_collapse() { return view('html.bc_collapse', $this->data); }
    public function bc_color() { return view('html.bc_color', $this->data); }
    public function bc_extra() { return view('html.bc_extra', $this->data); }
    public function bc_grid() { return view('html.bc_grid', $this->data); }
    public function bc_list_group() { return view('html.bc_list-group', $this->data); }
    public function bc_modal() { return view('html.bc_modal', $this->data); }
    public function bc_progress() { return view('html.bc_progress', $this->data); }
    public function bc_spinner() { return view('html.bc_spinner', $this->data); }
    public function bc_tabs() { return view('html.bc_tabs', $this->data); }
    public function bc_toasts() { return view('html.bc_toasts', $this->data); }
    public function bc_tooltip_popover() { return view('html.bc_tooltip-popover', $this->data); }
    public function bc_typography() { return view('html.bc_typography', $this->data); }
    public function chart_apex() { return view('html.chart-apex', $this->data); }
    public function chart_chartjs() { return view('html.chart-chartjs', $this->data); }
    public function chart_highchart() { return view('html.chart-highchart', $this->data); }
    public function chart_knob() { return view('html.chart-knob', $this->data); }
    public function chart_peity() { return view('html.chart-peity', $this->data); }
    public function crypto_dashboard() { return view('html.crypto-dashboard', $this->data); }
    public function crypto_exchange() { return view('html.crypto-exchange', $this->data); }
    public function crypto_history() { return view('html.crypto-history', $this->data); }
    public function crypto_ico_listing() { return view('html.crypto-ico-listing', $this->data); }
    public function crypto_initial_coin() { return view('html.crypto-initial-coin', $this->data); }
    public function crypto_trading() { return view('html.crypto-trading', $this->data); }
    public function crypto_transactions() { return view('html.crypto-transactions', $this->data); }
    public function crypto_wallet() { return view('html.crypto-wallet', $this->data); }
    public function dashboard_analytics() { return view('html.dashboard-analytics', $this->data); }
    public function dt_advance() { return view('html.dt_advance', $this->data); }
    public function dt_api() { return view('html.dt_api', $this->data); }
    public function dt_basic() { return view('html.dt_basic', $this->data); }
    public function dt_ext_autofill() { return view('html.dt_ext_autofill', $this->data); }
    public function dt_ext_basic_buttons() { return view('html.dt_ext_basic_buttons', $this->data); }
    public function dt_ext_col_reorder() { return view('html.dt_ext_col_reorder', $this->data); }
    public function dt_ext_export_buttons() { return view('html.dt_ext_export_buttons', $this->data); }
    public function dt_ext_fixed_columns() { return view('html.dt_ext_fixed_columns', $this->data); }
    public function dt_ext_fixed_header() { return view('html.dt_ext_fixed_header', $this->data); }
    public function dt_ext_key_table() { return view('html.dt_ext_key_table', $this->data); }
    public function dt_ext_responsive() { return view('html.dt_ext_responsive', $this->data); }
    public function dt_ext_row_reorder() { return view('html.dt_ext_row_reorder', $this->data); }
    public function dt_ext_scroller() { return view('html.dt_ext_scroller', $this->data); }
    public function dt_ext_select() { return view('html.dt_ext_select', $this->data); }
    public function dt_plugin() { return view('html.dt_plugin', $this->data); }
    public function dt_sources() { return view('html.dt_sources', $this->data); }
    public function dt_styling() { return view('html.dt_styling', $this->data); }
    public function ecom_cart() { return view('html.ecom-cart', $this->data); }
    public function ecom_checkout() { return view('html.ecom-checkout', $this->data); }
    public function ecom_customers() { return view('html.ecom-customers', $this->data); }
    public function ecom_order() { return view('html.ecom-order', $this->data); }
    public function ecom_product_details() { return view('html.ecom-product-details', $this->data); }
    public function ecom_product_list() { return view('html.ecom-product-list', $this->data); }
    public function ecom_product() { return view('html.ecom-product', $this->data); }
    public function ecom_sellers() { return view('html.ecom-sellers', $this->data); }
    public function editor_balloon() { return view('html.editor-balloon', $this->data); }
    public function editor_classic() { return view('html.editor-classic', $this->data); }
    public function editor_document() { return view('html.editor-document', $this->data); }
    public function editor_inline() { return view('html.editor-inline', $this->data); }
    public function editor_trumbowyg() { return view('html.editor-trumbowyg', $this->data); }
    public function email_v2() { return view('html.email-v2', $this->data); }
    public function email_compose() { return view('html.email_compose', $this->data); }
    public function email_inbox() { return view('html.email_inbox', $this->data); }
    public function email_read() { return view('html.email_read', $this->data); }
    public function file_upload() { return view('html.file-upload', $this->data); }
    public function form_elements_advance() { return view('html.form-elements-advance', $this->data); }
    public function form_masking() { return view('html.form-masking', $this->data); }
    public function form_picker() { return view('html.form-picker', $this->data); }
    public function form_select() { return view('html.form-select', $this->data); }
    public function form_validation() { return view('html.form-validation', $this->data); }
    public function form_wizard() { return view('html.form-wizard', $this->data); }
    public function form2_autosize() { return view('html.form2_autosize', $this->data); }
    public function form2_basic() { return view('html.form2_basic', $this->data); }
    public function form2_checkbox() { return view('html.form2_checkbox', $this->data); }
    public function form2_choices() { return view('html.form2_choices', $this->data); }
    public function form2_clipboard() { return view('html.form2_clipboard', $this->data); }
    public function form2_datepicker() { return view('html.form2_datepicker', $this->data); }
    public function form2_daterangepicker() { return view('html.form2_daterangepicker', $this->data); }
    public function form2_flu_uppy() { return view('html.form2_flu-uppy', $this->data); }
    public function form2_input_group() { return view('html.form2_input_group', $this->data); }
    public function form2_inputmask() { return view('html.form2_inputmask', $this->data); }
    public function form2_lay_actionbars() { return view('html.form2_lay-actionbars', $this->data); }
    public function form2_lay_default() { return view('html.form2_lay-default', $this->data); }
    public function form2_lay_multicolumn() { return view('html.form2_lay-multicolumn', $this->data); }
    public function form2_lay_stickyactionbars() { return view('html.form2_lay-stickyactionbars', $this->data); }
    public function form2_markdown() { return view('html.form2_markdown', $this->data); }
    public function form2_megaoption() { return view('html.form2_megaoption', $this->data); }
    public function form2_multipleselectsplitter() { return view('html.form2_multipleselectsplitter', $this->data); }
    public function form2_nouislider() { return view('html.form2_nouislider', $this->data); }
    public function form2_quill() { return view('html.form2_quill', $this->data); }
    public function form2_radio() { return view('html.form2_radio', $this->data); }
    public function form2_rangeslider() { return view('html.form2_rangeslider', $this->data); }
    public function form2_recaptcha() { return view('html.form2_recaptcha', $this->data); }
    public function form2_repeater() { return view('html.form2_repeater', $this->data); }
    public function form2_select() { return view('html.form2_select', $this->data); }
    public function form2_select2() { return view('html.form2_select2', $this->data); }
    public function form2_summernote() { return view('html.form2_summernote', $this->data); }
    public function form2_switch() { return view('html.form2_switch', $this->data); }
    public function form2_switchjs() { return view('html.form2_switchjs', $this->data); }
    public function form2_tagify() { return view('html.form2_tagify', $this->data); }
    public function form2_timepicker() { return view('html.form2_timepicker', $this->data); }
    public function form2_tinymce() { return view('html.form2_tinymce', $this->data); }
    public function form2_touchspin() { return view('html.form2_touchspin', $this->data); }
    public function form2_typeahead() { return view('html.form2_typeahead', $this->data); }
    public function form2_vld_control() { return view('html.form2_vld-control', $this->data); }
    public function form2_vld_states() { return view('html.form2_vld-states', $this->data); }
    public function form2_vld_widgets() { return view('html.form2_vld-widgets', $this->data); }
    public function form_elements() { return view('html.form_elements', $this->data); }
    public function full_calendar() { return view('html.full-calendar', $this->data); }
    public function gallery_grid() { return view('html.gallery-grid', $this->data); }
    public function gallery_masonry() { return view('html.gallery-masonry', $this->data); }
    public function help_create_ticket() { return view('html.help-create-ticket', $this->data); }
    public function help_customer() { return view('html.help-customer', $this->data); }
    public function help_dashboard() { return view('html.help-dashboard', $this->data); }
    public function help_ticket_details() { return view('html.help-ticket-details', $this->data); }
    public function help_ticket() { return view('html.help-ticket', $this->data); }
    public function hospital_dashboard() { return view('html.hospital-dashboard', $this->data); }
    public function hospital_department() { return view('html.hospital-department', $this->data); }
    public function hospital_doctor() { return view('html.hospital-doctor', $this->data); }
    public function hospital_laboratorie() { return view('html.hospital-laboratorie', $this->data); }
    public function hospital_nurse() { return view('html.hospital-nurse', $this->data); }
    public function hospital_patient() { return view('html.hospital-patient', $this->data); }
    public function hospital_pharmacist() { return view('html.hospital-pharmacist', $this->data); }
    public function icon_feather() { return view('html.icon-feather', $this->data); }
    public function icon_fontawsome() { return view('html.icon-fontawsome', $this->data); }
    public function icon_material() { return view('html.icon-material', $this->data); }
    public function image_crop() { return view('html.image_crop', $this->data); }
    public function index() { return view('html.index', $this->data); }
    public function invoice_list() { return view('html.invoice-list', $this->data); }
    public function invoice_summary() { return view('html.invoice-summary', $this->data); }
    public function invoice() { return view('html.invoice', $this->data); }
    public function landing() { return view('html.landing', $this->data); }
    public function layout_advance() { return view('html.layout-advance', $this->data); }
    public function layout_collapse() { return view('html.layout-collapse', $this->data); }
    public function layout_horizontal() { return view('html.layout-horizontal', $this->data); }
    public function layout_horizontal2() { return view('html.layout-horizontal2', $this->data); }
    public function layout_modern() { return view('html.layout-modern', $this->data); }
    public function layout_navtoggler() { return view('html.layout-navtoggler', $this->data); }
    public function layout_nested() { return view('html.layout-nested', $this->data); }
    public function layout_tab() { return view('html.layout-tab', $this->data); }
    public function layout_topbar() { return view('html.layout-topbar', $this->data); }
    public function maint_error() { return view('html.maint-error', $this->data); }
    public function maint_maintance() { return view('html.maint-maintance', $this->data); }
    public function maint_offline_ui() { return view('html.maint-offline-ui', $this->data); }
    public function map_api() { return view('html.map-api', $this->data); }
    public function map_google() { return view('html.map-google', $this->data); }
    public function member_countries() { return view('html.member-countries', $this->data); }
    public function member_coupons() { return view('html.member-coupons', $this->data); }
    public function member_dashboard() { return view('html.member-dashboard', $this->data); }
    public function member_mail_template() { return view('html.member-mail-template', $this->data); }
    public function member_membership() { return view('html.member-membership', $this->data); }
    public function member_newsletter() { return view('html.member-newsletter', $this->data); }
    public function member_user() { return view('html.member-user', $this->data); }
    public function page_faq() { return view('html.page-faq', $this->data); }
    public function page_faq2() { return view('html.page-faq2', $this->data); }
    public function page_faq3_category() { return view('html.page-faq3-category', $this->data); }
    public function page_faq3_details() { return view('html.page-faq3-details', $this->data); }
    public function page_faq3() { return view('html.page-faq3', $this->data); }
    public function page_invoice_list() { return view('html.page-invoice-list', $this->data); }
    public function page_invoice_summary() { return view('html.page-invoice-summary', $this->data); }
    public function page_invoice() { return view('html.page-invoice', $this->data); }
    public function page_invoice2() { return view('html.page-invoice2', $this->data); }
    public function page_sample() { return view('html.page-sample', $this->data); }
    public function page_usrset_view() { return view('html.page-usrset-view', $this->data); }
    public function page_wizard1() { return view('html.page-wizard1', $this->data); }
    public function page_wizard2() { return view('html.page-wizard2', $this->data); }
    public function page_wizard3() { return view('html.page-wizard3', $this->data); }
    public function sample_page() { return view('html.sample-page', $this->data); }
    public function school_dashboard() { return view('html.school-dashboard', $this->data); }
    public function school_parents() { return view('html.school-parents', $this->data); }
    public function school_student() { return view('html.school-student', $this->data); }
    public function school_teacher() { return view('html.school-teacher', $this->data); }
    public function sis_circular() { return view('html.sis-circular', $this->data); }
    public function sis_course() { return view('html.sis-course', $this->data); }
    public function sis_dashboard() { return view('html.sis-dashboard', $this->data); }
    public function sis_evaluation() { return view('html.sis-evaluation', $this->data); }
    public function sis_event() { return view('html.sis-event', $this->data); }
    public function sis_leave() { return view('html.sis-leave', $this->data); }
    public function task_board() { return view('html.task-board', $this->data); }
    public function task_detail() { return view('html.task-detail', $this->data); }
    public function task_list() { return view('html.task-list', $this->data); }
    public function tbl_bootstrap() { return view('html.tbl_bootstrap', $this->data); }
    public function tbl_border() { return view('html.tbl_border', $this->data); }
    public function tbl_sizing() { return view('html.tbl_sizing', $this->data); }
    public function tbl_styling() { return view('html.tbl_styling', $this->data); }
    public function todo() { return view('html.todo', $this->data); }
    public function user_card() { return view('html.user-card', $this->data); }
    public function user_list() { return view('html.user-list', $this->data); }
    public function user_profile_social() { return view('html.user-profile-social', $this->data); }
    public function user_profile() { return view('html.user-profile', $this->data); }
    public function widget_chart() { return view('html.widget-chart', $this->data); }
    public function widget_data() { return view('html.widget-data', $this->data); }
    public function widget_statistic() { return view('html.widget-statistic', $this->data); }
}
