class solution :
    
    def validAnagram(self,s,t) :
        
        if len(s)!=len(t) : return False
        
        counter = {}
        
        for c in s :
            counter[c] = counter.get(c,0) +1
        
        for c in t :
            if c not in counter or counter[c] == 0 :
                return False
            else :
                counter[c] -= 1
        
        return True

s = "anagram"
t = "nagaram" 
c = solution()
print(c.validAnagram(s,t))
        