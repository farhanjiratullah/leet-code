// ChatGPT Answer (Vertical Scanning)
const longestCommonPrefix = (strs) => {
    for (let i = 0; i < strs[0].length; i++) {
        const char = strs[0][i];

        for (let j = 1; j < strs.length; j++) {
            if (strs[j][i] !== char) {
                return strs[0].slice(0, i);
            }
        }
    }

    return strs[0];
};

console.log(longestCommonPrefix(["flower", "flow", "flight"])); // fl
console.log(longestCommonPrefix(["dog", "racecar", "car"]));    // ''
console.log(longestCommonPrefix(["interspecies", "interstellar", "interstate"])); // inters

// My Answer convert from php (Horizontal Scanning)
// const longestCommonPrefix = (strs) => {
//     let prefix = strs[0];

//     for (let i = 1; i < strs.length; i++) {
//         while (strs[i].indexOf(prefix) !== 0) {
//             prefix = prefix.slice(0, -1)

//             if (prefix === '') {
//                 return ""
//             }
//         }
//     }

//     return prefix;
// }

// console.log(longestCommonPrefix(["flower", "flow", "flight"]));
// console.log(longestCommonPrefix(["dog", "racecar", "car"]));