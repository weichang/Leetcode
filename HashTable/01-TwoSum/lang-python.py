class Solution:
    
    def twoSum(self, nums, target):
        temMap = {}
        for i in range (len(nums)) :
            if target - nums[i] in temMap :
                return [temMap.get(target - nums[i]),i]
            else :
                temMap[nums[i]] = i
                
        return [-1,-1] 
    

    
nums = [2,7,11,15]
target = 26
c = Solution()
print(c.twoSum(nums,target))