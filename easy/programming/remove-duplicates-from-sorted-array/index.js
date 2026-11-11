const removeDuplicates = (nums) => {
    let k = 1;

    for (let i = 1; i < nums.length; i++) {
        if (nums[i] !== nums[k - 1]) {
            nums[k] = nums[i];
            k++;
        }
    }

    return k;

    // Solusi orang:
    // nums.splice(0, nums.length, ...new Set(nums));
    // return nums.length;
}

const nums = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];

const k = removeDuplicates(nums);

console.log(k); // 5
console.log(nums.slice(0, k)); // [0, 1, 2, 3, 4]