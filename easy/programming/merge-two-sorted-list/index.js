class ListNode {
    constructor(val = 0, next = null) {
        this.val = val;
        this.next = next;
    }
}

// Mengubah array menjadi linked list
function arrayToList(array) {
    const dummy = new ListNode();
    let current = dummy;

    for (const value of array) {
        current.next = new ListNode(value);
        current = current.next;
    }

    return dummy.next;
}

// Mengubah linked list menjadi array
function listToArray(list) {
    const result = [];

    while (list !== null) {
        result.push(list.val);
        list = list.next;
    }

    return result;
}

// Fungsi utama
function mergeTwoLists(list1, list2) {
    const dummy = new ListNode();
    let current = dummy;

    while (list1 !== null && list2 !== null) {
        if (list1.val <= list2.val) {
            current.next = list1;
            list1 = list1.next;
        } else {
            current.next = list2;
            list2 = list2.next;
        }

        current = current.next;
    }

    current.next = list1 ?? list2;

    return dummy.next;
}

// Pengujian
console.log(
    listToArray(
        mergeTwoLists(
            arrayToList([1, 2, 4]),
            arrayToList([1, 3, 4])
        )
    )
);

console.log(
    listToArray(
        mergeTwoLists(
            arrayToList([]),
            arrayToList([])
        )
    )
);

console.log(
    listToArray(
        mergeTwoLists(
            arrayToList([]),
            arrayToList([0])
        )
    )
);