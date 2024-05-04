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
        Domi::setScript('assets/vendor/domi/plugins/jquery-ui/jquery-ui.js');

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

        Domi::setStyle('assets/vendor/domi/plugins/jquery-ui/jquery-ui.min.css');
        Domi::setStyle('assets/vendor/domi/plugins/jquery-ui/jquery-ui.theme.min.css');
        Domi::setStyle('assets/vendor/domi/plugins/jquery-ui/jquery-ui.structure.min.css');
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
                    'warning' => trans('domi:base.sweetalert.title.warning'),
                    'attention' => trans('domi:base.sweetalert.title.attention'),
                    'permission' => trans('domi:base.sweetalert.title.permission'),
                    'timer' => trans('domi:base.sweetalert.option.timer'),
                    'background' => trans('domi:base.sweetalert.option.background'),
                ],
                'button' => [
                    'realized' => trans('domi:base.sweetalert.button.realized'),
                    'got_it' => trans('domi:base.sweetalert.button.got_it'),
                    'confirm_button' => trans('domi:base.sweetalert.button.ok'),
                    'cancel_button' => trans('domi:base.sweetalert.button.cancel'),
                    'cancel' => trans('domi:base.sweetalert.button.cancel'),
                    'ok' => trans('domi:base.sweetalert.button.ok'),
                ],
                'position' => [
                    'center' => trans('domi:base.sweetalert.option.position.center'),
                    'end' => trans('domi:base.sweetalert.option.position.end'),
                ],
            ],
        ]);
    },
    'datatable' => function () {
        Domi::setScript('assets/vendor/domi/plugins/datatables/datatables.bundle.js');

        if (__('base.direction') == 'rtl') {
            Domi::setStyle('assets/vendor/domi/plugins/datatables/datatables.bundle.rtl.css');
        } else {
            Domi::setStyle('assets/vendor/domi/plugins/datatables/datatables.bundle.css');
        }

        Domi::setLocalize('language', [
            'datatable' => [
                'processing' => trans('domi:base.datatable.processing'),
                'search' => trans('domi:base.datatable.search'),
                'lengthMenu' => trans('domi:base.datatable.lengthMenu'),
                'info' => trans('domi:base.datatable.info'),
                'infoEmpty' => trans('domi:base.datatable.infoEmpty'),
                'infoFiltered' => trans('domi:base.datatable.infoFiltered'),
                'infoPostFix' => trans('domi:base.datatable.infoPostFix'),
                'loadingRecords' => trans('domi:base.datatable.loadingRecords'),
                'zeroRecords' => trans('domi:base.datatable.zeroRecords'),
                'emptyTable' => trans('domi:base.datatable.emptyTable'),
                'paginate' => [
                    'first' => trans('domi:base.datatable.paginate_first'),
                    'previous' => trans('domi:base.datatable.paginate_previous'),
                    'next' => trans('domi:base.datatable.paginate_next'),
                    'last' => trans('domi:base.datatable.paginate_last'),
                ],
            ]
        ]);

        Domi::setLocalize('settings', [
            'datatable' => [
                'limit' => config('domi.page_limit')
            ]
        ]);
    },
    'select2' => function () {
        Domi::setStyle('assets/vendor/domi/plugins/select2/dist/css/select2.min.css');
        Domi::setScript('assets/vendor/domi/plugins/select2/dist/js/select2.full.min.js');

        Domi::setScript('assets/vendor/domi/plugins/select2/dist/js/i18n/' . __('base.lang') . '.js');
    },
    'tree' => function () {
        Domi::setStyle('assets/vendor/domi/plugins/tree/tree.css');
    },
    'md5' => function () {
        Domi::setScript('assets/vendor/domi/plugins/md5/md5.js');
    },
    'cookie' => function () {
        Domi::setScript('assets/vendor/domi/plugins/cookie/src/js.cookie.js');
    },
    'storage' => function () {
        Domi::setScript('assets/vendor/domi/plugins/storage/jquery.storage.min.js');
    },
    'fullscreen' => function () {
        Domi::setScript('assets/vendor/domi/plugins/fullscreen/jquery.fullscreen.js');
    },
    'owl.carousel' => function () {
        Domi::setStyle('assets/vendor/domi/plugins/owl.carousel/owl.carousel.min.css');
        Domi::setStyle('assets/vendor/domi/plugins/owl.carousel/owl.theme.default.min.css');

        Domi::setScript('assets/vendor/domi/plugins/owl.carousel/owl.carousel.min.js');
    },
    'draggable' => function () {
        Domi::setScript('assets/vendor/domi/plugins/draggable/draggable.bundle.js');
    },
    'tinymce' => function () {
        Domi::setScript('assets/vendor/domi/plugins/tinymce/tinymce.bundle.js');
    }

];
