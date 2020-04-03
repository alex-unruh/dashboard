<?php

return [
    /**
     * Defines whether visits from authenticated users should be recorded
     */
    "register_authenticated" => true,

    /**
     * Defines the minimum number of hours to be displayed in the visits graph per day
     */
    "min_hours_to_display" => 12,

    /**
     * Defines the minimum number of days to be displayed in the visits graph per month
     */
    "min_days_to_display" => 15,
    
    /**
     * Defines the minimum number of days to be displayed in the visits graph per month
     */
    "min_months_to_display" => 12,

    /**
     * Defines the labels for the months to be displayed in the visits category by year
     */
    "months" => [
        1 => 'jan', 2 => 'fev', 3 => 'mar', 4 => 'abr', 5 => 'mai', 6 => 'jun',
        7 => 'jul', 8 => 'ago', 9 => 'set', 10 => 'out', 11 => 'nov', 12 => 'dez'
    ]
];
