<?php

use JobMetric\Domi\Enums\ScriptPositionEnum;
use JobMetric\Domi\Facades\Domi;

return [

    /*
    |--------------------------------------------------------------------------
    | Plugins
    |--------------------------------------------------------------------------
    |
    | This option controls the plugins that will be loaded on the page.
    |
    */

    'jquery' => function () {
        Domi::setScript('assets/vendor/domi/plugins/jquery/jquery.min.js', position: ScriptPositionEnum::TOP());
    },
    'jquery.form' => function () {
        Domi::setScript('assets/vendor/domi/plugins/jquery.form/jquery.form.min.js');
    },
    'jquery.ui' => function () {
        Domi::setScript('assets/vendor/domi/plugins/jquery-ui/jquery-ui.min.js');

        Domi::setStyle('assets/vendor/domi/plugins/jquery-ui-bootstrap/jquery.ui.ie.css');
        Domi::setStyle('assets/vendor/domi/plugins/jquery-ui-bootstrap/jquery-ui.css');

        Domi::setStyle('assets/vendor/domi/plugins/datetime/jquery-ui-timepicker-addon.css');
        Domi::setScript('assets/vendor/domi/plugins/datetime/jquery-ui-timepicker-addon.js');
        Domi::setScript('assets/vendor/domi/plugins/datetime/jquery-ui-timepicker-addon-i18n.js');

        if (session()->get('calendar') == 'jalali') {
            Domi::setScript('assets/vendor/domi/plugins/datetime/jalali.js');
        }
    },
    'jquery.ui.theme' => function () {
        Domi::setPlugins('jquery-ui');

        Domi::setStyle('assets/vendor/domi/plugins/jquery-ui/jquery-ui.theme.min.css');
        Domi::setStyle('assets/vendor/domi/plugins/jquery-ui/jquery-ui.structure.min.css');
    },
    'jquery.contextmenu' => function () {
        Domi::setScript('assets/vendor/domi/plugins/contextmenu/jquery.contextMenu.js');
        Domi::setScript('assets/vendor/domi/plugins/contextmenu/jquery.ui.position.js');

        if (__('base.direction') == 'rtl') {
            Domi::setStyle('assets/vendor/domi/plugins/contextmenu/jquery.contextMenu.rtl.css');
        } else {
            Domi::setStyle('assets/vendor/domi/plugins/contextmenu/jquery.contextMenu.css');
        }
    },
    'sweetalert' => function () {
        Domi::setScript('assets/vendor/domi/plugins/sweetalert2/dist/sweetalert2.min.js');
        Domi::setScript('assets/vendor/domi/plugins/sweetalert2/dist/sweetalert2.init.js');

        if (__('base.direction') == 'rtl') {
            Domi::setStyle('assets/vendor/domi/plugins/sweetalert2/dist/sweetalert2.rtl.min.css');
        } else {
            Domi::setStyle('assets/vendor/domi/plugins/sweetalert2/dist/sweetalert2.min.css');
        }

        Domi::setLocalize('language', [
            'sweetalert' => [
                'title' => [
                    'warning' => trans('domi::sweetalert.title.warning'),
                    'attention' => trans('domi::sweetalert.title.attention'),
                    'permission' => trans('domi::sweetalert.title.permission'),
                ],
                'button' => [
                    'realized' => trans('domi::sweetalert.button.realized'),
                    'got_it' => trans('domi::sweetalert.button.got_it'),
                    'cancel' => trans('domi::sweetalert.button.cancel'),
                    'ok' => trans('domi::sweetalert.button.ok'),
                ],
            ],
        ]);
    },
    'datatable' => function () {
        Domi::setScript('assets/vendor/domi/plugins/datatables/datatables.bundle.min.js');

        if (__('domi::base.direction') == 'rtl') {
            Domi::setStyle('assets/vendor/domi/plugins/datatables/datatables.bundle.rtl.min.css');
        } else {
            Domi::setStyle('assets/vendor/domi/plugins/datatables/datatables.bundle.min.css');
        }

        Domi::setLocalize('language', [
            'datatable' => [
                'processing' => trans('domi::datatable.processing'),
                'search' => trans('domi::datatable.search'),
                'lengthMenu' => trans('domi::datatable.lengthMenu'),
                'info' => trans('domi::datatable.info'),
                'infoEmpty' => trans('domi::datatable.infoEmpty'),
                'infoFiltered' => trans('domi::datatable.infoFiltered'),
                'infoPostFix' => trans('domi::datatable.infoPostFix'),
                'loadingRecords' => trans('domi::datatable.loadingRecords'),
                'zeroRecords' => trans('domi::datatable.zeroRecords'),
                'emptyTable' => trans('domi::datatable.emptyTable'),
                'paginate' => [
                    'first' => trans('domi::datatable.paginate_first'),
                    'previous' => trans('domi::datatable.paginate_previous'),
                    'next' => trans('domi::datatable.paginate_next'),
                    'last' => trans('domi::datatable.paginate_last'),
                ],
            ]
        ]);

        Domi::setLocalize('settings', [
            'datatable' => [
                // @todo: Add more settings
                'limit' => config('domi.page_limit')
            ]
        ]);
    },
    'select2' => function () {
        Domi::setStyle('assets/vendor/domi/plugins/select2/dist/css/select2.min.css');
        Domi::setScript('assets/vendor/domi/plugins/select2/dist/js/select2.full.min.js');

        Domi::setScript('assets/vendor/domi/plugins/select2/dist/js/i18n/' . __('domi::base.lang') . '.js');
    },
    'tree' => function () {
        Domi::setStyle('assets/vendor/domi/plugins/tree/tree.css');
    },
    'md5' => function () {
        Domi::setScript('assets/vendor/domi/plugins/md5/md5.js');
    },
    'cookie' => function () {
        Domi::setScript('assets/vendor/domi/plugins/cookie/cookie.js');
    },
    'storage' => function () {
        Domi::setScript('assets/vendor/domi/plugins/storage/jquery.storage.min.js');
    },
    'fullscreen' => function () {
        Domi::setScript('assets/vendor/domi/plugins/fullscreen/jquery.fullscreen.js');
    },
    'owl.carousel' => function () {
        Domi::setStyle('assets/vendor/domi/plugins/owl.carousel/assets/owl.carousel.min.css');
        Domi::setStyle('assets/vendor/domi/plugins/owl.carousel/assets/owl.theme.default.min.css');

        Domi::setScript('assets/vendor/domi/plugins/owl.carousel/owl.carousel.min.js');
    },
    'tinymce' => function () {
        Domi::setScript('assets/vendor/domi/plugins/tinymce/tinymce.bundle.js');
    },
];
