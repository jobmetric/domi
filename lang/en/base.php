<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Base Domi Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during Domi for
    | various messages that we need to display to the user.
    |
    */

    'direction' => 'ltr',
    'lang' => 'en',

    'sweetalert' => [
        'title'  => [
            'warning'    => 'Warning',
            'attention'  => 'Attention',
            'permission' => 'Inaccessibility',
        ],
        'button' => [
            'got_it'   => 'Got in',
            'realized' => 'Realized',
            'ok'       => 'Ok',
            'cancel'   => 'Cancel',
        ],
        'option' => [
            'timer'      => '2500',
            'background' => 'white',
            'position'   => [
                'center' => 'top-center',
                'end'    => 'top-end',
            ],
        ],
        'text'   => [
            'delete_record'         => 'Do you want to delete this record?',
            'success_delete_record' => 'The record was successfully deleted, click the save button to finish.',
        ],
    ],

    'datatable' => [
        'processing'        => 'Loading...',
        'search'            => 'Search: ',
        'lengthMenu'        => 'Number : _MENU_',
        'info'              => 'Count _START_ to _END_ from _TOTAL_',
        'infoEmpty'         => 'There is nothing to show',
        'infoFiltered'      => '',
        'infoPostFix'       => '',
        'loadingRecords'    => 'Loading...',
        'zeroRecords'       => 'Your search returned no results',
        'emptyTable'        => 'No data available',
        'paginate_first'    => '<<',
        'paginate_previous' => '<',
        'paginate_next'     => '>',
        'paginate_last'     => '>>',
    ],

];
