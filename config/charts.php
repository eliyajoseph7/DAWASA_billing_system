<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default library used in charts.
    |--------------------------------------------------------------------------
    |
    | This value is used as the default chart library used when creating
    | any chart in the command line. Feel free to modify it or set it up
    | while creating the chart to ignore this value.
    |
    */
    'default_library' => 'Chartjs',
    'default' => [
        'type' => 'line', // The default chart type.
        'library' => 'highcharts', // The default chart library.
        'element_label' => 'Element', // The default chart element label.
        'empty_dataset_label' => 'No Data Set',
        'empty_dataset_value' => 0,
        'title' => 'My Cool Chart', // Default chart title.
        'height' => 400, // 0 Means it will take 100% of the division height.
        'width' => 500, // 0 Means it will take 100% of the division width.
        'responsive' => false, // Not recommended since all libraries have diferent sizes.
        'background_color' => 'inherit', // The chart division background color.
        'colors' => [], // Default chart colors if using no template is set.
        'one_color' => false, // Only use the first color in all values.
        'template' => 'material', // The default chart color template.
        'legend' => true, // Whether to enable the chart legend (where applicable).
        'x_axis_title' => false, // The title of the x-axis
        'y_axis_title' => null, // The title of the y-axis (When set to null will use element_label value).
        'loader' => [
            'active' => true, // Determines the if loader is active by default.
            'duration' => 500, // In milliseconds.
            'color' => '#000000', // Determines the default loader color.
        ],
    ],

];
