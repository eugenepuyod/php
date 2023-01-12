<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="id">Id</div>
    <div class="class1"><a href="test.com">Class 1</a></div>
    <div class="class2"><a href="test.com">Class 2</a></div>

    <span>Today's date is </span>
<script type="text/javascript">
    // var ints = "sbs3.23uLiu323u294402";
    

    // function getNumber(int){
        
    //     //var numbs = int.match(/[^0-9]/g);
    //     //var numbs = int.match(/[+-]?([0-9]*[.])?[0-9]+/);
    //     // var numbs = int.match(/[+-]?([0-9]*[.])?[0-9]+/);
    //     // var numb = "";

    //     // for(var i = 0; i < numbs.length; i++){
    //     //     numb += numbs[i]+'';
    //     // }
    //     //return numbs;

    //     // var atindex = "";
    //     // atindex = int.at(3);

    //     // return atindex;

    //     // var numbers = '';
    //     // for(var i = 0; i < int.length; i++){
    //     //     if(!isNaN(int[i])){
    //     //         numbers += int[i];
    //     //     }
    //     // }
    //     // return numbers;

    // }

    // alert(getNumber(ints));


    // let animal = {hasChlorophyl: false};

    // let dog = Object.create(animal);

    // Object.assign(dog, {
    //     speak() {
    //         console.log("Woof!");
    //     }
    // });

    // let suzanna = Object.create(dog);
    // Object.assign(suzanna, {
    //     name: "Suzanna"
    // });

    // suzanna.speak();
    // console.log(suzanna.name);





    // let animal = {hasFiveLegs: false};

    // let dog = Object.create(animal);
    // Object.assign(dog, {
    //     speack(){
    //         console.log('Awwwr');
    //     }
    // })

    // let moneth = Object.create(dog);
    // Object.assign(moneth, {
    //     name: "Moneth"
    // })

    // moneth.speack();
    // console.log(moneth.name);

    // console.log(document.getElementById('id').innerHTML = "Hello World");
    // console.log(document.getElementsByClassName('class').length);
    // console.log(document.getElementsByTagName('a')[1].innerText);




    //closure

    // var outer = function(passed){
    //     var inner = function(inner){
    //         return passed + inner;
    //     }
    //     return inner;
    // }

    // var getouter = new outer(2);

    // console.log(getouter(3));


//     const source = 
// `1. Last, First  123 Main 2.6 St  buncha 
//     buncha buncha

// 2. Lasta, Firsta 234 Lane St etc etc`;

// //const result = source.match(/(?<=(\d+\..+))\d+/gm);
// const result = source.match(/^[0-9]*\.?[0-9]*$/);
// console.log(result);




        
// const span = document.createElement("span");
// span.setAttribute("class", "date");
// span.textContent = new Date().toDateString();
// document.body.appendChild(span);
        

let animal = {};
let dog = Object.create(animal);
Object.assign(dog, {
    talk(){
        let class1 = document.querySelector('.class1').innerText = "Hello World";
        return class1;
    },
    sing(){
        return "blabal";
    }
})

console.log(dog.talk());





    
    
</script>
</body>
</html>