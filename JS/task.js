
var twoSum = function(nums, target) {
    let arr=[];
    
    for(let i=0;i<nums.length;i++){
        
        
            for(let j=1;j<nums.length;j++){
                
            
        if((nums[i]+nums[j])===target&&i!==j){
            arr.push(nums.indexOf(nums[i]));
            arr.push(nums.lastIndexOf(nums[j]));
            
            
        }
        
    }
    
        }
        return arr;
    }      
        
  
console.log(twoSum([2,7,11,15],9));
