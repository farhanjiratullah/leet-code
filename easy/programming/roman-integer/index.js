const romanToInt = (s) => {
    const values = {
        I: 1,
        V: 5,
        X: 10,
        L: 50,
        C: 100,
        D: 500,
        M: 1000
    };

    let total = 0;
    const length = s.length;

    for (let i = 0; i < length; i++) {
        let current = values[s[i]];

        if (i + 1 < length && current < values[s[i + 1]]) {
            total -= current
        } else {
            total += current
        }
    }

    return total;
}

console.log(romanToInt('III'));
console.log(romanToInt('LVIII'));
console.log(romanToInt('MCMXCIV'));