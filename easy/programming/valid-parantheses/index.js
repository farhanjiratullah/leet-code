const isValid = (s) => {
    let stacks = [];
    const brackets = {
        ")": "(",
        "]": "[",
        "}": "{",
    };

    for (let i = 0; i < s.length; i++) {
        let char = s[i];

        if (!brackets[char]) {
            stacks.push(char);
        } else {
            if (stacks.length === 0 || stacks.pop() !== brackets[char]) {
                return false;
            }
        }
    }

    return stacks.length === 0;
}

console.log(isValid("()"));      // true
console.log(isValid("()[]{}"));  // true
console.log(isValid("(]"));      // false
console.log(isValid("([])"));    // true
console.log(isValid("([)]"));    // false