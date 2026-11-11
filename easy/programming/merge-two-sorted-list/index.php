<?php

class ListNode {
    public $val = 0;
    public $next = null;

    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

// Mengubah array menjadi linked list
function arrayToList($array) {
    $dummy = new ListNode();
    $current = $dummy;

    foreach ($array as $value) {
        $current->next = new ListNode($value);
        $current = $current->next;
    }

    return $dummy->next;
}

// Mengubah linked list menjadi array
function listToArray($list) {
    $result = [];

    while ($list !== null) {
        $result[] = $list->val;
        $list = $list->next;
    }

    return $result;
}

// Fungsi utama untuk merge
function mergeTwoSortedList($list1, $list2) {
    $dummy = new ListNode();
    $current = $dummy;

    while ($list1 !== null && $list2 !== null) {
        if ($list1->val <= $list2->val) {
            $current->next = $list1;
            $list1 = $list1->next;
        } else {
            $current->next = $list2;
            $list2 = $list2->next;
        }

        $current = $current->next;
    }

    $current->next = $list1 ?? $list2;

    return $dummy->next;
}

// Test case 1
$list1 = arrayToList([1, 2, 4]);
$list2 = arrayToList([1, 3, 4]);

$result = mergeTwoSortedList($list1, $list2);

var_dump(listToArray($result));

// Test case 2
$list1 = arrayToList([]);
$list2 = arrayToList([]);

$result = mergeTwoSortedList($list1, $list2);

var_dump(listToArray($result));

// Test case 3
$list1 = arrayToList([]);
$list2 = arrayToList([0]);

$result = mergeTwoSortedList($list1, $list2);

var_dump(listToArray($result));