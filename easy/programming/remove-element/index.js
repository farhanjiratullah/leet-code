const removeElement = (nums, val) => {
    let k = 0;

    for (let i = 0; i < nums.length; i++) {
        if (nums[i] !== val) {
            nums[k] = nums[i];
            k++;
        }
    }

    return k;
}

const nums = [3, 2, 2, 3];

const k = removeElement(nums, 3);

console.log(k, 2); 

const nums2 = [0,1,2,2,3,0,4,2];

const k2 = removeElement(nums2, 2);

console.log(k2, 5);