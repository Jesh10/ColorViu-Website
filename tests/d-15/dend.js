const result = document.querySelector('#result')
const severity = document.querySelector('#severity')
const canvas = document.querySelector("#canvas")
const ctx = canvas.getContext("2d")
const arrange = JSON.parse(localStorage.getItem('d15'))

var numberOfSides = 17;
ctx.beginPath();
ctx.translate(100, 100);

let order = []
let increments = []
let pro = []
let deu = []
let tri = []

let coordinates = [
    {
        id: 0,
        x: 80,
        y: 300,
    },
    {
        id: 1,
        x: 100,
        y: 190,
    },
    {
        id: 2,
        x: 160,
        y: 100,
    },
    {
        id: 3,
        x: 232,
        y: 30,
    },
    {
        id: 4,
        x: 354,
        y: 0,
    },
    {
        id: 5,
        x: 465,
        y: 10,
    },
    {
        id: 6,
        x: 560,
        y: 60,
    },
    {
        id: 7,
        x: 635,
        y: 142,
    },
    {
        id: 8,
        x: 675,
        y: 245,
    },
    {
        id: 9,
        x: 680,
        y: 360,
    },
    {
        id: 10,
        x: 645,
        y: 460,
    },
    {
        id: 11,
        x: 570,
        y: 540,
    },
    {
        id: 12,
        x: 456,
        y: 590,
    },
    {
        id: 13,
        x: 360,
        y: 600,
    },
    {
        id: 14,
        x: 252,
        y: 570,
    },
    {
        id: 15,
        x: 160,
        y: 500,
    },
    {
        id: 16,
        x: 100,
        y: 409,
    },
]

let entries = [...coordinates]
//console.log(entries)

function compare(){
    for (let i = 0; i < entries.length; i++){
        if(arrange.at(i) != entries[i].id){
            const find = entries.find(out => out.id === arrange.at(i))
            order.push(find)
        } else if (arrange.at(i) == entries[i].id){
            order.push(entries[i])
        }
    }
}
compare()
//console.log(order)

function protan(){
    
    ctx.strokeStyle = '#f51505'
    ctx.lineWidth = 5;
    ctx.beginPath()
    ctx.setLineDash([20,5]);
    ctx.moveTo(172, 0)
    ctx.lineTo(440, 670)
    ctx.stroke()
}
protan()

function deutan(){
    ctx.strokeStyle = '#278c12'
    ctx.lineWidth = 5;
    ctx.beginPath()
    ctx.moveTo(295, -20)
    ctx.lineTo(305, 670)
    ctx.stroke()
    ctx.closePath()
}
deutan()

function tritan(){
    ctx.strokeStyle = '#055df5'
    ctx.lineWidth = 5;
    ctx.beginPath()
    ctx.moveTo(40, 416)
    ctx.lineTo(765, 155)
    ctx.stroke()
    ctx.closePath()
}
tritan()

function numbers() {
    ctx.font = "18px Noto Sans, sans-serif"
    ctx.fillText("REFERENCE", 0, 340)

    ctx.font = "30px Noto Sans, sans-serif"
    ctx.fillText("1", 75, 170)

    ctx.font = "30px Noto Sans, sans-serif"
    ctx.fillText("2", 140, 80)

    ctx.font = "30px Noto Sans, sans-serif"
    ctx.fillText("3", 220, 10)

    ctx.font = "30px Noto Sans, sans-serif"
    ctx.fillText("4", 350, -20)

    ctx.font = "30px Noto Sans, sans-serif"
    ctx.fillText("5", 460, -10)

    ctx.font = "30px Noto Sans, sans-serif"
    ctx.fillText("6", 565, 40)

    ctx.font = "30px Noto Sans, sans-serif"
    ctx.fillText("7", 655, 130)

    ctx.font = "30px Noto Sans, sans-serif"
    ctx.fillText("8", 687, 230)

    ctx.font = "30px Noto Sans, sans-serif"
    ctx.fillText("9", 700, 355)

    ctx.font = "30px Noto Sans, sans-serif"
    ctx.fillText("10", 660, 490)

    ctx.font = "30px Noto Sans, sans-serif"
    ctx.fillText("11", 572, 590)

    ctx.font = "30px Noto Sans, sans-serif"
    ctx.fillText("12", 470, 625)

    ctx.font = "30px Noto Sans, sans-serif"
    ctx.fillText("13", 350, 640)

    ctx.font = "30px Noto Sans, sans-serif"
    ctx.fillText("14", 235, 610)

    ctx.font = "30px Noto Sans, sans-serif"
    ctx.fillText("15", 140, 545)

    ctx.font = "18px Noto Sans, sans-serif"
    ctx.fillText("REFERENCE", 0, 450)

    ctx.font = "16px Noto Sans, sans-serif"
    ctx.fillText("PROTAN", 170, 230)
    
    ctx.font = "16px Noto Sans, sans-serif"
    ctx.fillText("DEUTAN", 310, 170)

    ctx.font = "16px Noto Sans, sans-serif"
    ctx.fillText("TRITAN", 360, 370)

}
numbers()

function points(){
    ctx.setLineDash([0]);
    ctx.strokeStyle = '#0a0100'
    ctx.lineWidth = 1;
    for (let elements of coordinates) {
        ctx.beginPath()
        ctx.arc(elements.x, elements.y, 10, 0, 2 * Math.PI)
        ctx.stroke()
        ctx.closePath()
    }
}
points()

function connect(){
    ctx.strokeStyle = '#0a0100'
    ctx.lineWidth = 1;
    for (let i = 0; i < order.length; i++){
        ctx.beginPath()
        ctx.moveTo(order[i].x, order[i].y)
        ctx.lineTo(order[i+1].x, order[i+1].y)
        ctx.stroke()
        ctx.closePath()
        if (order[i+1].id ==16){
            break
        }
    }   
}
connect()

function gradient(){
    pdient = 2.5
    ddient = 4
    tdient = 0
    for (var i = 0; i < order.length; i++){
        incre = Math.abs(order[i+1].id - order[i].id)

        if (incre > 3){
            increments.add(incre);
        }
    }
    for (let i = 0; i < order.length; i++){
        ycomp = order[i+1].y - order[i].y
        xcomp = order[i+1].x - order[i].x
        grad = ycomp / xcomp

        if (increments.length > 3){
            if (grad == pdient){
                pro.push(grad)
                //console.log(pro)

            } else if(grad >= ddient){
                deu.push(grad)
                //console.log(deu)
                
            } else if(grad <= tdient){
                tri.push(grad)
                //console.log(tri)
                
            } 

            if (pro.length == 2 || pro.length == 3){
                result.innerHTML = "Protanomaly"
                severity.innerHTML = "Partially Severe Color Deficiency"
                localStorage.setItem('dmore', 'protan')

            } else if (pro.length > 3 || pro.length > deu.length || pro.length > tri.length){
                result.innerHTML = "Protanopia"
                severity.innerHTML = "Severe Color Deficiency"
                localStorage.setItem('dmore', 'protan')

            } else if (deu.length == 2 || deu.length == 3){
                result.innerHTML = "Deuteranomaly"
                severity.innerHTML = "Partially Severe Color Deficiency"
                localStorage.setItem('dmore', 'deutan') 

            } else if (deu.length > 3 || deu.length > pro.length ||  deu.length > tri.length){
                result.innerHTML = "Deuteranopia"
                severity.innerHTML = "Severe Color Deficiency"
                localStorage.setItem('dmore', 'deutan')

            } if (tri.length == 3 || tri.length == 4){
                result.innerHTML = "Tritanomaly"
                severity.innerHTML = "Partially Severe Color Deficiency"
                localStorage.setItem('dmore', 'tritan') 
            
            } else if (tri.length > 4 || tri.length > pro.length ||  tri.length > deu.length){
                result.innerHTML = "Tritanopia"
                severity.innerHTML = "Severe Color Deficiency"
                localStorage.setItem('dmore', 'tritan') 
                
            } 
        } else {
            result.innerHTML = "Trichromacy"
            severity.innerHTML = "Normal Color Vision"
            localStorage.setItem('dmore', 'normal')
        }
        
        if (order[i+1].id == 16){
            break
        }
    }   

    $r = result.innerHTML
    document.cookie = "dresult=" + $r;

    $s = severity.innerHTML
    document.cookie = "dseverity=" + $s;

}
gradient()

