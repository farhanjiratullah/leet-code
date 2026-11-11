const findTheIndexOfTheFirstOccurence = (haystack, needle) => {
    const position = haystack.indexOf(needle);

    return position;

    // Solusi Manual (ChatGPT)
    // const haystackLength = haystack.length;
    // const needleLength = needle.length;

    // for (let i = 0; i <= haystackLength - needleLength; i++) {
    //     let found = true;

    //     for (let j = 0; j < needleLength; j++) {
    //         if (haystack[i + j] !== needle[j]) {
    //             found = false;
    //             break;
    //         }
    //     }

    //     if (found) {
    //         return i;
    //     }
    // }

    // return -1;
}

console.log(findTheIndexOfTheFirstOccurence('sadbutsad', 'sad'), 0);
console.log(findTheIndexOfTheFirstOccurence('leetcode', 'leeto'), -1);