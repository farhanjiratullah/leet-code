const addBinary = (a, b) => {
    let aLength = a.length - 1;
    let bLength = b.length - 1;

    let result = '';
    let carry = 0;

    while (aLength >= 0 || bLength >= 0 || carry > 0) {
        let sum = carry

        if (aLength >= 0) {
            sum += parseInt(a[aLength]);
            aLength--;
        }

        if (bLength >= 0) {
            sum += parseInt(b[bLength]);
            bLength--;
        }

        result = (sum % 2) + result;
        carry = Math.trunc(sum / 2);
    }

    return result;
}

console.log(addBinary('11', '1'),'100');
console.log(addBinary('1010', '1011'),'10101');