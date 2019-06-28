const values= [13.5,12.1,10.9,16.3,11.4];

//forEach
let result= [];

values.forEach((item)=>{
result.push(Math.round(item));
})

//map
const results = values.map(val=>Math.round(val)); //map fuction is used for transforming arrays, it returns an array

//filter
const shortWay = values.filter(val => val >13); //it goes thru an array and return only those values that match the conditions in the function. Val provided to the function equals to the element of the array
const fullWay = values.filter((val) => { return val >13 });

//reduce

const reduceFct = values.reduce((x,y)=>x+y);// will go thru the array and will compute function on the first 2 items and and the result will use as the first argument (called accumulator) for next itteration
const reduceFctwithParam = values.reduce((x,y)=>x+y,1); //you can specify the first value of x at the beggining of iterration

//Tip for working with array - using spreading 
const arr = [1,2,5];
console.log([...arr,6]); // return 1,2,5,6
