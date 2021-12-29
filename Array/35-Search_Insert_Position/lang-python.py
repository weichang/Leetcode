class Solution :
    
    def searchInsert(self,nums,target) :
        
        lo , hi = 0 , len(nums)-1
        
        while (lo <= hi) :
            mid = (lo + hi)//2
            if nums[mid] == target :
                return mid
            elif nums[mid] > target : 
                hi = mid - 1
            else :
                lo = mid + 1
        return lo   
        
nums = [1,3,5,6]
target = 3
c = Solution()
print(c.searchInsert(nums,target))     