<?php
    namespace Storage;

    use InvalidArgumentException;

    class Utilities {
        /**
         * This function sort an asosiative array acording with to params: order_by (any key of an array)
         * and a sorting rule (order) that have to be "asc" or "desc".
         * The array minimum have to have this structure:
         * 'key1' => [
         *      'key2' => [
         *          'key3' => 'value',
         *          ...
         *      ],
         *      'order_by' => 'value',
         *      'order' => 'value'
         * ]
         */
        public static function orderAsocArrayByAnyKey (array $array): array {
            $order_by = strtolower($array['order_by']);
            $sorting_rule = strtolower($array['order']);

            if ($sorting_rule === 'asc' || $sorting_rule === 'desc') {
                uasort($array['countries'], function ($a, $b) use ($order_by) {
                    return strcmp($a[$order_by], $b[$order_by]);
                });

                if ($sorting_rule === 'desc') {
                    $array['countries'] = array_reverse($array['countries'], true);
                }
            } else {
                throw new InvalidArgumentException("The value: \"$sorting_rule\" it isn't valid as a sorting role. They must be \"asc\" or \"desc\"");
            }

            return $array;
        }
    }