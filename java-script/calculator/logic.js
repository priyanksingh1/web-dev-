let calculate = document.querySelector('.inputvalue');
let currentValue = '';
let prevValue = 0;
let operatorClicked = false;
let values = '';
let buttonValue = '';
let operator = '';



function ButtonPress(buttonValue) {
    if (Number(buttonValue) >= 0 && Number(buttonValue) <= 9 || buttonValue ==='.') {
        if(buttonValue === '.') {
            if (currentValue.includes('.')) {
                if (operator) {
                    let splitData = currentValue.split(operator);
                    console.log(splitData);
                    if (splitData[1].includes('.')) return;
                } else return;
            }
        }

        currentValue += buttonValue;
        calculate.value = currentValue;
    }
    else if (buttonValue === "+") {
        operatorWork();
        operator = '+'
        currentValue += buttonValue;
        calculate.value = currentValue;
        }
        else if (buttonValue === "-"){
            operatorWork();
            operator = '-'
            currentValue += buttonValue;
            calculate.value = currentValue;
        }
        else if(buttonValue === "*"){
            operatorWork();
            operator = '*'
            currentValue += buttonValue;
            calculate.value = currentValue;
    }
    else if(buttonValue ==="/"){
            operatorWork();
            operator = '/'
            currentValue += buttonValue;
            calculate.value = currentValue;

    }
    else if (buttonValue === "=") {
        calculate.value = equalto(currentValue);
        currentValue = calculate.value;    
    } else if (buttonValue === "reset") {
        currentValue = '';
        calculate.value = '';
    } else if (buttonValue === "delete") {
        currentValue = currentValue.slice(0, -1);
        calculate.value = currentValue;
    }
}
function operatorWork (){
    if (!operatorClicked) {
        prevValue = Number(currentValue);
        currentValue += buttonValue;
        calculate.value = currentValue;
        operatorClicked = true;
    } else {
        currentValue = equalto(currentValue);
        prevValue = Number(currentValue);
        currentValue += buttonValue;
        calculate.value = currentValue;
    }

}

function equalto(currentValue) {
    let values;
    
    if (operator) {
        let numbers = currentValue.split(operator); 
        
        switch (operator) {
            case "+":
            values = numbers.reduce((a, b) => Number(a) + Number(b));
            break;
            
            case "-":
            values = numbers.reduce((a, b) => Number(a) - Number(b));
            break;

            case "*":
            values = numbers.reduce((a, b) => Number(a) * Number(b));
            break;
            
            case "/":
            values = numbers.reduce((a, b) => Number(a) / Number(b));
            break;
            
            default:
                break;
            }
            return values.toString(); 
            }
            return currentValue;
        }
        
        
        
        let buttons = document.querySelectorAll('button');
        buttons.forEach(button => {
            let buttonValue = button.value;
            
            button.addEventListener('click', () => {
                ButtonPress(buttonValue);
            })
        });
        
        document.addEventListener('keydown', (event) => {
            let keyPressed = event.key;
            if( keyPressed === "Backspace"){
                currentValue = currentValue.slice(0, -1);
                calculate.value = currentValue;
                
            }
            else if(keyPressed === "Enter"){
                calculate.value = equalto(currentValue);
                currentValue = calculate.value;
                
            }
            ButtonPress(keyPressed);
        });
        
        // function decimalfun(currentValue){
            // let point = document.getElementById("point").value;
            // let decinumber=  currentValue.split(point);
            // console.log(decinumber);
            
            // values = decinumber.reduce((a,b) =>{
            //     console.log(a);
            //     console.log(b);
            //     if(a.includes('.') ){
            //     }
            //     if (!b.includes('.') ){
            //     }
            //     return decinumber.toString();
            // })
            //     return currentValue;
            // }
        
        // let calculate = document.querySelector('.inputvalue');
        // let numbers = document.querySelectorAll('.number');
        // let addBtn = document.querySelector('.add');
        // let subBtn = document.querySelector('.sub');
        // let multiplyBtn = document.querySelector('.multiply');
        // let divideBtn = document.querySelector('.divide');
        // let decimalBtn = document.querySelector('.decimal');
        // let resetBtn = document.getElementsByClassName('reset');
        // let deleteBtn = document.getElementsByClassName('delete');
        // let equalBtn = document.querySelector('.equal');
        
        // let currentValue = '';
        // let prevValue = '';
        // let operator = '';
    
    // numbers.forEach(number => {
    //     let numberValue = number.value;
    //     number.addEventListener('click', () => {
    //         currentValue+= numberValue;
    //         console.log(currentValue);
    //         calculate.value = currentValue;
    //      });
    // });
    
    
    
    // addBtn.addEventListener('click', () =>{
    //     operator = '+';
    //     console.log(operator);
    //     currentValue += operator;
    //     calculate.value = currentValue;
    // });
    // subBtn.addEventListener('click', () =>{
    //     operator = '-';
    //     currentValue += operator;
    //     calculate.value = currentValue;
    // });
    // multiplyBtn.addEventListener('click', () =>{
    //     operator = '*';
    //     currentValue += operator;
    //     calculate.value = currentValue;
    // });
    // divideBtn.addEventListener('click', () =>{
    //     operator = '/';
    //     currentValue += operator;
    //     calculate.value = currentValue;
    // });