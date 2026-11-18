const lengthOfLastWord = (s = "") => {
    const trimAndSplit = s.trim().split(' ');
    const countStr = trimAndSplit.length;
    const lengthLastWord = trimAndSplit[countStr - 1].length;

    return lengthLastWord;

    // Solusi ChatGPT:
    // let length = 0;
    // let i = s.length - 1;

    // // Lewati spasi di akhir string
    // while (i >= 0 && s[i] === ' ') {
    //     i--;
    // }

    // // Hitung panjang kata terakhir
    // while (i >= 0 && s[i] !== ' ') {
    //     length++;
    //     i--;
    // }

    // return length;
}

console.log(lengthOfLastWord('Hello World'),'5');
console.log(lengthOfLastWord('   fly me   to   the moon  '),'4');
console.log(lengthOfLastWord('luffy is still joyboy'),'6');